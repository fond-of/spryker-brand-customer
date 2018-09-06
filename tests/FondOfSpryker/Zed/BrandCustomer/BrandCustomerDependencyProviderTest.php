<?php

namespace FondOfSpryker\Zed\BrandCustomer;

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
}
