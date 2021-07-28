<?php

namespace AboutYou\Cloud\StorefrontApi\Models;

/**
 * @property string $key 
 * @property BasketItem[] $items 
 * @property Price $cost 
 * @property Package[] $packages 
 */
class Basket extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
		'cost' => \AboutYou\Cloud\StorefrontApi\Models\Price::class,
    ];

    protected $collectionClassMap = [
        'items' => \AboutYou\Cloud\StorefrontApi\Models\BasketItem::class,
        'packages' => \AboutYou\Cloud\StorefrontApi\Models\Package::class,
    ];

    protected $collection2dClassMap = [
    ];

protected $polymorphic = [
    ];

    protected $polymorphicCollections = [
    ];
}