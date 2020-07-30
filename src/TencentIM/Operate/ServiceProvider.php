<?php

namespace EasyIM\TencentIM\Operate;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

/**
 * Class ServiceProvider.
 */
class ServiceProvider implements ServiceProviderInterface
{
    /**
     * {@inheritdoc}.
     */
    public function register(Container $app)
    {
        $app['message'] = function ($app) {
            return new Client($app);
        };
    }
}
