<?php

namespace FondOfSpryker\Zed\BrandCustomer\Business;

use Codeception\Test\Unit;
use FondOfSpryker\Zed\BrandCustomer\Business\Model\BrandExpanderInterface;
use FondOfSpryker\Zed\BrandCustomer\Business\Model\BrandReaderInterface;
use FondOfSpryker\Zed\BrandCustomer\Business\Model\CustomerExpanderInterface;
use FondOfSpryker\Zed\BrandCustomer\Persistence\BrandCustomerRepository;

class BrandCustomerBusinessFactoryTest extends Unit
{
    /**
     * @var \FondOfSpryker\Zed\BrandCustomer\Business\BrandCustomerBusinessFactory
     */
    protected $brandCustomerBusinessFactory;

    /**
     * @var \FondOfSpryker\Zed\BrandCustomer\Persistence\BrandCustomerRepository
     */
    protected $repositoryMock;

    /**
     * @return void
     */
    protected function _before(): void
    {
        parent::_before();

        $this->repositoryMock = $this->getMockBuilder(BrandCustomerRepository::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->brandCustomerBusinessFactory = new BrandCustomerBusinessFactory();
        $this->brandCustomerBusinessFactory->setRepository($this->repositoryMock);
    }

    /**
     * @return void
     */
    public function testCreateBrandReader(): void
    {
        $brandReader = $this->brandCustomerBusinessFactory->createBrandReader();
        $this->assertInstanceOf(BrandReaderInterface::class, $brandReader);
    }

    /**
     * @return void
     */
    public function testCreateCustomerExpander(): void
    {
        $customerExpander = $this->brandCustomerBusinessFactory->createCustomerExpander();
        $this->assertInstanceOf(CustomerExpanderInterface::class, $customerExpander);
    }

    /**
     * @return void
     */
    public function testCreateBrandExpander(): void
    {
        $brandExpander = $this->brandCustomerBusinessFactory->createBrandExpander();
        $this->assertInstanceOf(BrandExpanderInterface::class, $brandExpander);
    }
}
