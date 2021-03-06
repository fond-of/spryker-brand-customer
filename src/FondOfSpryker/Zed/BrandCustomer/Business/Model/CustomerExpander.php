<?php

namespace FondOfSpryker\Zed\BrandCustomer\Business\Model;

use Generated\Shared\Transfer\BrandCollectionTransfer;
use Generated\Shared\Transfer\CustomerTransfer;

class CustomerExpander implements CustomerExpanderInterface
{
    /**
     * @var \FondOfSpryker\Zed\BrandCustomer\Business\Model\BrandReaderInterface
     */
    protected $brandReader;

    /**
     * @param \FondOfSpryker\Zed\BrandCustomer\Business\Model\BrandReaderInterface $brandReader
     */
    public function __construct(BrandReaderInterface $brandReader)
    {
        $this->brandReader = $brandReader;
    }

    /**
     * @param \Generated\Shared\Transfer\CustomerTransfer $customerTransfer
     *
     * @return \Generated\Shared\Transfer\CustomerTransfer
     */
    public function expandCustomerTransferWithBrands(CustomerTransfer $customerTransfer): CustomerTransfer
    {
        $customerTransfer->setBrandCollection(new BrandCollectionTransfer());

        $brandCollectionTransfer = $this->brandReader->getBrandCollectionByIdCustomerId(
            $customerTransfer
        );

        $this->addBrandsToCustomerTransfer($customerTransfer, $brandCollectionTransfer);

        return $customerTransfer;
    }

    /**
     * @param \Generated\Shared\Transfer\CustomerTransfer $customerTransfer
     * @param \Generated\Shared\Transfer\BrandCollectionTransfer $brandCollectionTransfer
     *
     * @return void
     */
    protected function addBrandsToCustomerTransfer(CustomerTransfer $customerTransfer, BrandCollectionTransfer $brandCollectionTransfer): void
    {
        foreach ($brandCollectionTransfer->getBrands() as $brandTransfer) {
            $customerTransfer->getBrandCollection()->addBrand($brandTransfer);
        }
    }
}
