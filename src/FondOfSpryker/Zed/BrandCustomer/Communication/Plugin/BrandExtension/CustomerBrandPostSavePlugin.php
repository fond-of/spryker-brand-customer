<?php

namespace FondOfSpryker\Zed\BrandCustomer\Communication\Plugin\BrandExtension;

use FondOfSpryker\Zed\BrandExtension\Dependency\Plugin\BrandPostSavePluginInterface;
use Generated\Shared\Transfer\BrandTransfer;
use Generated\Shared\Transfer\CompanyTransfer;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;

/**
 * @method \FondOfSpryker\Zed\BrandCustomer\Business\BrandCustomerFacadeInterface getFacade()
 * @method \FondOfSpryker\Zed\BrandCustomer\BrandCustomerConfig getConfig()
 */
class CustomerBrandPostSavePlugin extends AbstractPlugin implements BrandPostSavePluginInterface
{
    /**
     * @param \Generated\Shared\Transfer\CompanyTransfer $companyTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyTransfer
     */
    public function hydrate(CompanyTransfer $companyTransfer): CompanyTransfer
    {
        return $this->getFacade()->hydrateCompany($companyTransfer);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\BrandTransfer $brandTransfer
     * @return \Generated\Shared\Transfer\BrandTransfer
     */
    public function execute(BrandTransfer $brandTransfer): BrandTransfer
    {
        return $this->getFacade()->saveBrandCustomerRelation($brandTransfer);
    }
}
