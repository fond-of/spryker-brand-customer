<?php

namespace FondOfSpryker\Zed\BrandCustomer\Business\Model;

use FondOfSpryker\Zed\BrandCustomer\Persistence\BrandCustomerRepositoryInterface;
use Generated\Shared\Transfer\BrandCollectionTransfer;
use Generated\Shared\Transfer\BrandCustomerRelationTransfer;
use Generated\Shared\Transfer\BrandTransfer;
use Generated\Shared\Transfer\CustomerTransfer;

class BrandReader implements BrandReaderInterface
{
    /**
     * @var \FondOfSpryker\Zed\BrandCustomer\Persistence\BrandCustomerRepositoryInterface
     */
    protected $brandCustomerRepository;

    /**
     * @param \FondOfSpryker\Zed\BrandCustomer\Persistence\BrandCustomerRepositoryInterface $brandCustomerRepository
     */
    public function __construct(BrandCustomerRepositoryInterface $brandCustomerRepository)
    {
        $this->brandCustomerRepository = $brandCustomerRepository;
    }

    /**
     * @param \Generated\Shared\Transfer\CustomerTransfer $customerTransfer
     *
     * @return \Generated\Shared\Transfer\BrandCollectionTransfer
     */
    public function getBrandCollectionByIdCustomerId(CustomerTransfer $customerTransfer): BrandCollectionTransfer
    {
        $customerTransfer->requireIdCustomer();

        return $this->brandCustomerRepository->getBrandCollectionByIdCustomer($customerTransfer->getIdCustomer());
    }

    /**
     * @param \Generated\Shared\Transfer\BrandTransfer $brandTransfer
     *
     * @return \Generated\Shared\Transfer\BrandCustomerRelationTransfer
     */
    public function getCustomerCollectionByBrand(BrandTransfer $brandTransfer): BrandCustomerRelationTransfer
    {
        $brandTransfer->requireIdBrand();

        return $this->brandCustomerRepository->getCustomerCollectionByBrandId($brandTransfer->getIdBrand());
    }
}
