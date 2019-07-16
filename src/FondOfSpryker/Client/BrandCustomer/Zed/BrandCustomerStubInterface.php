<?php

namespace FondOfSpryker\Client\BrandCustomer\Zed;

use Generated\Shared\Transfer\CustomerTransfer;

interface BrandCustomerStubInterface
{
    /**
     * @param \Generated\Shared\Transfer\CustomerTransfer $customerTransfer
     *
     * @return \Generated\Shared\Transfer\CustomerTransfer
     */
    public function expandCustomer(CustomerTransfer $customerTransfer): CustomerTransfer;
}
