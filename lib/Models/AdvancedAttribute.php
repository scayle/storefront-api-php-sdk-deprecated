<?php

namespace AboutYou\Cloud\StorefrontApi\Models;

/**
 * @property int $id 
 * @property string $key 
 * @property string $label 
 * @property string $type 
 * @property AdvancedAttributeValue[] $values 
 */
class AdvancedAttribute extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
    ];

    protected $collectionClassMap = [
        'values' => \AboutYou\Cloud\StorefrontApi\Models\AdvancedAttributeValue::class,
    ];

    protected $collection2dClassMap = [
    ];

protected $polymorphic = [
    ];

    protected $polymorphicCollections = [
    ];
}