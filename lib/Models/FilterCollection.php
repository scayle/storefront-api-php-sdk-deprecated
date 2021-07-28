<?php

namespace AboutYou\Cloud\StorefrontApi\Models;

/**
 * @property \AboutYou\Cloud\StorefrontApi\Models\Filter[] $entities
 */
class FilterCollection extends ApiCollection
{
	protected $collectionClassMap = [
		'entities' => \AboutYou\Cloud\StorefrontApi\Models\Filter::class,
    ];

    /**
    * @return \AboutYou\Cloud\StorefrontApi\Models\Filter[]
    */
    public function getEntities()
    {
        return $this->entities;
    }
}