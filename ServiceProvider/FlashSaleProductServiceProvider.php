<?php

/*
 * This file is part of the FlashSaleProduct
 *
 * Copyright (C) 2018 StringTech Inc
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\FlashSaleProduct\ServiceProvider;

use Silex\Application as BaseApplication;
use Silex\ServiceProviderInterface;

class FlashSaleProductServiceProvider implements ServiceProviderInterface
{

    public function register(BaseApplication $app)
    {
        $app->match(
            '/block/flash_sale_product',
            'Plugin\FlashSaleProduct\Controller\Block\FlashSaleProductController::index'
        )->bind('block_flash_sale_product');
    }

    public function boot(BaseApplication $app)
    {
    }

}
