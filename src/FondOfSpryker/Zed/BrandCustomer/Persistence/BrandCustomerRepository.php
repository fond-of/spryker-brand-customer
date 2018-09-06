<?php

namespace FondOfSpryker\Zed\BrandCustomer\Persistence;

use Generated\Shared\Transfer\BrandCollectionTransfer;
use Generated\Shared\Transfer\BrandCustomerRelationTransfer;
use Generated\Shared\Transfer\BrandTransfer;
use Spryker\Zed\Kernel\Persistence\AbstractRepository;

/**
 * @method \FondOfSpryker\Zed\BrandCustomer\Persistence\BrandCustomerPersistenceFactory getFactory()
 */
class BrandCustomerRepository extends AbstractRepository implements BrandCustomerRepositoryInterface
{
    /**
     * @param int $idCustomer
     *
     * @return \Generated\Shared\Transfer\BrandCollectionTransfer
     */
    public function getBrandCollectionByIdCustomer(int $idCustomer): BrandCollectionTransfer
    {
        /** @var \Orm\Zed\Brand\Persistence\FosBrand[] $brandEntities */
        $brandEntities = $this->getFactory()
            ->getBrandQuery()
            ->useFosBrandCustomerQuery()
                ->filterByFkCustomer($idCustomer)
            ->endUse()
            ->find();

        $brandCollectionTransfer = new BrandCollectionTransfer();
        $brandCustomerMapper = $this->getFactory()->createBrandCustomerMapper();

        foreach ($brandEntities as $brandEntity) {
            $brandCollectionTransfer->addBrand(
                $brandCustomerMapper->mapBrand($brandEntity, new BrandTransfer())
            );
        }

        return $brandCollectionTransfer;
    }

    /**
     * @param int $idBrand
     *
     * @return \Generated\Shared\Transfer\BrandCustomerRelationTransfer
     */
    public function getCustomerCollectionByBrandId(int $idBrand): BrandCustomerRelationTransfer
    {
        /** @var \Orm\Zed\BrandCustomer\Persistence\FosBrandCustomer[] $brandCustomerEntities */
        $brandCustomerEntities = $this->getFactory()
            ->getBrandCustomerQuery()
            ->findByFkBrand($idBrand);

        $customerIds = [];
        foreach ($brandCustomerEntities as $entity) {
            $customerIds[] = $entity->getFkCustomer();
        }

        $brandCollectionTransfer = new BrandCustomerRelationTransfer();
        $brandCollectionTransfer->setIdBrand($idBrand);
        $brandCollectionTransfer->setCustomerIds($customerIds);

        return $brandCollectionTransfer;
    }
}
