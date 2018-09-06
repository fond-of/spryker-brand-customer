<?php

namespace FondOfSpryker\Zed\BrandCustomer\Business\Model;

use Generated\Shared\Transfer\BrandCustomerRelationTransfer;
use Generated\Shared\Transfer\BrandTransfer;

class BrandExpander implements BrandExpanderInterface
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
     * @param \Generated\Shared\Transfer\BrandTransfer $brandTransfer
     *
     * @return \Generated\Shared\Transfer\BrandTransfer
     */
    public function expandBrandTransferWithCustomerRelations(BrandTransfer $brandTransfer): BrandTransfer
    {
        $brandTransfer->setBrandCustomerRelation(new BrandCustomerRelationTransfer());

        $brandCollectionTransfer = $this->brandReader->getCustomerCollectionByBrand(
            $brandTransfer
        );

        $this->addBrandsToCustomerTransfer($brandTransfer, $brandCollectionTransfer);

        return $brandTransfer;
    }

    /**
     * @param \Generated\Shared\Transfer\BrandTransfer $brandTransfer
     * @param \Generated\Shared\Transfer\BrandCustomerRelationTransfer $brandCustomerRelationTransfer
     *
     * @return void
     */
    protected function addBrandsToCustomerTransfer(BrandTransfer $brandTransfer, BrandCustomerRelationTransfer $brandCustomerRelationTransfer): void
    {
        $brandTransfer->setBrandCustomerRelation($brandCustomerRelationTransfer);
    }
}
