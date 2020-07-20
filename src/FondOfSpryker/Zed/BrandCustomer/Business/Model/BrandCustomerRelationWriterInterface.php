<?php

namespace FondOfSpryker\Zed\BrandCustomer\Business\Model;

use Generated\Shared\Transfer\BrandResponseTransfer;
use Generated\Shared\Transfer\BrandTransfer;
use Generated\Shared\Transfer\CustomerBrandRelationTransfer;

interface BrandCustomerRelationWriterInterface
{
    /**
     * @param \Generated\Shared\Transfer\CustomerBrandRelationTransfer $customerBrandRelationTransfer
     *
     * @return \Generated\Shared\Transfer\CustomerBrandRelationTransfer
     */
    public function saveCustomerBrandRelation(
        CustomerBrandRelationTransfer $customerBrandRelationTransfer
    ): CustomerBrandRelationTransfer;

    /**
     * @param \Generated\Shared\Transfer\BrandTransfer $brandTransfer
     *
     * @return \Generated\Shared\Transfer\BrandTransfer
     */
    public function saveBrandCustomerRelation(BrandTransfer $brandTransfer): BrandTransfer;

    /**
     * @param \Generated\Shared\Transfer\BrandTransfer $brandTransfer
     *
     * @return \Generated\Shared\Transfer\BrandResponseTransfer
     */
    public function deleteBrandCustomerRelation(BrandTransfer $brandTransfer): BrandResponseTransfer;
}
