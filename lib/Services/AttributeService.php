<?php

namespace AboutYou\Cloud\StorefrontApi\Services;

use AboutYou\Cloud\StorefrontApi\Exceptions\ApiErrorException;
use Psr\Http\Client\ClientExceptionInterface;

/**
 */
class AttributeService extends AbstractService
{
	/**
	 * Description
	 *
	 * @param string $groupName
	 *
	 * @return \AboutYou\Cloud\StorefrontApi\Models\Attribute
     * @throws ClientExceptionInterface
     * @throws ApiErrorException
	 */
	 public function getByKey($groupName)
	 {
         $combinedOptions = [];

		 return $this->request('get', $this->resolvePath('attributes/%s', $groupName), $combinedOptions, \AboutYou\Cloud\StorefrontApi\Models\Attribute::class);
     }

}