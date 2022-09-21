<?php

namespace AboutYou\Cloud\StorefrontApi\Services;

use AboutYou\Cloud\StorefrontApi\Exceptions\ApiErrorException;
use Psr\Http\Client\ClientExceptionInterface;

/**
 */
class CampaignService extends AbstractService
{
	/**
	 * Description
	 *
	 * @param array $options additional options like limit or filters
	 *
	 * @return \AboutYou\Cloud\StorefrontApi\Models\CampaignsResponse
     * @throws ClientExceptionInterface
     * @throws ApiErrorException
	 */
	 public function getAll($options = [])
	 {
         $combinedOptions = $options;

		 return $this->request('get', 'campaigns', $combinedOptions, \AboutYou\Cloud\StorefrontApi\Models\CampaignsResponse::class);
     }

	/**
	 * Description
	 *
	 * @param int $campaignId
	 *
	 * @return \AboutYou\Cloud\StorefrontApi\Models\Campaign
     * @throws ClientExceptionInterface
     * @throws ApiErrorException
	 */
	 public function getById($campaignId)
	 {
         $combinedOptions = [];

		 return $this->request('get', $this->resolvePath('campaigns/%s', $campaignId), $combinedOptions, \AboutYou\Cloud\StorefrontApi\Models\Campaign::class);
     }

}