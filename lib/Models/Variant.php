<?php

namespace AboutYou\Cloud\StorefrontApi\Models;

/**
 * @property int $id 
 * @property array<string, AdvancedAttribute> $advancedAttributes 
 * @property string $appliedPricePromotionKey 
 * @property array<string, Attribute> $attributes 
 * @property Price $price 
 * @property int $productId 
 * @property string $referenceKey 
 * @property string $firstLiveAt Identifies the first time the variant went live
 * @property Stock $stock 
 * @property Timestamp $createdAt 
 * @property Timestamp $updatedAt 
 */
class Variant extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
		'price' => \AboutYou\Cloud\StorefrontApi\Models\Price::class,
		'stock' => \AboutYou\Cloud\StorefrontApi\Models\Stock::class,
    ];

    protected $collectionClassMap = [
        'attributes' => \AboutYou\Cloud\StorefrontApi\Models\Attribute::class,
        'advancedAttributes' => \AboutYou\Cloud\StorefrontApi\Models\AdvancedAttribute::class,
    ];

    protected $collection2dClassMap = [
    ];

protected $polymorphic = [
    ];

    protected $polymorphicCollections = [
    ];
}