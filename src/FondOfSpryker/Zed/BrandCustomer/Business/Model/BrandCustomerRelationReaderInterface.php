<?php

namespace FondOfSpryker\Zed\BrandCustomer\Business\Model;

use Generated\Shared\Transfer\BrandCustomerRelationTransfer;
use Generated\Shared\Transfer\CustomerBrandRelationTransfer;

interface BrandCustomerRelationReaderInterface
{
    /**
     * @param \Generated\Shared\Transfer\CustomerBrandRelationTransfer $customerBrandRelationTransfer
     *
     * @return \Generated\Shared\Transfer\CustomerBrandRelationTransfer
     */
    public function getCustomerBrandRelation(
        CustomerBrandRelationTransfer $customerBrandRelationTransfer
    ): CustomerBrandRelationTransfer;

    /**
     * @param \Generated\Shared\Transfer\BrandCustomerRelationTransfer $brandCustomerRelationTransfer
     *
     * @return \Generated\Shared\Transfer\BrandCustomerRelationTransfer
     */
    public function getBrandCustomerRelation(
        BrandCustomerRelationTransfer $brandCustomerRelationTransfer
    ): BrandCustomerRelationTransfer;
}
