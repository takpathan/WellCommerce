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

namespace WellCommerce\Bundle\AttributeBundle\Repository;

use WellCommerce\Bundle\AppBundle\Entity\Attribute\GroupInterface;
use WellCommerce\Bundle\CoreBundle\Repository\RepositoryInterface;

/**
 * Interface AttributeRepositoryInterface
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
interface AttributeRepositoryInterface extends RepositoryInterface
{
    /**
     * Returns all attributes for group
     *
     * @param GroupInterface $attributeGroup
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCollectionByAttributeGroup(GroupInterface $attributeGroup);
}
