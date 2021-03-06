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

namespace WellCommerce\Component\DoctrineEnhancer\TraitGenerator;

use WellCommerce\Component\Collections\ArrayCollection;
use WellCommerce\Component\DoctrineEnhancer\MappingEnhancerInterface;

/**
 * Class TraitGeneratorEnhancerCollection
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class TraitGeneratorEnhancerCollection extends ArrayCollection
{
    /**
     * @param MappingEnhancerInterface $enhancer
     */
    public function add(MappingEnhancerInterface $enhancer)
    {
        $this->items[$enhancer->getExtraTraitClass()][] = $enhancer;
    }

    /**
     * Returns an array of enhancers for given class
     *
     * @param string $class
     *
     * @return MappingEnhancerInterface[]
     */
    public function get($class)
    {
        return $this->items[$class];
    }
}
