<?php

namespace AboutYou\Cloud\StorefrontApi\Models;

/**
 * @property Deliverable $deliverable 
 * @property SubsequentDelivery $subsequentDelivery 
 */
class DeliveryForecast extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
		'deliverable' => \AboutYou\Cloud\StorefrontApi\Models\Deliverable::class,
		'subsequentDelivery' => \AboutYou\Cloud\StorefrontApi\Models\SubsequentDelivery::class,
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