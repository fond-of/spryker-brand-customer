<?php

namespace FondOfSpryker\Zed\BrandCustomer;

use Closure;
use Codeception\Test\Unit;
use Spryker\Zed\Kernel\Container;

class BrandCustomerDependencyProviderTest extends Unit
{
    /**
     * @var \Spryker\Zed\Kernel\Container|\PHPUnit\Framework\MockObject\MockObject|null
     */
    protected $containerMock;

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

        $this->brandCustomerDependencyProvider = new BrandCustomerDependencyProvider();
        $this->containerMock = $this->getMockBuilder(Container::class)
            ->disableOriginalConstructor()
            ->getMock();
    }

    /**
     * @return void
     */
    public function testProvidePersistenceLayerDependencies(): void
    {
        $this->containerMock->expects($this->atLeastOnce())
            ->method('offsetSet')
            ->with(
                BrandCustomerDependencyProvider::PROPEL_QUERY_BRAND,
                $this->isInstanceOf(Closure::class)
            );

        $this->brandCustomerDependencyProvider->providePersistenceLayerDependencies($this->containerMock);
    }
}
