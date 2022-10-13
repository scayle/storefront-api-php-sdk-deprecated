<?php

namespace AboutYou\Cloud\StorefrontApi\Models;

/**
 * @property array $deliveryForecast 
 * @property bool $isSellableWithoutStock 
 * @property int $quantity 
 * @property int $warehouseId 
 * @property int $supplierId 
 */
class Stock extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
		'customData' => \AboutYou\Cloud\StorefrontApi\Models\CustomData::class,
		'deliveryForecast' => \AboutYou\Cloud\StorefrontApi\Models\DeliveryForecast::class,
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