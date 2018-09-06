<?php

namespace FondOfSpryker\Zed\BrandCustomer\Business\Model;

use Generated\Shared\Transfer\BrandTransfer;

interface BrandExpanderInterface
{
    /**
     * @param \Generated\Shared\Transfer\BrandTransfer $customerTransfer
     *
     * @return \Generated\Shared\Transfer\BrandTransfer
     */
    public function expandBrandTransferWithCustomerRelations(BrandTransfer $customerTransfer): BrandTransfer;
}
