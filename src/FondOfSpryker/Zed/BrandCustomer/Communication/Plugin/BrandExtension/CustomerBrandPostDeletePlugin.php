<?php

namespace FondOfSpryker\Zed\BrandCustomer\Communication\Plugin\BrandExtension;

use FondOfSpryker\Zed\BrandExtension\Dependency\Plugin\BrandPostDeletePluginInterface;
use Generated\Shared\Transfer\BrandResponseTransfer;
use Generated\Shared\Transfer\BrandTransfer;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;

/**
 * @method \FondOfSpryker\Zed\BrandCustomer\Business\BrandCustomerFacadeInterface getFacade()
 * @method \FondOfSpryker\Zed\BrandCustomer\BrandCustomerConfig getConfig()
 */
class CustomerBrandPostDeletePlugin extends AbstractPlugin implements BrandPostDeletePluginInterface
{
    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\BrandTransfer $brandTransfer
     *
     * @return \Generated\Shared\Transfer\BrandResponseTransfer
     */
    public function execute(BrandTransfer $brandTransfer): BrandResponseTransfer
    {
        return $this->getFacade()->deleteBrandCustomerRelation($brandTransfer);
    }
}
