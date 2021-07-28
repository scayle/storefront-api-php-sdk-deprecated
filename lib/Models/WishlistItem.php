<?php

namespace AboutYou\Cloud\StorefrontApi\Models;

/**
 * @property string $key 
 * @property int $packageId 
 * @property int $quantity 
 * @property string $status 
 * @property Product $product 
 * @property Variant $variant 
 * @property string $productId 
 * @property string $masterKey 
 * @property string $variantId 
 * @property CustomData $customData 
 */
class WishlistItem extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
		'product' => \AboutYou\Cloud\StorefrontApi\Models\Product::class,
		'variant' => \AboutYou\Cloud\StorefrontApi\Models\Variant::class,
		'customData' => \AboutYou\Cloud\StorefrontApi\Models\CustomData::class,
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