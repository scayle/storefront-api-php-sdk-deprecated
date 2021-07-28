<?php

namespace AboutYou\Cloud\StorefrontApi\Models;

/**
 * @property FieldSet[][] $fieldSet 
 * @property GroupSet[][] $groupSet 
 */
class AdvancedAttributeValue extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
    ];

    protected $collectionClassMap = [
    ];

    protected $collection2dClassMap = [
            'fieldSet' => \AboutYou\Cloud\StorefrontApi\Models\FieldSet::class,
            'groupSet' => \AboutYou\Cloud\StorefrontApi\Models\GroupSet::class,
    ];

protected $polymorphic = [
    ];

    protected $polymorphicCollections = [
    ];
}