<?php

namespace AboutYou\Cloud\StorefrontApi\Models;

/**
 * @property Product $product 
 * @property float $score 
 * @property string $type 
 */
class ProductSuggestion extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
		'product' => \AboutYou\Cloud\StorefrontApi\Models\Product::class,
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