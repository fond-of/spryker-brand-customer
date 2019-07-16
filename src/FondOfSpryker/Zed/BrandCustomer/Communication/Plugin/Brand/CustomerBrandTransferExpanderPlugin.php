<?php

namespace FondOfSpryker\Zed\BrandCustomer\Communication\Plugin\Brand;

use FondOfSpryker\Zed\Brand\Dependency\Plugin\BrandTransferExpanderPluginInterface;
use Generated\Shared\Transfer\BrandTransfer;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;

/**
 * @method \FondOfSpryker\Zed\BrandCustomer\Business\BrandCustomerFacadeInterface getFacade()
 * @method \FondOfSpryker\Zed\BrandCustomer\BrandCustomerConfig getConfig()
 */
class CustomerBrandTransferExpanderPlugin extends AbstractPlugin implements BrandTransferExpanderPluginInterface
{
    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\BrandTransfer $brandTransfer
     *
     * @return \Generated\Shared\Transfer\BrandTransfer
     */
    public function expandTransfer(BrandTransfer $brandTransfer): BrandTransfer
    {
        return $this->getFacade()->expandBrandTransferWithCustomerRelation($brandTransfer);
    }
}
