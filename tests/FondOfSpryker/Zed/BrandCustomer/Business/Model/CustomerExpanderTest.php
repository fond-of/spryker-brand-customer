<?php

namespace FondOfSpryker\Zed\BrandCustomer\Business\Model;

use Codeception\Test\Unit;
use Generated\Shared\Transfer\CustomerTransfer;

class CustomerExpanderTest extends Unit
{
    /**
     * @var \Generated\Shared\Transfer\BrandTransfer[]|\PHPUnit\Framework\MockObject\MockObject[]
     */
    protected $brandsMock;

    /**
     * @var \FondOfSpryker\Zed\BrandCustomer\Business\Model\BrandReaderInterface|\PHPUnit\Framework\MockObject\MockObject
     */
    protected $brandReaderMock;

    /**
     * @var \Generated\Shared\Transfer\BrandCollectionTransfer|\PHPUnit\Framework\MockObject\MockObject
     */
    protected $brandCollectionTransferMock;

    /**
     * @var \Generated\Shared\Transfer\CustomerTransfer
     */
    protected $customerTransfer;

    /**
     * @var \FondOfSpryker\Zed\BrandCustomer\Business\Model\CustomerExpanderInterface
     */
    protected $customerExpander;

    /**
     * @return void
     */
    protected function _before(): void
    {
        parent::_before();

        $this->customerTransfer = new CustomerTransfer();

        $this->brandReaderMock = $this->getMockBuilder(BrandReaderInterface::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->brandsMock = [
            $this->getMockBuilder('\Generated\Shared\Transfer\BrandTransfer')
                ->disableOriginalConstructor()
                ->setMethods(['getType', 'getIdBrand'])
                ->getMock(),
            $this->getMockBuilder('\Generated\Shared\Transfer\BrandTransfer')
                ->disableOriginalConstructor()
                ->setMethods(['getType', 'getIdBrand'])
                ->getMock(),
        ];

        $this->brandCollectionTransferMock = $this->getMockBuilder('\Generated\Shared\Transfer\BrandCollectionTransfer')
            ->disableOriginalConstructor()
            ->setMethods(['getBrands'])
            ->getMock();

        $this->customerExpander = new CustomerExpander($this->brandReaderMock);
    }

    /**
     * @return void
     */
    public function test(): void
    {
        $this->brandReaderMock->expects($this->atLeastOnce())
            ->method('getBrandCollectionByIdCustomerId')
            ->with($this->customerTransfer)
            ->willReturn($this->brandCollectionTransferMock);

        $this->brandCollectionTransferMock->expects($this->atLeastOnce())
            ->method('getBrands')
            ->willReturn($this->brandsMock);

        $this->customerExpander->expandCustomerTransferWithBrands($this->customerTransfer);
    }
}
