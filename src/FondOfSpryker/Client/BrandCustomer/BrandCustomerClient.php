<?php

namespace FondOfSpryker\Client\BrandCustomer;

use Generated\Shared\Transfer\CustomerTransfer;
use Spryker\Client\Kernel\AbstractClient;

/**
 * @method \FondOfSpryker\Client\BrandCustomer\BrandCustomerFactory getFactory()
 */
class BrandCustomerClient extends AbstractClient implements BrandCustomerClientInterface
{
    /**
     * @param \Generated\Shared\Transfer\CustomerTransfer $customerTransfer
     *
     * @return \Generated\Shared\Transfer\CustomerTransfer
     */
    public function expandCustomer(CustomerTransfer $customerTransfer): CustomerTransfer
    {
        return $this->getFactory()->createZedStub()->expandCustomer($customerTransfer);
    }
}
