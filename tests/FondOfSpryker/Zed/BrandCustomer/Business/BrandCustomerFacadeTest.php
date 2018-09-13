<?php

namespace FondOfSpryker\Zed\BrandCustomer\Business;

use Codeception\Test\Unit;
use FondOfSpryker\Zed\BrandCustomer\Business\Model\BrandExpander;
use FondOfSpryker\Zed\BrandCustomer\Business\Model\CustomerExpander;

class BrandCustomerFacadeTest extends Unit
{
    /**
     * @var \Generated\Shared\Transfer\CustomerTransfer|\PHPUnit\Framework\MockObject\MockObject
     */
    protected $customerTransferMock;

    /**
     * @var \Generated\Shared\Transfer\BrandTransfer|\PHPUnit\Framework\MockObject\MockObject
     */
    protected $brandTransferMock;

    /**
     * @var \FondOfSpryker\Zed\BrandCustomer\Business\BrandCustomerBusinessFactory|\PHPUnit\Framework\MockObject\MockObject
     */
    protected $brandCustomerBusinessFactoryMock;

    /**
     * @var \FondOfSpryker\Zed\BrandCustomer\Business\BrandCustomerFacadeInterface
     */
    protected $brandCustomerFacade;

    /**
     * @return void
     */
    protected function _before(): void
    {
        parent::_before();

        $this->customerTransferMock = $this->getMockBuilder('\Generated\Shared\Transfer\CustomerTransfer')
            ->disableOriginalConstructor()
            ->getMock();

        $this->brandTransferMock = $this->getMockBuilder('\Generated\Shared\Transfer\BrandTransfer')
            ->disableOriginalConstructor()
            ->getMock();

        $this->brandCustomerBusinessFactoryMock = $this->getMockBuilder(BrandCustomerBusinessFactory::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->brandCustomerFacade = new BrandCustomerFacade();
        $this->brandCustomerFacade->setFactory($this->brandCustomerBusinessFactoryMock);
    }

    /**
     * @return void
     */
    public function testExpandCustomerTransferWithBrandIds(): void
    {
        $customerExpanderMock = $this->getMockBuilder(CustomerExpander::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->brandCustomerBusinessFactoryMock->expects($this->atLeastOnce())
            ->method('createCustomerExpander')
            ->willReturn($customerExpanderMock);

        $customerExpanderMock->expects($this->atLeastOnce())
            ->method('expandCustomerTransferWithBrands')
            ->willReturn($this->customerTransferMock);

        $actualCustomerTransfer = $this->brandCustomerFacade->expandCustomerTransferWithBrands($this->customerTransferMock);

        $this->assertEquals($this->customerTransferMock, $actualCustomerTransfer);
    }

    /**
     * @return void
     */
    public function testExpandBrandTransferWithCustomerRelation(): void
    {
        $brandExpanderMock = $this->getMockBuilder(BrandExpander::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->brandCustomerBusinessFactoryMock->expects($this->atLeastOnce())
            ->method('createBrandExpander')
            ->willReturn($brandExpanderMock);

        $brandExpanderMock->expects($this->atLeastOnce())
            ->method('expandBrandTransferWithCustomerRelations')
            ->willReturn($this->brandTransferMock);

        $actualCustomerTransfer = $this->brandCustomerFacade->expandBrandTransferWithCustomerRelation($this->brandTransferMock);

        $this->assertEquals($this->brandTransferMock, $actualCustomerTransfer);
    }
}
