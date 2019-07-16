<?php

namespace FondOfSpryker\Client\BrandCustomer\Zed;

use FondOfSpryker\Client\BrandCustomer\Dependency\Client\BrandCustomerToZedRequestClientInterface;
use Generated\Shared\Transfer\CustomerTransfer;

class BrandCustomerStub implements BrandCustomerStubInterface
{
    /**
     * @var \FondOfSpryker\Client\BrandCustomer\Dependency\Client\BrandCustomerToZedRequestClientInterface
     */
    protected $zedRequestClient;

    /**
     * @param \FondOfSpryker\Client\BrandCustomer\Dependency\Client\BrandCustomerToZedRequestClientInterface $zedRequestClient
     */
    public function __construct(BrandCustomerToZedRequestClientInterface $zedRequestClient)
    {
        $this->zedRequestClient = $zedRequestClient;
    }

    /**
     * @param \Generated\Shared\Transfer\CustomerTransfer $customerTransfer
     *
     * @return \Generated\Shared\Transfer\CustomerTransfer
     */
    public function expandCustomer(CustomerTransfer $customerTransfer): CustomerTransfer
    {
        $url = '/brand-customer/gateway/expand-customer';

        /** @var \Generated\Shared\Transfer\CustomerTransfer $customerTransfer */
        $customerTransfer = $this->zedRequestClient->call($url, $customerTransfer);

        return $customerTransfer;
    }
}
