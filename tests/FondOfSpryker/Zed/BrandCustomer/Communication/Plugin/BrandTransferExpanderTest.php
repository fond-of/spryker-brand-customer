<?php

namespace FondOfSpryker\Zed\BrandCustomer\Communication\Plugin;

use Codeception\Test\Unit;
use FondOfSpryker\Zed\BrandCustomer\Business\BrandCustomerFacade;
use Generated\Shared\Transfer\BrandTransfer;

class BrandTransferExpanderTest extends Unit
{
    /**
     * @var \FondOfSpryker\Zed\BrandCustomer\Communication\Plugin\BrandTransferExpander
     */
    protected $brandTransferExpander;

    /**
     * @var \Generated\Shared\Transfer\BrandTransfer|\PHPUnit\Framework\MockObject\MockObject
     */
    protected $brandTransferMock;

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

        $this->brandTransferMock = $this->getMockBuilder(BrandTransfer::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->brandCustomerFacade = $this->getMockBuilder(BrandCustomerFacade::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->brandTransferExpander = new BrandTransferExpander();
        $this->brandTransferExpander->setFacade($this->brandCustomerFacade);
    }

    /**
     * @return void
     */
    public function testExpandTransfer(): void
    {
        $this->brandCustomerFacade->expects($this->once())
            ->method('expandBrandTransferWithCustomerRelation')
            ->with($this->brandTransferMock)
            ->willReturn($this->brandTransferMock);

        $brandTransfer = $this->brandTransferExpander->expandTransfer($this->brandTransferMock);

        $this->assertEquals($this->brandTransferMock, $brandTransfer);
    }
}
