<?php

namespace FondOfSpryker\Zed\BrandCustomer\Persistence;

use Generated\Shared\Transfer\BrandCollectionTransfer;
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
}
