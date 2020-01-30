<?php

namespace FondOfSpryker\Zed\BrandCustomer\Persistence;

use ArrayObject;
use Generated\Shared\Transfer\BrandCollectionTransfer;
use Generated\Shared\Transfer\BrandCustomerRelationTransfer;
use Generated\Shared\Transfer\BrandTransfer;
use Orm\Zed\BrandCustomer\Persistence\Map\FosBrandCustomerTableMap;
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

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param int $idCompany
     *
     * @throws
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\BrandTransfer[]
     */
    public function getRelatedBrandsByCustomerId(int $idCustomer): ArrayObject
    {
        $brandCustomerEntities = $this->getFactory()
            ->createBrandCustomerQuery()
            ->filterByFkCustomer($idCustomer)
            ->find();

        $relatedBrands = new ArrayObject();

        foreach ($brandCustomerEntities as $brandCustomerEntity) {
            $brandEntityTransfer = $brandCustomerEntity->getFosBrand();

            $brandTransfer = new BrandTransfer();
            $brandTransfer->fromArray($brandEntityTransfer->toArray(), true);

            $relatedBrands->append($brandTransfer);
        }

        return $relatedBrands;
    }

    /**
     * @param int $idBrand
     *
     * @return int[]
     */
    public function getRelatedCustomerIdsByIdBrand(int $idBrand): array
    {
        $brandCustomerQuery = $this->getFactory()
            ->createBrandCustomerQuery()
            ->select(FosBrandCustomerTableMap::COL_FK_CUSTOMER);

        return $brandCustomerQuery
            ->findByFkBrand($idBrand)
            ->toArray();
    }
}
