<?php

namespace AboutYou\Cloud\StorefrontApi\Services;

use AboutYou\Cloud\StorefrontApi\Exceptions\ApiErrorException;
use Psr\Http\Client\ClientExceptionInterface;

/**
 */
class FilterService extends AbstractService
{
	/**
	 * Description
	 *
	 * @param array $options additional options like limit or filters
	 *
	 * @return \AboutYou\Cloud\StorefrontApi\Models\FilterCollection
     * @throws ClientExceptionInterface
     * @throws ApiErrorException
	 */
	 public function get($options = [])
	 {
         $combinedOptions = $options;

		 return $this->request('get', 'filters', $combinedOptions, \AboutYou\Cloud\StorefrontApi\Models\FilterCollection::class);
     }

	/**
	 * Description
	 *
	 * @param string $groupName
	 * @param array $options additional options like limit or filters
	 *
	 * @return \AboutYou\Cloud\StorefrontApi\Models\anytypeCollection
     * @throws ClientExceptionInterface
     * @throws ApiErrorException
	 */
	 public function getValues($groupName, $options = [])
	 {
         $combinedOptions = $options;

		 return $this->request('get', $this->resolvePath('filters/%s/values', $groupName), $combinedOptions, \AboutYou\Cloud\StorefrontApi\Models\anytypeCollection::class);
     }

}