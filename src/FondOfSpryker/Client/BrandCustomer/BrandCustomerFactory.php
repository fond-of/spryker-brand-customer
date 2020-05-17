<?php

namespace FondOfSpryker\Client\BrandCustomer;

use FondOfSpryker\Client\BrandCustomer\Dependency\Client\BrandCustomerToZedRequestClientInterface;
use FondOfSpryker\Client\BrandCustomer\Zed\BrandCustomerStub;
use FondOfSpryker\Client\BrandCustomer\Zed\BrandCustomerStubInterface;
use Spryker\Client\Kernel\AbstractFactory;

class BrandCustomerFactory extends AbstractFactory
{
    /**
     * @return \FondOfSpryker\Client\BrandCustomer\Zed\BrandCustomerStubInterface
     */
    public function createZedStub(): BrandCustomerStubInterface
    {
        return new BrandCustomerStub($this->getZedRequestClient());
    }

    /**
     * @return \FondOfSpryker\Client\BrandCustomer\Dependency\Client\BrandCustomerToZedRequestClientInterface
     */
    protected function getZedRequestClient(): BrandCustomerToZedRequestClientInterface
    {
        return $this->getProvidedDependency(BrandCustomerDependencyProvider::CLIENT_ZED_REQUEST);
    }
}
