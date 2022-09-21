<?php

namespace AboutYou\Cloud\StorefrontApi\Models;

/**
 */
class Packages extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
		'deliveryDate' => \AboutYou\Cloud\StorefrontApi\Models\DeliveryDate::class,
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