<?php

namespace AboutYou\Cloud\StorefrontApi\Models;

/**
 * @property AppliedReduction[] $appliedReductions 
 * @property string $currencyCode The currency of the price.
 * @property array $reference 
 * @property array $tax 
 * @property int $withoutTax 
 * @property int $withTax 
 * @property int $recommendedRetailPrice 
 */
class Price extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
		'tax' => \AboutYou\Cloud\StorefrontApi\Models\Tax::class,
    ];

    protected $collectionClassMap = [
        'appliedReductions' => \AboutYou\Cloud\StorefrontApi\Models\AppliedReduction::class,
    ];

    protected $collection2dClassMap = [
    ];

protected $polymorphic = [
    ];

    protected $polymorphicCollections = [
    ];
}