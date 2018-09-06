<?php

namespace FondOfSpryker\Zed\BrandCustomer\Persistence;

use Generated\Shared\Transfer\BrandCollectionTransfer;
use Generated\Shared\Transfer\BrandCustomerRelationTransfer;

interface BrandCustomerRepositoryInterface
{
    /**
     * @param int $idCustomer
     *
     * @return \Generated\Shared\Transfer\BrandCollectionTransfer
     */
    public function getBrandCollectionByIdCustomer(int $idCustomer): BrandCollectionTransfer;

    /**
     * @param int $idBrand
     *
     * @return \Generated\Shared\Transfer\BrandCustomerRelationTransfer
     */
    public function getCustomerCollectionByBrandId(int $idBrand): BrandCustomerRelationTransfer;
}
