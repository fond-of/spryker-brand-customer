<?php

namespace FondOfSpryker\Zed\BrandCustomer\Persistence;

use FondOfSpryker\Zed\BrandCustomer\BrandCustomerDependencyProvider;
use FondOfSpryker\Zed\BrandCustomer\Persistence\Propel\Mapper\BrandCustomerMapper;
use FondOfSpryker\Zed\BrandCustomer\Persistence\Propel\Mapper\BrandCustomerMapperInterface;
use Orm\Zed\Brand\Persistence\FosBrandQuery;
use Spryker\Zed\Kernel\Persistence\AbstractPersistenceFactory;

/**
 * @method \FondOfSpryker\Zed\BrandCustomer\BrandCustomerConfig getConfig()
 */
class BrandCustomerPersistenceFactory extends AbstractPersistenceFactory
{
    /**
     * @return \Orm\Zed\Brand\Persistence\FosBrandQuery
     */
    public function getBrandQuery(): FosBrandQuery
    {
        return $this->getProvidedDependency(BrandCustomerDependencyProvider::PROPEL_QUERY_BRAND);
    }

    /**
     * @return \FondOfSpryker\Zed\BrandCustomer\Persistence\Propel\Mapper\BrandCustomerMapperInterface
     */
    public function createBrandCustomerMapper(): BrandCustomerMapperInterface
    {
        return new BrandCustomerMapper();
    }
}
