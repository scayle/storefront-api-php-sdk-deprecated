<?php

namespace AboutYou\Cloud\StorefrontApi\Models;

/**
 * @property BrandOrCategorySuggestion $brandOrCategorySuggestion 
 * @property ProductSuggestion $productSuggestion 
 * @property float $score 
 * @property string $type 
 */
class TypeaheadSuggestion extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
		'brandOrCategorySuggestion' => \AboutYou\Cloud\StorefrontApi\Models\BrandOrCategorySuggestion::class,
		'productSuggestion' => \AboutYou\Cloud\StorefrontApi\Models\ProductSuggestion::class,
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