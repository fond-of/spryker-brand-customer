<?php

namespace FondOfSpryker\Zed\BrandCustomer\Business;

use Generated\Shared\Transfer\CustomerTransfer;

interface BrandCustomerFacadeInterface
{
    /**
     * Specification:
     * - Finds brands by customer.
     * - Expands customer transfer with CustomerBrandCollectionTransfer.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\CustomerTransfer $customerTransfer
     *
     * @return \Generated\Shared\Transfer\CustomerTransfer
     */
    public function expandCustomerTransferWithBrandIds(CustomerTransfer $customerTransfer): CustomerTransfer;
}
