<?php

namespace AboutYou\Cloud\StorefrontApi\Services;

use AboutYou\Cloud\StorefrontApi\Exceptions\ApiErrorException;
use Psr\Http\Client\ClientExceptionInterface;

/**
 */
class SearchService extends AbstractService
{
	/**
	 * Description
	 *
	 * @param string $term
	 * @param array $options additional options like limit or filters
	 *
	 * @return \AboutYou\Cloud\StorefrontApi\Models\SearchSuggestions
     * @throws ClientExceptionInterface
     * @throws ApiErrorException
	 */
	 public function suggestions($term, $options = [])
	 {
         $combinedOptions = $options;
         $combinedOptions["term"] = $term;

		 return $this->request('get', 'search/suggestions', $combinedOptions, \AboutYou\Cloud\StorefrontApi\Models\SearchSuggestions::class);
     }

}