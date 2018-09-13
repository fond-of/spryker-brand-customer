<?php

namespace FondOfSpryker\Zed\BrandCustomer;

use Codeception\Test\Unit;
use Spryker\Zed\Kernel\Container;

class BrandCustomerDependencyProviderTest extends Unit
{
    /**
     * @var \Spryker\Zed\Kernel\Container
     */
    protected $container;

    /**
     * @var \FondOfSpryker\Zed\BrandCustomer\BrandCustomerDependencyProvider
     */
    protected $brandCustomerDependencyProvider;

    /**
     * @return void
     */
    protected function _before(): void
    {
        parent::_before();

        $this->container = new Container();
        $this->brandCustomerDependencyProvider = new BrandCustomerDependencyProvider();
    }

    /**
     * @return void
     */
    public function testProvidePersistenceLayerDependencies(): void
    {
        $this->brandCustomerDependencyProvider->providePersistenceLayerDependencies($this->container);
        $this->assertArrayHasKey(BrandCustomerDependencyProvider::PROPEL_QUERY_BRAND, $this->container);
        $this->assertArrayHasKey(BrandCustomerDependencyProvider::PROPEL_QUERY_BRAND_CUSTOMER, $this->container);
    }
}
