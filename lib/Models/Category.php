<?php

namespace AboutYou\Cloud\StorefrontApi\Models;

/**
 * @property int $id 
 * @property Category $parent 
 * @property Category[] $children 
 * @property int[] $childrenIds 
 * @property int $depth 
 * @property string $description 
 * @property bool $isHidden 
 * @property string $name 
 * @property int $parentId 
 * @property string $path 
 * @property CategoryProperty[] $properties 
 * @property int[] $rootlineIds 
 * @property string $slug 
 * @property string[] $supportedFilter 
 */
class Category extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
		'parent' => \AboutYou\Cloud\StorefrontApi\Models\Category::class,
    ];

    protected $collectionClassMap = [
        'children' => \AboutYou\Cloud\StorefrontApi\Models\Category::class,
        'properties' => \AboutYou\Cloud\StorefrontApi\Models\CategoryProperty::class,
    ];

    protected $collection2dClassMap = [
    ];

protected $polymorphic = [
    ];

    protected $polymorphicCollections = [
    ];
}