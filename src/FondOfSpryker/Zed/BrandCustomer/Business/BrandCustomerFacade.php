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
     * {@inheritDoc}
     *
     * @api
     *
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
     * {@inheritDoc}
     *
     * @api
     *
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
     * @param \Generated\Shared\Transfer\CustomerBrandRelationTransfer $customerBrandRelationTransfer
     * @return \Generated\Shared\Transfer\CustomerBrandRelationTransfer
     */
    public function saveCustomerBrandRelation(
        CustomerBrandRelationTransfer $customerBrandRelationTransfer
    ): CustomerBrandRelationTransfer {
        return $this->getFactory()->createBrandCustomerRelationWriter()
            ->saveCustomerBrandRelation($customerBrandRelationTransfer);
    }

    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\BrandTransfer $brandTransfer
     *
     * @return \Generated\Shared\Transfer\BrandTransfer
     */
    public function saveBrandCustomerRelation(BrandTransfer $brandTransfer): BrandTransfer
    {
        return $this->getFactory()->createBrandCustomerRelationWriter()
            ->saveBrandCustomerRelation($brandTransfer);
    }

    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\BrandTransfer $brandTransfer
     *
     * @return \Generated\Shared\Transfer\BrandResponseTransfer
     */
    public function deleteBrandCustomerRelation(BrandTransfer $brandTransfer): BrandResponseTransfer
    {
        return $this->getFactory()->createBrandCustomerRelationWriter()
            ->deleteBrandCustomerRelation($brandTransfer);
    }

    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\CustomerBrandRelationTransfer $customerBrandRelationTransfer
     * @return \Generated\Shared\Transfer\CustomerBrandRelationTransfer
     */
    public function findCustomerBrandRelationByIdCustomer(
        CustomerBrandRelationTransfer $customerBrandRelationTransfer
    ): CustomerBrandRelationTransfer {
        return $this->getFactory()->createBrandCustomerRelationReader()
            ->getCustomerBrandRelation($customerBrandRelationTransfer);
    }
}
