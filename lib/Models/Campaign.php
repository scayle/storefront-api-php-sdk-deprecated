<?php

namespace AboutYou\Cloud\StorefrontApi\Models;

/**
 * @property int $id 
 * @property string $name 
 * @property string $key 
 * @property string $description 
 * @property int $reduction 
 * @property string $start_at 
 * @property string $end_at 
 */
class Campaign extends ApiObject
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