<?php

namespace FondOfSpryker\Zed\BrandCustomer\Communication\Plugin\Customer;

use Codeception\Test\Unit;
use FondOfSpryker\Zed\BrandCustomer\Business\BrandCustomerFacade;
use FondOfSpryker\Zed\BrandCustomer\Communication\Plugin\Customer\BrandCustomerTransferExpanderPlugin;
use Generated\Shared\Transfer\CustomerTransfer;

class BrandCustomerTransferExpanderPluginTest extends Unit
{
    /**
     * @var \FondOfSpryker\Zed\BrandCustomer\Communication\Plugin\Customer\BrandCustomerTransferExpanderPlugin
     */
    protected $brandCustomerTransferExpanderPlugin;

    /**
     * @var \Generated\Shared\Transfer\CustomerTransfer|\PHPUnit\Framework\MockObject\MockObject
     */
    protected $customerTransferMock;

    /**
     * @var \FondOfSpryker\Zed\BrandCustomer\Business\BrandCustomerFacade|\PHPUnit\Framework\MockObject\MockObject
     */
    protected $brandCustomerFacade;

    /**
     * @return void
     */
    protected function _before(): void
    {
        parent::_before();

        $this->customerTransferMock = $this->getMockBuilder(CustomerTransfer::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->brandCustomerFacade = $this->getMockBuilder(BrandCustomerFacade::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->brandCustomerTransferExpanderPlugin = new BrandCustomerTransferExpanderPlugin();
        $this->brandCustomerTransferExpanderPlugin->setFacade($this->brandCustomerFacade);
    }

    /**
     * @return void
     */
    public function testExpandTransfer(): void
    {
        $this->brandCustomerFacade->expects($this->once())
            ->method('expandCustomerTransferWithBrands')
            ->with($this->customerTransferMock)
            ->willReturn($this->customerTransferMock);

        $customerTransfer = $this->brandCustomerTransferExpanderPlugin->expandTransfer($this->customerTransferMock);

        $this->assertEquals($this->customerTransferMock, $customerTransfer);
    }
}
