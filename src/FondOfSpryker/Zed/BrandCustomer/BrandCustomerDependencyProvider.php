<?php

namespace FondOfSpryker\Zed\BrandCustomer;

use Orm\Zed\Brand\Persistence\FosBrandQuery;
use Spryker\Zed\Kernel\AbstractBundleDependencyProvider;
use Spryker\Zed\Kernel\Container;

class BrandCustomerDependencyProvider extends AbstractBundleDependencyProvider
{
    public const PROPEL_QUERY_BRAND = 'PROPEL_QUERY_BRAND';

    /**
     * @param \Spryker\Zed\Kernel\Container $container
     *
     * @return \Spryker\Zed\Kernel\Container
     */
    public function providePersistenceLayerDependencies(Container $container): Container
    {
        $container = parent::providePersistenceLayerDependencies($container);
        $container = $this->addBrandPropelQuery($container);

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
}
