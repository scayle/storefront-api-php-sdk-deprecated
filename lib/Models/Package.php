<?php

namespace AboutYou\Cloud\StorefrontApi\Models;

/**
 * @property int $id 
 * @property string $carrierKey 
 * @property DeliveryDate $deliveryDate 
 */
class Package extends ApiObject
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