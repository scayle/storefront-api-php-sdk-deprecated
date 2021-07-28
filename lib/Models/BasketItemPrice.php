<?php

namespace AboutYou\Cloud\StorefrontApi\Models;

/**
 * @property Price $total 
 * @property Price $unit 
 */
class BasketItemPrice extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
		'total' => \AboutYou\Cloud\StorefrontApi\Models\Price::class,
		'unit' => \AboutYou\Cloud\StorefrontApi\Models\Price::class,
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