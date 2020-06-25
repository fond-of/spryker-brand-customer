<?php

namespace FondOfSpryker\Zed\BrandCustomer\Business\Model;

use FondOfSpryker\Zed\BrandCustomer\Persistence\BrandCustomerEntityManagerInterface;
use Generated\Shared\Transfer\BrandCustomerRelationTransfer;
use Generated\Shared\Transfer\BrandResponseTransfer;
use Generated\Shared\Transfer\BrandTransfer;
use Generated\Shared\Transfer\CustomerBrandRelationTransfer;
use Generated\Shared\Transfer\MessageTransfer;
use Spryker\Zed\Kernel\Persistence\EntityManager\TransactionTrait;

class BrandCustomerRelationWriter implements BrandCustomerRelationWriterInterface
{
    use TransactionTrait;

    protected const MESSAGE_BRAND_DELETE_SUCCESS = 'Brand has been successfully removed.';

    /**
     * @var \FondOfSpryker\Zed\BrandCustomer\Business\Model\BrandCustomerRelationReaderInterface
     */
    protected $brandCustomerRelationReader;

    /**
     * @var \FondOfSpryker\Zed\BrandCustomer\Persistence\BrandCustomerEntityManagerInterface
     */
    protected $brandCustomerEntityManager;

    /**
     * BrandCustomerRelationWriter constructor.
     *
     * @param \FondOfSpryker\Zed\BrandCustomer\Business\Model\BrandCustomerRelationReaderInterface $brandCustomerRelationReader
     * @param \FondOfSpryker\Zed\BrandCustomer\Persistence\BrandCustomerEntityManagerInterface $brandCustomerEntityManager
     */
    public function __construct(
        BrandCustomerRelationReaderInterface $brandCustomerRelationReader,
        BrandCustomerEntityManagerInterface $brandCustomerEntityManager
    ) {
        $this->brandCustomerRelationReader = $brandCustomerRelationReader;
        $this->brandCustomerEntityManager = $brandCustomerEntityManager;
    }

    /**
     * @param \Generated\Shared\Transfer\CustomerBrandRelationTransfer $customerBrandRelationTransfer
     *
     * @return \Generated\Shared\Transfer\CustomerBrandRelationTransfer
     */
    public function saveCustomerBrandRelation(
        CustomerBrandRelationTransfer $customerBrandRelationTransfer
    ): CustomerBrandRelationTransfer {
        return $this->getTransactionHandler()->handleTransaction(function () use ($customerBrandRelationTransfer) {
            return $this->executeSaveCustomerBrandRelationTransaction($customerBrandRelationTransfer);
        });
    }

    /**
     * @param \Generated\Shared\Transfer\CustomerBrandRelationTransfer $customerBrandRelationTransfer
     *
     * @return \Generated\Shared\Transfer\CustomerBrandRelationTransfer
     */
    protected function executeSaveCustomerBrandRelationTransaction(
        CustomerBrandRelationTransfer $customerBrandRelationTransfer
    ): CustomerBrandRelationTransfer {

        $customerBrandRelationTransfer->requireIdCustomer();

        if (count($customerBrandRelationTransfer->getIdBrands()) === 0) {
            return $customerBrandRelationTransfer;
        }

        $idCustomer = $customerBrandRelationTransfer->getIdCustomer();
        $requestedBrandIds = $this->getRequestedBrandIds($customerBrandRelationTransfer);
        $currentBrandIds = $this->getRelatedBrandIds($customerBrandRelationTransfer);

        $saveBrandIds = array_diff($requestedBrandIds, $currentBrandIds);
        $deleteBrandIds = array_diff($currentBrandIds, $requestedBrandIds);

        $this->brandCustomerEntityManager->addBrands($saveBrandIds, $idCustomer);
        $this->brandCustomerEntityManager->removeBrands($deleteBrandIds, $idCustomer);

        $customerBrandRelationTransfer->setIdBrands(
            $this->getRelatedBrandIds($customerBrandRelationTransfer)
        );

        return $customerBrandRelationTransfer;
    }

    /**
     * @param \Generated\Shared\Transfer\BrandTransfer $brandTransfer
     *
     * @return \Generated\Shared\Transfer\BrandTransfer
     */
    public function saveBrandCustomerRelation(BrandTransfer $brandTransfer): BrandTransfer
    {
        return $this->getTransactionHandler()->handleTransaction(function () use ($brandTransfer) {
            return $this->executeSaveBrandCustomerRelationTransaction($brandTransfer);
        });
    }

