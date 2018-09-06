<?php

namespace FondOfSpryker\Zed\BrandCustomer\Business\Model;

use Generated\Shared\Transfer\CustomerTransfer;
use Generated\Shared\Transfer\BrandCollectionTransfer;

interface BrandReaderInterface
{
    /**
     * @param \Generated\Shared\Transfer\CustomerTransfer $customerTransfer
     *
     * @return \Generated\Shared\Transfer\BrandCollectionTransfer
     */
    public function getBrandCollectionByIdCustomerId(CustomerTransfer $customerTransfer): BrandCollectionTransfer;
}
