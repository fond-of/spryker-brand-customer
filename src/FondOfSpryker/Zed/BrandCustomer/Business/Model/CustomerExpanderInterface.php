<?php

namespace FondOfSpryker\Zed\BrandCustomer\Business\Model;

use Generated\Shared\Transfer\CustomerTransfer;

interface CustomerExpanderInterface
{
    /**
     * @param \Generated\Shared\Transfer\CustomerTransfer $customerTransfer
     *
     * @return \Generated\Shared\Transfer\CustomerTransfer
     */
    public function expandCustomerTransferWithBrandIds(CustomerTransfer $customerTransfer): CustomerTransfer;
}
