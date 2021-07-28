<?php

namespace AboutYou\Cloud\StorefrontApi\Models;

/**
 * @property AttributeValue[] $brands 
 * @property Category[] $categories 
 * @property ProductName[] $productNames 
 * @property Product[] $products 
 */
class SearchSuggestions extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
    ];

    protected $collectionClassMap = [
        'brands' => \AboutYou\Cloud\StorefrontApi\Models\AttributeValue::class,
        'categories' => \AboutYou\Cloud\StorefrontApi\Models\Category::class,
        'productNames' => \AboutYou\Cloud\StorefrontApi\Models\ProductName::class,
        'products' => \AboutYou\Cloud\StorefrontApi\Models\Product::class,
    ];

    protected $collection2dClassMap = [
    ];

protected $polymorphic = [
    ];

    protected $polymorphicCollections = [
    ];
}