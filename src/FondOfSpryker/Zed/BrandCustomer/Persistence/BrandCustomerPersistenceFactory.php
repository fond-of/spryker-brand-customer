<?php

namespace FondOfSpryker\Zed\BrandCustomer\Persistence;

use FondOfSpryker\Zed\BrandCustomer\BrandCustomerDependencyProvider;
use FondOfSpryker\Zed\BrandCustomer\Persistence\Propel\Mapper\BrandCustomerMapper;
use FondOfSpryker\Zed\BrandCustomer\Persistence\Propel\Mapper\BrandCustomerMapperInterface;
use Orm\Zed\Brand\Persistence\FosBrandQuery;
use Orm\Zed\BrandCustomer\Persistence\FosBrandCustomerQuery;
use Spryker\Zed\Kernel\Persistence\AbstractPersistenceFactory;

/**
 * @method \FondOfSpryker\Zed\BrandCustomer\BrandCustomerConfig getConfig()
 * @method \FondOfSpryker\Zed\BrandCustomer\Persistence\BrandCustomerEntityManagerInterface getEntityManager()
 * @method \FondOfSpryker\Zed\BrandCustomer\Persistence\BrandCustomerRepositoryInterface getRepository()
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
     * @return \Orm\Zed\BrandCustomer\Persistence\FosBrandCustomerQuery
     */
    public function getBrandCustomerQuery(): FosBrandCustomerQuery
    {
        return $this->getProvidedDependency(BrandCustomerDependencyProvider::PROPEL_QUERY_BRAND_CUSTOMER);
    }

    /**
     * @return \Orm\Zed\BrandCustomer\Persistence\FosBrandCustomerQuery
     */
    public function createBrandCustomerQuery(): FosBrandCustomerQuery
    {
        return FosBrandCustomerQuery::create();
    }

    /**
     * @return \FondOfSpryker\Zed\BrandCustomer\Persistence\Propel\Mapper\BrandCustomerMapperInterface
     */
    public function createBrandCustomerMapper(): BrandCustomerMapperInterface
    {
        return new BrandCustomerMapper();
    }
}
