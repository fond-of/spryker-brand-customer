<?php

namespace FondOfSpryker\Zed\BrandCustomer\Business\Model;

use Codeception\Test\Unit;

class BrandExpanderTest extends Unit
{
    /**
     * @var \FondOfSpryker\Zed\BrandCustomer\Business\Model\BrandReaderInterface|\PHPUnit\Framework\MockObject\MockObject
     */
    protected $brandReaderMock;

    /**
     * @var \FondOfSpryker\Zed\BrandCustomer\Business\Model\BrandExpanderInterface
     */
    protected $brandExpander;

    /**
     * @var \Generated\Shared\Transfer\BrandTransfer|\PHPUnit\Framework\MockObject\MockObject
     */
    protected $brandTransferMock;

    /**
     * @var \Generated\Shared\Transfer\BrandCustomerRelationTransfer|\PHPUnit\Framework\MockObject\MockObject
     */
    protected $brandCustomerRelationTransferMock;

    /**
     * @var \Generated\Shared\Transfer\CustomerTransfer
     */
    protected $customerTransferMock;

    /**
     * @return void
     */
    protected function _before(): void
    {
        parent::_before();

        $this->brandReaderMock = $this->getMockBuilder(BrandReaderInterface::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->brandTransferMock = $this->getMockBuilder('\Generated\Shared\Transfer\BrandTransfer')
            ->disableOriginalConstructor()
            ->setMethods(['requireIdBrand', 'getIdBrand'])
            ->getMock();

        $this->brandCustomerRelationTransferMock = $this->getMockBuilder('\Generated\Shared\Transfer\BrandCustomerRelationTransfer')
            ->disableOriginalConstructor()
            ->getMock();

        $this->brandExpander = new BrandExpander($this->brandReaderMock);
    }

    /**
     * @return void
     */
    public function testExpandBrandTransferWithCustomerRelations(): void
    {
        $this->brandReaderMock
            ->expects($this->once())
            ->method('getCustomerCollectionByBrand')
            ->with($this->brandTransferMock)
            ->willReturn($this->brandCustomerRelationTransferMock);

        $brandTransfer = $this->brandExpander->expandBrandTransferWithCustomerRelations($this->brandTransferMock);
        $this->assertSame($brandTransfer->getBrandCustomerRelation(), $this->brandCustomerRelationTransferMock);
    }
}
