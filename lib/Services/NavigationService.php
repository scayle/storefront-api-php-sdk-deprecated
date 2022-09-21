<?php

namespace AboutYou\Cloud\StorefrontApi\Services;

use AboutYou\Cloud\StorefrontApi\Exceptions\ApiErrorException;
use Psr\Http\Client\ClientExceptionInterface;

/**
 */
class NavigationService extends AbstractService
{
	/**
	 * Description
	 *
	 *
	 * @return \AboutYou\Cloud\StorefrontApi\Models\NavigationTreeCollection
     * @throws ClientExceptionInterface
     * @throws ApiErrorException
	 */
	 public function getAll()
	 {
         $combinedOptions = [];

		 return $this->request('get', 'navigation/trees', $combinedOptions, \AboutYou\Cloud\StorefrontApi\Models\NavigationTreeCollection::class);
     }

	/**
	 * Description
	 *
	 * @param int $navigationTreeId
	 *
	 * @return \AboutYou\Cloud\StorefrontApi\Models\NavigationTree
     * @throws ClientExceptionInterface
     * @throws ApiErrorException
	 */
	 public function getById($navigationTreeId)
	 {
         $combinedOptions = [];

		 return $this->request('get', $this->resolvePath('navigation/trees/%s', $navigationTreeId), $combinedOptions, \AboutYou\Cloud\StorefrontApi\Models\NavigationTree::class);
     }

}