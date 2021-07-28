<?php

namespace AboutYou\Cloud\StorefrontApi\Models;

/**
 * @property Product[] $entities 
 * @property Pagination|OffsetPagination $pagination 
 */
class ProductsResponse extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
    ];

    protected $collectionClassMap = [
        'entities' => \AboutYou\Cloud\StorefrontApi\Models\Product::class,
    ];

    protected $collection2dClassMap = [
    ];

protected $polymorphic = [
    ];

    protected $polymorphicCollections = [
    ];
}