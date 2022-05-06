<?php

namespace FondOfSpryker\Zed\BrandCustomer\Business;

use FondOfSpryker\Zed\BrandCustomer\Business\Model\BrandCustomerRelationReader;
use FondOfSpryker\Zed\BrandCustomer\Business\Model\BrandCustomerRelationReaderInterface;
use FondOfSpryker\Zed\BrandCustomer\Business\Model\BrandCustomerRelationWriter;
use FondOfSpryker\Zed\BrandCustomer\Business\Model\BrandCustomerRelationWriterInterface;
use FondOfSpryker\Zed\BrandCustomer\Business\Model\BrandExpander;
use FondOfSpryker\Zed\BrandCustomer\Business\Model\BrandExpanderInterface;
use FondOfSpryker\Zed\BrandCustomer\Business\Model\BrandReader;
use FondOfSpryker\Zed\BrandCustomer\Business\Model\BrandReaderInterface;
use FondOfSpryker\Zed\BrandCustomer\Business\Model\CustomerExpander;
use FondOfSpryker\Zed\BrandCustomer\Business\Model\CustomerExpanderInterface;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;

/**
 * @method \FondOfSpryker\Zed\BrandCustomer\BrandCustomerConfig getConfig()
 * @method \FondOfSpryker\Zed\BrandCustomer\Persistence\BrandCustomerRepositoryInterface getRepository()
 * @method \FondOfSpryker\Zed\BrandCustomer\Persistence\BrandCustomerEntityManagerInterface getEntityManager()
 */
class BrandCustomerBusinessFactory extends AbstractBusinessFactory
{
    /**
     * @return \FondOfSpryker\Zed\BrandCustomer\Business\Model\BrandReaderInterface
     */
    public function createBrandReader(): BrandReaderInterface
    {
        return new BrandReader($this->getRepository());
    }

    /**
     * @return \FondOfSpryker\Zed\BrandCustomer\Business\Model\BrandCustomerRelationReaderInterface
     */
    public function createBrandCustomerRelationReader(): BrandCustomerRelationReaderInterface
    {
        return new BrandCustomerRelationReader(
            $this->getRepository(),
        );
    }

    /**
     * @return \FondOfSpryker\Zed\BrandCustomer\Business\Model\BrandCustomerRelationWriterInterface
     */
    public function createBrandCustomerRelationWriter(): BrandCustomerRelationWriterInterface
    {
        return new BrandCustomerRelationWriter(
            $this->createBrandCustomerRelationReader(),
            $this->getEntityManager(),
        );
    }

    /**
     * @return \FondOfSpryker\Zed\BrandCustomer\Business\Model\CustomerExpanderInterface
     */
    public function createCustomerExpander(): CustomerExpanderInterface
    {
        return new CustomerExpander($this->createBrandReader());
    }

    /**
     * @return \FondOfSpryker\Zed\BrandCustomer\Business\Model\BrandExpanderInterface
     */
    public function createBrandExpander(): BrandExpanderInterface
    {
        return new BrandExpander($this->createBrandReader());
    }
}
