<?php

namespace FondOfSpryker\Zed\BrandCustomer\Persistence;

use Generated\Shared\Transfer\BrandTransfer;

interface BrandCustomerEntityManagerInterface
{
    /**
     * Specification:
     * - Adds new relations between brands and customer
     *
     * @param array $idBrands
     * @param int $idCustomer
     *
     * @return void
     */
    public function addBrands(array $idBrands, int $idCustomer): void;

    /**
     * Specification:
     * - Remove relations between brands and customer
     *
     * @param array $idBrands
     * @param int $idCustomer
     *
     * @return void
     */
    public function removeBrands(array $idBrands, int $idCustomer): void;

    /**
     * @param int $idBrand
     * @param int[] $customerIds
     *
     * @return void
     */
    public function addCustomerRelations(int $idBrand, array $customerIds): void;

    /**
     * @param int $idBrand
     * @param int[] $customerIds
     *
     * @return void
     */
    public function removeCustomerRelations(int $idBrand, array $customerIds): void;

    /**
     * @param \Generated\Shared\Transfer\BrandTransfer $brandTransfer
     *
     * @return void
     */
    public function deleteBrandCustomerRelation(BrandTransfer $brandTransfer): void;
}
