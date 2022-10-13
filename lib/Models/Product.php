<?php

namespace AboutYou\Cloud\StorefrontApi\Models;

/**
 * @property int $id 
 * @property array<string, AdvancedAttribute> $advancedAttributes 
 * @property array<string, Attribute> $attributes 
 * @property BaseCategory[] $baseCategories 
 * @property ProductCategory[] $categories 
 * @property DefiningAttribute $definingAttributes 
 * @property Image[] $images 
 * @property array<string, CustomData> $customData 
 * @property bool $isActive Identifies whether a product is active or not
 * @property bool $isNew Identifies whether a product is new or not
 * @property bool $isSoldOut Identifies if a product is still available to sell
 * @property string $masterKey Identifies the master product which this product belongs
 * @property string $firstLiveAt Identifies the first time one of the products variants went live
 * @property array $pricePromotionInfo 
 * @property PriceRange $priceRange 
 * @property ReductionRange $reductionRange 
 * @property LowestPriorPrice $lowestPriorPrice 
 * @property string $referenceKey 
 * @property int[] $searchCategoryIds 
 * @property Product[] $siblings list of Products
 * @property Variant[] $variants 
 * @property Timestamp $createdAt 
 * @property Timestamp $updatedAt 
 */
class Product extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
		'definingAttributes' => \AboutYou\Cloud\StorefrontApi\Models\DefiningAttribute::class,
		'priceRange' => \AboutYou\Cloud\StorefrontApi\Models\PriceRange::class,
		'reductionRange' => \AboutYou\Cloud\StorefrontApi\Models\ReductionRange::class,
		'lowestPriorPrice' => \AboutYou\Cloud\StorefrontApi\Models\LowestPriorPrice::class,
    ];

    protected $collectionClassMap = [
        'attributes' => \AboutYou\Cloud\StorefrontApi\Models\Attribute::class,
        'advancedAttributes' => \AboutYou\Cloud\StorefrontApi\Models\AdvancedAttribute::class,
        'images' => \AboutYou\Cloud\StorefrontApi\Models\Image::class,
        'siblings' => \AboutYou\Cloud\StorefrontApi\Models\Product::class,
        'baseCategories' => \AboutYou\Cloud\StorefrontApi\Models\BaseCategory::class,
        'variants' => \AboutYou\Cloud\StorefrontApi\Models\Variant::class,
    ];

    protected $collection2dClassMap = [
            'categories' => \AboutYou\Cloud\StorefrontApi\Models\ProductCategory::class,
    ];

protected $polymorphic = [
    ];

    protected $polymorphicCollections = [
    ];
}