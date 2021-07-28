<?php

namespace AboutYou\Cloud\StorefrontApi\Models;

/**
 * @property Variant[] $entities 
 * @property Pagination $pagination 
 */
class VariantsResponse extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
		'pagination' => \AboutYou\Cloud\StorefrontApi\Models\Pagination::class,
    ];

    protected $collectionClassMap = [
        'entities' => \AboutYou\Cloud\StorefrontApi\Models\Variant::class,
    ];

    protected $collection2dClassMap = [
    ];

protected $polymorphic = [
    ];

    protected $polymorphicCollections = [
    ];
}