<?php

namespace AboutYou\Cloud\StorefrontApi\Models;

/**
 * @property Pagination $pagination 
 * @property Campaign[] $entities 
 */
class CampaignsResponse extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
		'pagination' => \AboutYou\Cloud\StorefrontApi\Models\Pagination::class,
    ];

    protected $collectionClassMap = [
        'entities' => \AboutYou\Cloud\StorefrontApi\Models\Campaign::class,
    ];

    protected $collection2dClassMap = [
    ];

protected $polymorphic = [
    ];

    protected $polymorphicCollections = [
    ];
}