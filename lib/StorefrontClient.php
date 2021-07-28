<?php

namespace AboutYou\Cloud\StorefrontApi;

use AboutYou\Cloud\StorefrontApi\Services\ServiceFactory;

/**
 * Allows access to AdminApi functions.
 *
 * @property \AboutYou\Cloud\StorefrontApi\Services\AttributeService $attributes
 * @property \AboutYou\Cloud\StorefrontApi\Services\CategoryService $categories
 * @property \AboutYou\Cloud\StorefrontApi\Services\FilterService $filters
 * @property \AboutYou\Cloud\StorefrontApi\Services\ProductService $products
 * @property \AboutYou\Cloud\StorefrontApi\Services\SearchService $search
 * @property \AboutYou\Cloud\StorefrontApi\Services\TypeaheadService $typeahead
 * @property \AboutYou\Cloud\StorefrontApi\Services\VariantService $variants
 * @property \AboutYou\Cloud\StorefrontApi\Services\WishlistService $wishlists
 * @property \AboutYou\Cloud\StorefrontApi\Services\BasketService $baskets
 */
class StorefrontClient extends AbstractApi
{
	/**
	 * @var ServiceFactory $serviceFactory
	 */
	private $serviceFactory;

	public function __get($name)
	{
		if ($this->serviceFactory === null) {
            $this->serviceFactory = new ServiceFactory($this);
        }

        return $this->serviceFactory->get($name);
    }
}