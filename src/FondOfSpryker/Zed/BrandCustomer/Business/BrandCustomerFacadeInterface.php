<?php

namespace FondOfSpryker\Zed\BrandCustomer\Business;

use Generated\Shared\Transfer\BrandResponseTransfer;
use Generated\Shared\Transfer\BrandTransfer;
use Generated\Shared\Transfer\CustomerBrandRelationTransfer;
use Generated\Shared\Transfer\CustomerTransfer;

interface BrandCustomerFacadeInterface
{
    /**
     * Specification:
     * - Finds brands by customer.
     * - Expands customer transfer with BrandCollectionTransfer.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\CustomerTransfer $customerTransfer
     *
     * @return \Generated\Shared\Transfer\CustomerTransfer
     */
    public function expandCustomerTransferWithBrands(CustomerTransfer $customerTransfer): CustomerTransfer;

    /**
     * Specification:
     * - Finds customers by brand.
     * - Expands brand transfer with BrandCustomerRelationTransfer
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\BrandTransfer $brandTransfer
     *
     * @return \Generated\Shared\Transfer\BrandTransfer
     */
    public function expandBrandTransferWithCustomerRelation(BrandTransfer $brandTransfer): BrandTransfer;

    /**
     * Specification:
     * - Save Customer Brand relation using CustomerBrandRelationTransfer.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\CustomerBrandRelationTransfer|null $customerBrandRelationTransfer
     *
     * @return void
     */
    public function saveCustomerBrandRelation(?CustomerBrandRelationTransfer $customerBrandRelationTransfer = null): void;

    /**
     * Specification:
     * - Save Brand Customer relation using BrandTransfer.
     *
     * @param \Generated\Shared\Transfer\BrandTransfer $brandTransfer
     *
     * @return \Generated\Shared\Transfer\BrandTransfer
     */
    public function saveBrandCustomerRelation(BrandTransfer $brandTransfer): BrandTransfer;

    /**
     * Specification:
     * - Delete Brand Customer relation using BrandTransfer.
     *
     * @param \Generated\Shared\Transfer\BrandTransfer $brandTransfer
     *
     * @return \Generated\Shared\Transfer\BrandResponseTransfer
     */
    public function deleteBrandCustomerRelation(BrandTransfer $brandTransfer): BrandResponseTransfer;
}
