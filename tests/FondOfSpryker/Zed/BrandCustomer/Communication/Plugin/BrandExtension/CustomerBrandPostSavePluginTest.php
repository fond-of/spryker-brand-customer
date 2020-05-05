<?php

namespace FondOfSpryker\Zed\BrandCustomer\Communication\Plugin\BrandExtension;

use Codeception\Test\Unit;
use FondOfSpryker\Zed\BrandCustomer\Business\BrandCustomerFacade;
use Generated\Shared\Transfer\BrandResponseTransfer;
use Generated\Shared\Transfer\BrandTransfer;

class CustomerBrandPostSavePluginTest extends Unit
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
     * @var \FondOfSpryker\Zed\BrandCustomer\Communication\Plugin\BrandExtension\CustomerBrandPostSavePlugin
     */
    protected $customerBrandPostSavePlugin;

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

        $this->customerBrandPostSavePlugin = new CustomerBrandPostSavePlugin();
        $this->customerBrandPostSavePlugin->setFacade($this->brandCustomerFacadeMock);
    }

    /**
     * @return void
     */
    public function testExecute(): void
    {
        $this->brandCustomerFacadeMock->expects($this->atLeastOnce())
            ->method('saveBrandCustomerRelation')
            ->with($this->brandTransferMock)
            ->willReturn($this->brandTransferMock);

        $brandTransfer = $this->customerBrandPostSavePlugin->execute($this->brandTransferMock);

        $this->assertEquals($this->brandTransferMock, $brandTransfer);
    }
}
