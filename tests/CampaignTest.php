<?php

namespace AboutYou\Cloud\StorefrontApi;

use AboutYou\Cloud\StorefrontApi\Models\Identifier;

class CampaignTest extends BaseApiTestCase
{
    public function testGetAll()
    {
        $responseEntity = $this->api->campaigns->GetAll( []);

        $expectedResponseJson = $this->loadFixture('CampaignGetAllResponse.json');
        $this->assertInstanceOf(\AboutYou\Cloud\StorefrontApi\Models\CampaignsResponse::class, $responseEntity);
        $this->assertJsonStringEqualsJsonString(json_encode($expectedResponseJson), $responseEntity->toJson());




    }

    public function testGetById()
    {
        $responseEntity = $this->api->campaigns->GetById('1',  []);

        $expectedResponseJson = $this->loadFixture('CampaignGetByIdResponse.json');
        $this->assertInstanceOf(\AboutYou\Cloud\StorefrontApi\Models\Campaign::class, $responseEntity);
        $this->assertJsonStringEqualsJsonString(json_encode($expectedResponseJson), $responseEntity->toJson());




    }

}