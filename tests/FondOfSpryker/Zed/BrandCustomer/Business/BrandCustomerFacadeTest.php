<?php

namespace FondOfSpryker\Zed\BrandCustomer\Business;

use Codeception\Test\Unit;
use FondOfSpryker\Zed\BrandCustomer\Business\Model\CustomerExpander;

class BrandCustomerFacadeTest extends Unit
{
    /**
     * @var \Generated\Shared\Transfer\CustomerTransfer|\PHPUnit\Framework\MockObject\MockObject
     */
    protected $customerTransferMock;

    /**
     * @var \FondOfSpryker\Zed\BrandCustomer\Business\Model\CustomerExpander|\PHPUnit\Framework\MockObject\MockObject
     */
    protected $customerExpanderMock;

    /**
     * @var \FondOfSpryker\Zed\BrandCustomer\Business\BrandCustomerBusinessFactory|\PHPUnit\Framework\MockObject\MockObject
     */
    protected $brandCustomerBusinessFactoryMock;

    /**
     * @var \FondOfSpryker\Zed\BrandCustomer\Business\BrandCustomerFacadeInterface
     */
    protected $brandCustomerFacade;

    /**
     * @return void
     */
    protected function _before(): void
    {
        parent::_before();

        $this->customerTransferMock = $this->getMockBuilder('\Generated\Shared\Transfer\CustomerTransfer')
            ->disableOriginalConstructor()
            ->getMock();

        $this->customerExpanderMock = $this->getMockBuilder(CustomerExpander::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->brandCustomerBusinessFactoryMock = $this->getMockBuilder(BrandCustomerBusinessFactory::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->brandCustomerFacade = new BrandCustomerFacade();

        $this->brandCustomerFacade->setFactory($this->brandCustomerBusinessFactoryMock);
    }

    /**
     * @return void
     */
    public function testExpandCustomerTransferWithBrandIds(): void
    {
        $this->brandCustomerBusinessFactoryMock->expects($this->atLeastOnce())
            ->method('createCustomerExpander')
            ->willReturn($this->customerExpanderMock);

        $this->customerExpanderMock->expects($this->atLeastOnce())
            ->method('expandCustomerTransferWithBrandIds')
            ->willReturn($this->customerTransferMock);

        $actualCustomerTransfer = $this->brandCustomerFacade->expandCustomerTransferWithBrandIds($this->customerTransferMock);

        $this->assertEquals($this->customerTransferMock, $actualCustomerTransfer);
    }
}
