<?php

namespace AboutYou\Cloud\StorefrontApi\Models;

/**
 * @property \AboutYou\Cloud\StorefrontApi\Models\Category[] $entities
 */
class CategoryCollection extends ApiCollection
{
	protected $collectionClassMap = [
		'entities' => \AboutYou\Cloud\StorefrontApi\Models\Category::class,
    ];

    /**
    * @return \AboutYou\Cloud\StorefrontApi\Models\Category[]
    */
    public function getEntities()
    {
        return $this->entities;
    }
}