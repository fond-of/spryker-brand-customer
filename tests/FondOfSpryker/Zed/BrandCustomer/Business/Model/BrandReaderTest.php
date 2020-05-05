<?php

namespace FondOfSpryker\Zed\BrandCustomer\Business\Model;

use Codeception\Test\Unit;
use FondOfSpryker\Zed\BrandCustomer\Persistence\BrandCustomerRepositoryInterface;
use Generated\Shared\Transfer\BrandCollectionTransfer;
use Generated\Shared\Transfer\BrandCustomerRelationTransfer;
use Generated\Shared\Transfer\BrandTransfer;
use Generated\Shared\Transfer\CustomerTransfer;

class BrandReaderTest extends Unit
{
    /**
     * @var \FondOfSpryker\Zed\BrandCustomer\Persistence\BrandCustomerRepositoryInterface|\PHPUnit\Framework\MockObject\MockObject
     */
    protected $brandCustomerRepositoryMock;

    /**
     * @var \Generated\Shared\Transfer\BrandCollectionTransfer|\PHPUnit\Framework\MockObject\MockObject
     */
    protected $brandCollectionTransferMock;

    /**
     * @var \Generated\Shared\Transfer\CustomerTransfer|\PHPUnit\Framework\MockObject\MockObject
     */
    protected $customerTransferMock;

    /**
     * @var \Generated\Shared\Transfer\BrandTransfer|\PHPUnit\Framework\MockObject\MockObject
     */
    protected $brandTransferMock;

    /**
     * @var \Generated\Shared\Transfer\BrandCustomerRelationTransfer|\PHPUnit\Framework\MockObject\MockObject
     */
    protected $brandCustomerRelationTransferMock;

    /**
     * @var \FondOfSpryker\Zed\BrandCustomer\Business\Model\BrandReaderInterface
     */
    protected $brandReader;

    /**
     * @return void
     */
    protected function _before(): void
    {
        $this->brandCustomerRepositoryMock = $this->getMockBuilder(BrandCustomerRepositoryInterface::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->brandCollectionTransferMock = $this->getMockBuilder(BrandCollectionTransfer::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->customerTransferMock = $this->getMockBuilder(CustomerTransfer::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->brandTransferMock = $this->getMockBuilder(BrandTransfer::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->brandCustomerRelationTransferMock = $this->getMockBuilder(BrandCustomerRelationTransfer::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->brandReader = new BrandReader($this->brandCustomerRepositoryMock);
    }

    /**
     * @return void
     */
    public function testGetBrandCollectionByIdCustomerId(): void
    {
        $this->customerTransferMock->expects($this->atLeastOnce())
            ->method('requireIdCustomer');

        $this->customerTransferMock->expects($this->atLeastOnce())
            ->method('getIdCustomer')
            ->willReturn(1);

        $this->brandCustomerRepositoryMock->expects($this->atLeastOnce())
            ->method('getBrandCollectionByIdCustomer')
            ->with(1)
            ->willReturn($this->brandCollectionTransferMock);

        $brandCollectionTransfer = $this->brandReader->getBrandCollectionByIdCustomerId($this->customerTransferMock);

        $this->assertEquals($this->brandCollectionTransferMock, $brandCollectionTransfer);
    }

    /**
     * @return void
     */
    public function testGetCustomerCollectionByBrand(): void
    {
        $this->brandTransferMock->expects($this->atLeastOnce())
            ->method('requireIdBrand');

        $this->brandTransferMock->expects($this->atLeastOnce())
            ->method('getIdBrand')
            ->willReturn(1);

        $this->brandCustomerRepositoryMock
            ->expects($this->atLeastOnce())
            ->method('getCustomerCollectionByBrandId')
            ->with($this->brandTransferMock->getIdBrand())
            ->willReturn($this->brandCustomerRelationTransferMock);

        $brandCollectionTransfer = $this->brandReader->getCustomerCollectionByBrand($this->brandTransferMock);

        $this->assertEquals($this->brandCustomerRelationTransferMock, $brandCollectionTransfer);
    }
}
