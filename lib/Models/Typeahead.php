<?php

namespace AboutYou\Cloud\StorefrontApi\Models;

/**
 * @property TypeaheadSuggestion[] $suggestions 
 * @property TypeaheadSuggestion $topMatch 
 */
class Typeahead extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
		'topMatch' => \AboutYou\Cloud\StorefrontApi\Models\TypeaheadSuggestion::class,
    ];

    protected $collectionClassMap = [
        'suggestions' => \AboutYou\Cloud\StorefrontApi\Models\TypeaheadSuggestion::class,
    ];

    protected $collection2dClassMap = [
    ];

protected $polymorphic = [
    ];

    protected $polymorphicCollections = [
    ];
}