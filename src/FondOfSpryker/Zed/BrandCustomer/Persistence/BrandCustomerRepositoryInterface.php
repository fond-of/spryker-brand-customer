<?php

namespace FondOfSpryker\Zed\BrandCustomer\Persistence;

use Generated\Shared\Transfer\BrandCollectionTransfer;

interface BrandCustomerRepositoryInterface
{
    /**
     * @param int $idCustomer
     *
     * @return \Generated\Shared\Transfer\BrandCollectionTransfer
     */
    public function getBrandCollectionByIdCustomer(int $idCustomer): BrandCollectionTransfer;
}
