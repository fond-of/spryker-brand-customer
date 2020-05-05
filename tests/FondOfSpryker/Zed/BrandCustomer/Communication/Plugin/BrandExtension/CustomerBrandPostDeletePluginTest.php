<?php

namespace FondOfSpryker\Zed\BrandCustomer\Communication\Plugin\BrandExtension;

use Codeception\Test\Unit;
use FondOfSpryker\Zed\BrandCustomer\Business\BrandCustomerFacade;
use Generated\Shared\Transfer\BrandResponseTransfer;
use Generated\Shared\Transfer\BrandTransfer;

class CustomerBrandPostDeletePluginTest extends Unit
{
    /**
     * @var \PHPUnit\Framework\MockObject\MockObject|\FondOfSpryker\Zed\BrandCustomer\Business\BrandCustomerFacade
     */
    protected $brandCustomerFacadeMock;

    /**
     * @var \PHPUnit\Framework\MockObject\MockObject|\Generated\Shared\Transfer\BrandTransfer
     */
    protected $brandTransferMock;

    /**
     * @var \PHPUnit\Framework\MockObject\MockObject|\Generated\Shared\Transfer\BrandResponseTransfer
     */
    protected $brandResponseTransferMock;

    /**
     * @var \FondOfSpryker\Zed\BrandCustomer\Communication\Plugin\BrandExtension\CustomerBrandPostDeletePlugin
     */
    protected $customerBrandPostDeletePlugin;

    /**
     * @return void
     */
    protected function _before(): void
    {
        parent::_before();

        $this->brandCustomerFacadeMock = $this->getMockBuilder(BrandCustomerFacade::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->brandTransferMock = $this->getMockBuilder(BrandTransfer::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->brandResponseTransferMock = $this->getMockBuilder(BrandResponseTransfer::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->customerBrandPostDeletePlugin = new CustomerBrandPostDeletePlugin();
        $this->customerBrandPostDeletePlugin->setFacade($this->brandCustomerFacadeMock);
    }

    /**
     * @return void
     */
    public function testExecute(): void
    {
        $this->brandCustomerFacadeMock->expects($this->atLeastOnce())
            ->method('deleteBrandCustomerRelation')
            ->with($this->brandTransferMock)
            ->willReturn($this->brandResponseTransferMock);

        $brandResponseTransfer = $this->customerBrandPostDeletePlugin->execute($this->brandTransferMock);

        $this->assertEquals($this->brandResponseTransferMock, $brandResponseTransfer);
    }
}
