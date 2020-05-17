<?php

namespace FondOfSpryker\Zed\BrandCustomer\Persistence;

use Generated\Shared\Transfer\BrandTransfer;
use Orm\Zed\BrandCustomer\Persistence\FosBrandCustomer;
use Spryker\Zed\Kernel\Persistence\AbstractEntityManager;

/**
 * @method \FondOfSpryker\Zed\BrandCustomer\Persistence\BrandCustomerPersistenceFactory getFactory()
 */
class BrandCustomerEntityManager extends AbstractEntityManager implements BrandCustomerEntityManagerInterface
{
    /**
     * @param int[] $idBrands
     * @param int $idCustomer
     *
     * @return void
     */
    public function addBrands(array $idBrands, int $idCustomer): void
    {
        foreach ($idBrands as $idBrand) {
            $customerBrandEntity = new FosBrandCustomer();
            $customerBrandEntity->setFkCustomer($idCustomer)
                ->setFkBrand($idBrand)
                ->save();
        }
    }

    /**
     * @param int[] $idBrands
     * @param int $idCustomer
     *
     * @return void
     */
    public function removeBrands(array $idBrands, int $idCustomer): void
    {
        if (count($idBrands) === 0) {
            return;
        }

        $this->getFactory()
            ->createBrandCustomerQuery()
            ->filterByFkCustomer($idCustomer)
            ->filterByFkBrand_In($idBrands)
            ->delete();
    }

    /**
     * @param int $idBrand
     * @param int[] $customerIds
     *
     * @return void
     */
    public function addCustomerRelations(int $idBrand, array $customerIds): void
    {
        foreach ($customerIds as $idCustomer) {
            $brandCustomerEntity = new FosBrandCustomer();
            $brandCustomerEntity->setFkBrand($idBrand)
                ->setFkCustomer($idCustomer)
                ->save();
        }
    }

    /**
     * @param int $idBrand
     * @param int[] $customerIds
     *
     * @return void
     */
    public function removeCustomerRelations(int $idBrand, array $customerIds): void
    {
        if (!$customerIds) {
            return;
        }

        $brandCustomerEntities = $this->getFactory()
            ->createBrandCustomerQuery()
            ->filterByFkBrand($idBrand)
            ->filterByFkCustomer_In($customerIds)
            ->find();

        foreach ($brandCustomerEntities as $brandCustomerEntity) {
            $brandCustomerEntity->delete();
        }
    }

    /**
     * @return void
     */
    public function deleteBrandCustomerRelation(BrandTransfer $brandTransfer): void
    {
        $brandCustomerEntities = $this->getFactory()
            ->createBrandCustomerQuery()
            ->filterByFkBrand($brandTransfer->getIdBrand())
            ->find();

        foreach ($brandCustomerEntities as $brandCustomerEntity) {
            $brandCustomerEntity->delete();
        }
    }
}
