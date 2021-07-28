<?php

namespace AboutYou\Cloud\StorefrontApi\Models;

/**
 * @property int $categoryId 
 * @property bool $categoryHidden 
 * @property string $categoryName 
 * @property CategoryProperty[] $categoryProperties 
 * @property string $categoryUrl 
 * @property string $categorySlug 
 */
class ProductCategory extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
    ];

    protected $collectionClassMap = [
        'categoryProperties' => \AboutYou\Cloud\StorefrontApi\Models\CategoryProperty::class,
    ];

    protected $collection2dClassMap = [
    ];

protected $polymorphic = [
    ];

    protected $polymorphicCollections = [
    ];
}