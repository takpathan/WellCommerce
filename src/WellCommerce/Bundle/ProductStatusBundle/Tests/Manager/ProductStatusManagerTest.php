<?php
/*
 * WellCommerce Open-Source E-Commerce Platform
 * 
 * This file is part of the WellCommerce package.
 *
 * (c) Adam Piotrowski <adam@wellcommerce.org>
 * 
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */

namespace WellCommerce\Bundle\ProductStatusBundle\Tests\Manager;

use WellCommerce\Bundle\CoreBundle\Test\Manager\AbstractManagerTestCase;

/**
 * Class ProductStatusManagerTest
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class ProductStatusManagerTest extends AbstractManagerTestCase
{
    protected function get()
    {
        return $this->container->get('product_status.manager');
    }
}