<?php

namespace AboutYou\Cloud\StorefrontApi\Models;

/**
 * @property Cost $cost 
 * @property array[] $items 
 */
class BasketItem extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
		'customData' => \AboutYou\Cloud\StorefrontApi\Models\CustomData::class,
		'deliveryForecast' => \AboutYou\Cloud\StorefrontApi\Models\DeliveryForecast::class,
		'displayData' => \AboutYou\Cloud\StorefrontApi\Models\DisplayData::class,
		'price' => \AboutYou\Cloud\StorefrontApi\Models\BasketItemPrice::class,
		'product' => \AboutYou\Cloud\StorefrontApi\Models\Product::class,
		'variant' => \AboutYou\Cloud\StorefrontApi\Models\Variant::class,
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