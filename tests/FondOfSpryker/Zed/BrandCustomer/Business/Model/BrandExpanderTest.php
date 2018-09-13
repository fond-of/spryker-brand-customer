<?php

namespace FondOfSpryker\Zed\BrandCustomer\Business\Model;

use Codeception\Test\Unit;
use Generated\Shared\Transfer\BrandCustomerRelationTransfer;
use Generated\Shared\Transfer\BrandTransfer;

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
        $brandTransfer = new BrandTransfer();

        $this->brandReaderMock
            ->expects($this->once())
            ->method('getCustomerCollectionByBrand')
            ->with($brandTransfer)
            ->willReturn($this->brandCustomerRelationTransferMock);

        $brandTransfer = $this->brandExpander->expandBrandTransferWithCustomerRelations($brandTransfer);

        $this->assertInstanceOf(BrandCustomerRelationTransfer::class, $brandTransfer->getBrandCustomerRelation());
    }
}
