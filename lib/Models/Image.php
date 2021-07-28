<?php

namespace AboutYou\Cloud\StorefrontApi\Models;

/**
 * @property array<string, Attribute> $attributes 
 * @property string $hash 
 */
class Image extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
    ];

    protected $collectionClassMap = [
        'attributes' => \AboutYou\Cloud\StorefrontApi\Models\Attribute::class,
    ];

    protected $collection2dClassMap = [
    ];

protected $polymorphic = [
    ];

    protected $polymorphicCollections = [
    ];
}