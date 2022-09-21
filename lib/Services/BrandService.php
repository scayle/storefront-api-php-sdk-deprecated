<?php

namespace AboutYou\Cloud\StorefrontApi\Services;

use AboutYou\Cloud\StorefrontApi\Exceptions\ApiErrorException;
use Psr\Http\Client\ClientExceptionInterface;

/**
 */
class BrandService extends AbstractService
{
	/**
	 * Description
	 *
	 * @param array $options additional options like limit or filters
	 *
	 * @return \AboutYou\Cloud\StorefrontApi\Models\BrandsResponse
     * @throws ClientExceptionInterface
     * @throws ApiErrorException
	 */
	 public function get($options = [])
	 {
         $combinedOptions = $options;

		 return $this->request('get', 'brands', $combinedOptions, \AboutYou\Cloud\StorefrontApi\Models\BrandsResponse::class);
     }

	/**
	 * Description
	 *
	 * @param int $brandId
	 * @param array $options additional options like limit or filters
	 *
	 * @return \AboutYou\Cloud\StorefrontApi\Models\BrandsResponse
     * @throws ClientExceptionInterface
     * @throws ApiErrorException
	 */
	 public function getById($brandId, $options = [])
	 {
         $combinedOptions = $options;

		 return $this->request('get', $this->resolvePath('brand/%s', $brandId), $combinedOptions, \AboutYou\Cloud\StorefrontApi\Models\BrandsResponse::class);
     }

}