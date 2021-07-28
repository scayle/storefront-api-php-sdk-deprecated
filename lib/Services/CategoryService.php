<?php

namespace AboutYou\Cloud\StorefrontApi\Services;

use AboutYou\Cloud\StorefrontApi\Exceptions\ApiErrorException;
use Psr\Http\Client\ClientExceptionInterface;

/**
 */
class CategoryService extends AbstractService
{
	/**
	 * Description
	 *
	 * @param array $options additional options like limit or filters
	 *
	 * @return \AboutYou\Cloud\StorefrontApi\Models\CategoryCollection
     * @throws ClientExceptionInterface
     * @throws ApiErrorException
	 */
	 public function getRoots($options = [])
	 {
         $combinedOptions = $options;

		 return $this->request('get', 'categories', $combinedOptions, \AboutYou\Cloud\StorefrontApi\Models\CategoryCollection::class);
     }

	/**
	 * Description
	 *
	 * @param array $categoryIds
	 * @param array $options additional options like limit or filters
	 *
	 * @return \AboutYou\Cloud\StorefrontApi\Models\CategoryCollection
     * @throws ClientExceptionInterface
     * @throws ApiErrorException
	 */
	 public function getByIds($categoryIds, $options = [])
	 {
         $combinedOptions = $options;
         $combinedOptions["ids"] = implode(',', $categoryIds);

		 return $this->request('get', 'categories', $combinedOptions, \AboutYou\Cloud\StorefrontApi\Models\CategoryCollection::class);
     }

	/**
	 * Description
	 *
	 * @param int $categoryId
	 * @param array $options additional options like limit or filters
	 *
	 * @return \AboutYou\Cloud\StorefrontApi\Models\Category
     * @throws ClientExceptionInterface
     * @throws ApiErrorException
	 */
	 public function getById($categoryId, $options = [])
	 {
         $combinedOptions = $options;

		 return $this->request('get', $this->resolvePath('categories/%s', $categoryId), $combinedOptions, \AboutYou\Cloud\StorefrontApi\Models\Category::class);
     }

	/**
	 * Description
	 *
	 * @param string $categoryPath
	 * @param array $options additional options like limit or filters
	 *
	 * @return \AboutYou\Cloud\StorefrontApi\Models\Category
     * @throws ClientExceptionInterface
     * @throws ApiErrorException
	 */
	 public function getByPath($categoryPath, $options = [])
	 {
         $combinedOptions = $options;

		 return $this->request('get', $this->resolvePath('categories/%s', $categoryPath), $combinedOptions, \AboutYou\Cloud\StorefrontApi\Models\Category::class);
     }

}