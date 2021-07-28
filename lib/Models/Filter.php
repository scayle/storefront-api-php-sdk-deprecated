<?php

namespace AboutYou\Cloud\StorefrontApi\Models;

/**
 * @property int $id 
 * @property string $name 
 * @property string $slug 
 * @property string $attributeGroupType 
 * @property string $type 
 * @property AttributeFilterValue[]|BooleanFilterValue[]|RangeFilterValue[]|IdentifierFilterValue[] $values 
 */
class Filter extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
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