    /**
     * @param \Generated\Shared\Transfer\BrandTransfer $brandTransfer
     *
     * @return \Generated\Shared\Transfer\BrandTransfer
     */
    protected function executeSaveBrandCustomerRelationTransaction(BrandTransfer $brandTransfer): BrandTransfer
    {
        $brandTransfer->requireIdBrand();
        $idBrand = $brandTransfer->getIdBrand();
        $brandCustomerRelationTransfer = $brandTransfer->getBrandCustomerRelation();

        if ($brandCustomerRelationTransfer->getIdBrand() == null) {
            $brandCustomerRelationTransfer->setIdBrand($idBrand);
        }

        $requestedCustomerIds = $this->getRequestedCustomerIds($brandCustomerRelationTransfer);
        $currentCustomerIds = $this->getRelatedCustomerIds($brandCustomerRelationTransfer);

        $saveCustomerIds = array_diff($requestedCustomerIds, $currentCustomerIds);
        $deleteCustomerIds = array_diff($currentCustomerIds, $requestedCustomerIds);

        $this->brandCustomerEntityManager->addCustomerRelations($idBrand, $saveCustomerIds);
        $this->brandCustomerEntityManager->removeCustomerRelations($idBrand, $deleteCustomerIds);

        $brandCustomerRelationTransfer->setCustomerIds(
            $this->getRelatedCustomerIds($brandCustomerRelationTransfer)
        );

        return $brandTransfer;
    }

    /**
     * @param \Generated\Shared\Transfer\BrandTransfer $brandTransfer
     *
     * @return \Generated\Shared\Transfer\BrandResponseTransfer
     */
    public function deleteBrandCustomerRelation(BrandTransfer $brandTransfer): BrandResponseTransfer
    {
        $brandResponseTransfer = (new BrandResponseTransfer())
            ->setBrand($brandTransfer)
            ->setIsSuccessful(true);

        return $this->getTransactionHandler()->handleTransaction(function () use ($brandTransfer, $brandResponseTransfer) {
            return $this->executeDeleteBrandCustomerRelationTransaction($brandTransfer, $brandResponseTransfer);
        });
    }

    /**
     * @param \Generated\Shared\Transfer\BrandTransfer $brandTransfer
     *
     * @return \Generated\Shared\Transfer\BrandResponseTransfer
     */
    protected function executeDeleteBrandCustomerRelationTransaction(
        BrandTransfer $brandTransfer,
        BrandResponseTransfer $brandResponseTransfer
    ): BrandResponseTransfer {

        $this->brandCustomerEntityManager->deleteBrandCustomerRelation($brandTransfer);

        $brandResponseTransfer->addMessage(
            (new MessageTransfer())->setValue(static::MESSAGE_BRAND_DELETE_SUCCESS)
        );

        return $brandResponseTransfer;
    }

    /**
     * @param \Generated\Shared\Transfer\BrandCustomerRelationTransfer $brandCustomerRelationTransfer
     *
     * @return array
     */
    protected function getRelatedCustomerIds(
        BrandCustomerRelationTransfer $brandCustomerRelationTransfer
    ): array {
        $currentBrandCustomerRelationTransfer = $this->brandCustomerRelationReader->getBrandCustomerRelation($brandCustomerRelationTransfer);

        if (!$currentBrandCustomerRelationTransfer->getCustomerIds()) {
            return [];
        }

        return $currentBrandCustomerRelationTransfer->getCustomerIds();
    }

    /**
     * @param \Generated\Shared\Transfer\BrandCustomerRelationTransfer $brandCustomerRelationTransfer
     *
     * @return array
     */
    protected function getRequestedCustomerIds(
        BrandCustomerRelationTransfer $brandCustomerRelationTransfer
    ): array {
        if (!$brandCustomerRelationTransfer->getCustomerIds()) {
            return [];
        }

        return $brandCustomerRelationTransfer->getCustomerIds();
    }

    /**
     * @param \Generated\Shared\Transfer\CustomerBrandRelationTransfer $customerBrandRelationTransfer
     *
     * @return int[]
     */
    protected function getRelatedBrandIds(
        CustomerBrandRelationTransfer $customerBrandRelationTransfer
    ): array {
        $currentCustomerBrandRelationTransfer =
            $this->brandCustomerRelationReader->getCustomerBrandRelation($customerBrandRelationTransfer);

        if (!$currentCustomerBrandRelationTransfer->getIdBrands()) {
            return [];
        }

        return $currentCustomerBrandRelationTransfer->getIdBrands();
    }

    /**
     * @param \Generated\Shared\Transfer\CustomerBrandRelationTransfer $customerBrandRelationTransfer
     *
     * @return int[]
     */
    protected function getRequestedBrandIds(
        CustomerBrandRelationTransfer $customerBrandRelationTransfer
    ): array {
        if (!$customerBrandRelationTransfer->getIdBrands()) {
            return [];
        }

        return $customerBrandRelationTransfer->getIdBrands();
    }
}
