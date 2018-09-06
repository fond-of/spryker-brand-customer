<?php

namespace FondOfSpryker\Zed\BrandCustomer\Business;

use FondOfSpryker\Zed\BrandCustomer\Business\Model\BrandExpander;
use FondOfSpryker\Zed\BrandCustomer\Business\Model\BrandExpanderInterface;
use FondOfSpryker\Zed\BrandCustomer\Business\Model\BrandReader;
use FondOfSpryker\Zed\BrandCustomer\Business\Model\BrandReaderInterface;
use FondOfSpryker\Zed\BrandCustomer\Business\Model\CustomerExpander;
use FondOfSpryker\Zed\BrandCustomer\Business\Model\CustomerExpanderInterface;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;

/**
 * @method \FondOfSpryker\Zed\BrandCustomer\BrandCustomerConfig getConfig()
 */
class BrandCustomerBusinessFactory extends AbstractBusinessFactory
{
    /**
     * @return \FondOfSpryker\Zed\BrandCustomer\Business\Model\BrandReaderInterface
     */
    public function createBrandReader(): BrandReaderInterface
    {
        return new BrandReader($this->getRepository());
    }

    /**
     * @return \FondOfSpryker\Zed\BrandCustomer\Business\Model\CustomerExpanderInterface
     */
    public function createCustomerExpander(): CustomerExpanderInterface
    {
        return new CustomerExpander($this->createBrandReader());
    }

    /**
     * @return \FondOfSpryker\Zed\BrandCustomer\Business\Model\BrandExpanderInterface
     */
    public function createBrandExpander(): BrandExpanderInterface
    {
        return new BrandExpander($this->createBrandReader());
    }
}
