<?php

namespace FondOfSpryker\Zed\BrandCustomer\Business;

use Generated\Shared\Transfer\BrandResponseTransfer;
use Generated\Shared\Transfer\BrandTransfer;
use Generated\Shared\Transfer\CustomerBrandRelationTransfer;
use Generated\Shared\Transfer\CustomerTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * @method \FondOfSpryker\Zed\BrandCustomer\Business\BrandCustomerBusinessFactory getFactory()
 * @method \FondOfSpryker\Zed\BrandCustomer\Persistence\BrandCustomerRepositoryInterface getRepository()
 * @method \FondOfSpryker\Zed\BrandCustomer\Persistence\BrandCustomerEntityManagerInterface getEntityManager()
 */
class BrandCustomerFacade extends AbstractFacade implements BrandCustomerFacadeInterface
{
    /**
     * @param \Generated\Shared\Transfer\CustomerTransfer $customerTransfer
     *
     * @return \Generated\Shared\Transfer\CustomerTransfer
     */
    public function expandCustomerTransferWithBrands(CustomerTransfer $customerTransfer): CustomerTransfer
    {
        return $this->getFactory()
            ->createCustomerExpander()
            ->expandCustomerTransferWithBrands($customerTransfer);
    }

    /**
     * @param \Generated\Shared\Transfer\BrandTransfer $brandTransfer
     *
     * @return \Generated\Shared\Transfer\BrandTransfer
     */
    public function expandBrandTransferWithCustomerRelation(BrandTransfer $brandTransfer): BrandTransfer
    {
        return $this->getFactory()
            ->createBrandExpander()
            ->expandBrandTransferWithCustomerRelations($brandTransfer);
    }

    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\CustomerBrandRelationTransfer|null $customerBrandRelationTransfer
     *
     * @return void
     */
    public function saveCustomerBrandRelation(?CustomerBrandRelationTransfer $customerBrandRelationTransfer = null): void
    {
        $this->getFactory()->createBrandCustomerRelationWriter()
            ->saveCustomerBrandRelation($customerBrandRelationTransfer);
    }

    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\BrandTransfer $brandTransfer
     * @return \Generated\Shared\Transfer\BrandTransfer
     */
    public function saveBrandCustomerRelation(BrandTransfer $brandTransfer): BrandTransfer
    {
        return $this->getFactory()->createBrandCustomerRelationWriter()
            ->saveBrandCustomerRelation($brandTransfer);
    }

    /**
     *
     * {@inheritDoc}
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\BrandTransfer $brandTransfer
     * @return \FondOfSpryker\Zed\BrandCompany\Business\BrandResponseTransfer
     */
    public function deleteBrandCustomerRelation(BrandTransfer $brandTransfer): BrandResponseTransfer
    {
        return $this->getFactory()->createBrandCustomerRelationWriter()
            ->deleteBrandCustomerRelation($brandTransfer);
    }
}
