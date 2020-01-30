<?php

namespace FondOfSpryker\Zed\BrandCustomer\Business\Model;

use ArrayObject;
use FondOfSpryker\Zed\BrandCustomer\Persistence\BrandCustomerRepositoryInterface;
use Generated\Shared\Transfer\BrandCustomerRelationTransfer;
use Generated\Shared\Transfer\BrandTransfer;
use Generated\Shared\Transfer\CustomerBrandRelationTransfer;

class BrandCustomerRelationReader implements BrandCustomerRelationReaderInterface
{
    /**
     * @var \FondOfSpryker\Zed\BrandCustomer\Persistence\BrandCustomerRepositoryInterface
     */
    protected $brandCustomerRepository;

    /**
     * @param \FondOfSpryker\Zed\BrandCustomer\Persistence\BrandCustomerRepositoryInterface $brandCustomerRepository
     */
    public function __construct(BrandCustomerRepositoryInterface $brandCustomerRepository)
    {
        $this->brandCustomerRepository = $brandCustomerRepository;
    }

    /**
     * @param \Generated\Shared\Transfer\CustomerBrandRelationTransfer $customerBrandRelationTransfer
     *
     * @return \Generated\Shared\Transfer\CustomerBrandRelationTransfer
     */
    public function getCustomerBrandRelation(
        CustomerBrandRelationTransfer $customerBrandRelationTransfer
    ): CustomerBrandRelationTransfer {
        $customerBrandRelationTransfer->requireIdCustomer();
        $relatedBrands = $this->brandCustomerRepository->getRelatedBrandsByCustomerId(
            $customerBrandRelationTransfer->getIdCustomer()
        );

        $idBrands = $this->getIdBrands($relatedBrands);

        $customerBrandRelationTransfer
            ->setBrands($relatedBrands)
            ->setIdBrands($idBrands);

        return $customerBrandRelationTransfer;
    }

    /**
     * @param \ArrayObject|\Generated\Shared\Transfer\BrandTransfer[] $relatedBrands
     *
     * @return int[]
     */
    protected function getIdBrands(ArrayObject $relatedBrands): array
    {
        return array_map(function (BrandTransfer $brandTransfer) {
            return $brandTransfer->getIdBrand();
        }, $relatedBrands->getArrayCopy());
    }

    /**
     * @inheritDoc
     */
    public function getBrandCustomerRelation(
        BrandCustomerRelationTransfer $brandCustomerRelationTransfer
    ): BrandCustomerRelationTransfer {
        $brandCustomerRelationTransfer->requireIdBrand();
        $customerIds = $this->brandCustomerRepository->getRelatedCustomerIdsByIdBrand($brandCustomerRelationTransfer->getIdBrand());
        $brandCustomerRelationTransfer->setCustomerIds($customerIds);

        return $brandCustomerRelationTransfer;
    }
}
