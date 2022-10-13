<?php

namespace AboutYou\Cloud\StorefrontApi\Models;

/**
 * @property int $shopId 
 * @property string $name 
 * @property array<string, CustomData> $shopCustomData 
 * @property ShopProperties[] $properties 
 * @property array<string, CustomData> $customData 
 * @property string $country 
 */
class ShopConfiguration extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
		'customData' => \AboutYou\Cloud\StorefrontApi\Models\CustomData::class,
    ];

    protected $collectionClassMap = [
        'properties' => \AboutYou\Cloud\StorefrontApi\Models\ShopProperties::class,
    ];

    protected $collection2dClassMap = [
    ];

protected $polymorphic = [
    ];

    protected $polymorphicCollections = [
    ];
}