<?php

namespace AboutYou\Cloud\StorefrontApi\Services;

use AboutYou\Cloud\StorefrontApi\Exceptions\ApiErrorException;
use Psr\Http\Client\ClientExceptionInterface;

/**
 */
class WishlistService extends AbstractService
{
	/**
	 * Description
	 *
	 * @param string $wishlistId
	 * @param \AboutYou\Cloud\StorefrontApi\Models\CreateWishlistBody $model the model to create or update
	 * @param array $options additional options like limit or filters
	 *
	 * @return \AboutYou\Cloud\StorefrontApi\Models\Wishlist
     * @throws ClientExceptionInterface
     * @throws ApiErrorException
	 */
	 public function addItem($wishlistId, $model, $options = [])
	 {
         $combinedOptions = $options;

		 return $this->request('post', $this->resolvePath('wishlists/%s/items', $wishlistId), $combinedOptions, \AboutYou\Cloud\StorefrontApi\Models\Wishlist::class, $model);
     }

	/**
	 * Description
	 *
	 * @param string $wishlistId
	 * @param array $options additional options like limit or filters
	 *
	 * @return \AboutYou\Cloud\StorefrontApi\Models\Wishlist
     * @throws ClientExceptionInterface
     * @throws ApiErrorException
	 */
	 public function get($wishlistId, $options = [])
	 {
         $combinedOptions = $options;

		 return $this->request('get', $this->resolvePath('wishlists/%s', $wishlistId), $combinedOptions, \AboutYou\Cloud\StorefrontApi\Models\Wishlist::class);
     }

	/**
	 * Description
	 *
	 * @param string $wishlistId
	 * @param string $itemKey
	 * @param array $options additional options like limit or filters
	 *
	 * @return \AboutYou\Cloud\StorefrontApi\Models\Wishlist
     * @throws ClientExceptionInterface
     * @throws ApiErrorException
	 */
	 public function remove($wishlistId, $itemKey, $options = [])
	 {
         $combinedOptions = $options;

		 return $this->request('delete', $this->resolvePath('wishlists/%s/items/%s', $wishlistId, $itemKey), $combinedOptions, \AboutYou\Cloud\StorefrontApi\Models\Wishlist::class);
     }

}