<?php

namespace AboutYou\Cloud\StorefrontApi\Models;

/**
 * @property \AboutYou\Cloud\StorefrontApi\Models\NavigationTree[] $entities
 */
class NavigationTreeCollection extends ApiCollection
{
	protected $collectionClassMap = [
		'entities' => \AboutYou\Cloud\StorefrontApi\Models\NavigationTree::class,
    ];

    /**
    * @return \AboutYou\Cloud\StorefrontApi\Models\NavigationTree[]
    */
    public function getEntities()
    {
        return $this->entities;
    }
}