<?php

namespace AboutYou\Cloud\StorefrontApi\Services;

use AboutYou\Cloud\StorefrontApi\Exceptions\ApiErrorException;
use Psr\Http\Client\ClientExceptionInterface;

/**
 */
class ProductService extends AbstractService
{
	/**
	 * Description
	 *
	 * @param int $productId
	 * @param array $options additional options like limit or filters
	 *
	 * @return \AboutYou\Cloud\StorefrontApi\Models\Product
     * @throws ClientExceptionInterface
     * @throws ApiErrorException
	 */
	 public function getById($productId, $options = [])
	 {
         $combinedOptions = $options;

		 return $this->request('get', $this->resolvePath('products/%s', $productId), $combinedOptions, \AboutYou\Cloud\StorefrontApi\Models\Product::class);
     }

	/**
	 * Description
	 *
	 * @param array $options additional options like limit or filters
	 *
	 * @return \AboutYou\Cloud\StorefrontApi\Models\ProductsResponse
     * @throws ClientExceptionInterface
     * @throws ApiErrorException
	 */
	 public function query($options = [])
	 {
         $combinedOptions = $options;

		 return $this->request('get', 'products', $combinedOptions, \AboutYou\Cloud\StorefrontApi\Models\ProductsResponse::class);
     }

}