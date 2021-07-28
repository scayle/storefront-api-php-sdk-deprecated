<?php

namespace AboutYou\Cloud\StorefrontApi\Services;

use AboutYou\Cloud\StorefrontApi\Exceptions\ApiErrorException;
use Psr\Http\Client\ClientExceptionInterface;

/**
 */
class TypeaheadService extends AbstractService
{
	/**
	 * Description
	 *
	 * @param string $term
	 * @param array $options additional options like limit or filters
	 *
	 * @return \AboutYou\Cloud\StorefrontApi\Models\Typeahead
     * @throws ClientExceptionInterface
     * @throws ApiErrorException
	 */
	 public function getSuggestions($term, $options = [])
	 {
         $combinedOptions = $options;
         $combinedOptions["term"] = $term;

		 return $this->request('get', 'typeahead', $combinedOptions, \AboutYou\Cloud\StorefrontApi\Models\Typeahead::class);
     }

	/**
	 * Description
	 *
	 * @param string $term
	 * @param \AboutYou\Cloud\StorefrontApi\Models\TypeaheadBody $model the model to create or update
	 * @param array $options additional options like limit or filters
	 *
	 * @return \AboutYou\Cloud\StorefrontApi\Models\Typeahead
     * @throws ClientExceptionInterface
     * @throws ApiErrorException
	 */
	 public function postSuggestions($term, $model, $options = [])
	 {
         $combinedOptions = $options;
         $combinedOptions["term"] = $term;

		 return $this->request('post', 'typeahead', $combinedOptions, \AboutYou\Cloud\StorefrontApi\Models\Typeahead::class, $model);
     }

}