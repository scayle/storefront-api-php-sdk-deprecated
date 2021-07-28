<?php

namespace AboutYou\Cloud\StorefrontApi\Models;

/**
 * @property Price $max 
 * @property Price $min 
 */
class PriceRange extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
		'max' => \AboutYou\Cloud\StorefrontApi\Models\Price::class,
		'min' => \AboutYou\Cloud\StorefrontApi\Models\Price::class,
    ];

    protected $collectionClassMap = [
    ];

    protected $collection2dClassMap = [
    ];

protected $polymorphic = [
    ];

    protected $polymorphicCollections = [
    ];
}