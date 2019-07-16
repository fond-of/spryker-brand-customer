<?php

namespace FondOfSpryker\Client\BrandCustomer;

use Generated\Shared\Transfer\CustomerTransfer;

interface BrandCustomerClientInterface
{
    /**
     * @param \Generated\Shared\Transfer\CustomerTransfer $customerTransfer
     *
     * @return \Generated\Shared\Transfer\CustomerTransfer
     */
    public function expandCustomer(CustomerTransfer $customerTransfer): CustomerTransfer;
}
