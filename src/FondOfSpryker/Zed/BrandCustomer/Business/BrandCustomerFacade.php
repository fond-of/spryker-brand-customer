<?php

namespace FondOfSpryker\Zed\BrandCustomer\Business;

use Generated\Shared\Transfer\CustomerTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * @method \FondOfSpryker\Zed\BrandCustomer\Business\BrandCustomerBusinessFactory getFactory()
 */
class BrandCustomerFacade extends AbstractFacade implements BrandCustomerFacadeInterface
{
    /**
     * @param \Generated\Shared\Transfer\CustomerTransfer $customerTransfer
     *
     * @return \Generated\Shared\Transfer\CustomerTransfer
     */
    public function expandCustomerTransferWithBrandIds(CustomerTransfer $customerTransfer): CustomerTransfer
    {
        return $this->getFactory()
            ->createCustomerExpander()
            ->expandCustomerTransferWithBrandIds($customerTransfer);
    }
}
