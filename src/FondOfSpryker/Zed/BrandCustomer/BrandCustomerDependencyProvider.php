<?php

namespace FondOfSpryker\Zed\BrandCustomer;

use Orm\Zed\Brand\Persistence\FosBrandQuery;
use Orm\Zed\BrandCustomer\Persistence\FosBrandCustomerQuery;
use Spryker\Zed\Kernel\AbstractBundleDependencyProvider;
use Spryker\Zed\Kernel\Container;

class BrandCustomerDependencyProvider extends AbstractBundleDependencyProvider
{
    /**
     * @var string
     */
    public const PROPEL_QUERY_BRAND = 'PROPEL_QUERY_BRAND';

    /**
     * @var string
     */
    public const PROPEL_QUERY_BRAND_CUSTOMER = 'PROPEL_QUERY_BRAND_CUSTOMER';

    /**
     * @param \Spryker\Zed\Kernel\Container $container
     *
     * @return \Spryker\Zed\Kernel\Container
     */
    public function providePersistenceLayerDependencies(Container $container): Container
    {
        $container = parent::providePersistenceLayerDependencies($container);
        $container = $this->addBrandPropelQuery($container);
        $container = $this->addBrandCustomerPropelQuery($container);

        return $container;
    }

    /**
     * @param \Spryker\Zed\Kernel\Container $container
     *
     * @return \Spryker\Zed\Kernel\Container
     */
    protected function addBrandPropelQuery(Container $container): Container
    {
        $container[static::PROPEL_QUERY_BRAND] = function (Container $container) {
            return FosBrandQuery::create();
        };

        return $container;
    }

    /**
     * @param \Spryker\Zed\Kernel\Container $container
     *
     * @return \Spryker\Zed\Kernel\Container
     */
    protected function addBrandCustomerPropelQuery(Container $container): Container
    {
        $container[static::PROPEL_QUERY_BRAND_CUSTOMER] = function (Container $container) {
            return FosBrandCustomerQuery::create();
        };

        return $container;
    }
}
