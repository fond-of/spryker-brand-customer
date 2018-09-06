<?php

namespace FondOfSpryker\Zed\BrandCustomer\Communication\Plugin;

use Codeception\Test\Unit;
use FondOfSpryker\Zed\BrandCustomer\Business\BrandCustomerFacade;
use Generated\Shared\Transfer\CustomerTransfer;

class BrandCustomerTransferExpanderTest extends Unit
{
    /**
     * @var \FondOfSpryker\Zed\BrandCustomer\Communication\Plugin\BrandCustomerTransferExpander
     */
    protected $brandCustomerTransferExpander;

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

        $this->brandCustomerTransferExpander = new BrandCustomerTransferExpander();

        $this->brandCustomerTransferExpander->setFacade($this->brandCustomerFacade);
    }

    /**
     * @return void
     */
    public function test(): void
    {
        $this->brandCustomerFacade->expects($this->atLeastOnce())
            ->method('expandCustomerTransferWithBrandIds')
            ->with($this->customerTransferMock)
            ->willReturn($this->customerTransferMock);

        $customerTransfer = $this->brandCustomerTransferExpander->expandTransfer($this->customerTransferMock);

        $this->assertEquals($this->customerTransferMock, $customerTransfer);
    }
}
