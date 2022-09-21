<?php

namespace AboutYou\Cloud\StorefrontApi\Models;

/**
 * @property Brand[] $entities 
 * @property Pagination|OffsetPagination $pagination 
 */
class BrandsResponse extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
    ];

    protected $collectionClassMap = [
        'entities' => \AboutYou\Cloud\StorefrontApi\Models\Brand::class,
    ];

    protected $collection2dClassMap = [
    ];

protected $polymorphic = [
    ];

    protected $polymorphicCollections = [
    ];
}