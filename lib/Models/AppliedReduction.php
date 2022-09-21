<?php

namespace AboutYou\Cloud\StorefrontApi\Models;

/**
 * @property array $amount 
 * @property string $category 
 * @property string $type 
 */
class AppliedReduction extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
		'amount' => \AboutYou\Cloud\StorefrontApi\Models\AppliedReductionAmount::class,
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