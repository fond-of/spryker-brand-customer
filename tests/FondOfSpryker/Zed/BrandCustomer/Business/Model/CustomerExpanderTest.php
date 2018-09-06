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

        $this->brandsMock[0]->expects($this->atLeastOnce())
            ->method('getType')
            ->willReturn('whitelist');

        $this->brandsMock[0]->expects($this->atLeastOnce())
            ->method('getIdBrand')
            ->willReturn(1);

        $this->brandsMock[1]->expects($this->atLeastOnce())
            ->method('getType')
            ->willReturn('blacklist');

        $this->brandsMock[1]->expects($this->atLeastOnce())
            ->method('getIdBrand')
            ->willReturn(2);

        $this->customerExpander->expandCustomerTransferWithBrandIds($this->customerTransfer);
    }
}
