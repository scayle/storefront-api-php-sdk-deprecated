<?php

namespace AboutYou\Cloud\StorefrontApi\Services;

use AboutYou\Cloud\StorefrontApi\Exceptions\ApiErrorException;
use Psr\Http\Client\ClientExceptionInterface;

/**
 */
class VariantService extends AbstractService
{
	/**
	 * Description
	 *
	 * @param array $variantIds
	 * @param array $options additional options like limit or filters
	 *
	 * @return \AboutYou\Cloud\StorefrontApi\Models\VariantsResponse
     * @throws ClientExceptionInterface
     * @throws ApiErrorException
	 */
	 public function getByIds($variantIds, $options = [])
	 {
         $combinedOptions = $options;
         $combinedOptions["ids"] = implode(',', $variantIds);

		 return $this->request('get', 'variants', $combinedOptions, \AboutYou\Cloud\StorefrontApi\Models\VariantsResponse::class);
     }

}