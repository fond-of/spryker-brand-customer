<?php

namespace FondOfSpryker\Zed\BrandCustomer\Business\Model;

use Generated\Shared\Transfer\BrandResponseTransfer;
use Generated\Shared\Transfer\BrandTransfer;
use Generated\Shared\Transfer\CustomerBrandRelationTransfer;

interface BrandCustomerRelationWriterInterface
{
    /**
     * @param \Generated\Shared\Transfer\CustomerBrandRelationTransfer|null $customerBrandRelationTransfer
     */
    public function saveCustomerBrandRelation(?CustomerBrandRelationTransfer $customerBrandRelationTransfer = null): void;

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
