<?php

namespace AboutYou\Cloud\StorefrontApi;

use AboutYou\Cloud\StorefrontApi\Models\Identifier;

class BrandTest extends BaseApiTestCase
{
    public function testGet()
    {
        $responseEntity = $this->api->brands->Get( []);

        $expectedResponseJson = $this->loadFixture('BrandGetResponse.json');
        $this->assertInstanceOf(\AboutYou\Cloud\StorefrontApi\Models\BrandsResponse::class, $responseEntity);
        $this->assertJsonStringEqualsJsonString(json_encode($expectedResponseJson), $responseEntity->toJson());

            $this->assertPropertyHasTheCorrectType($responseEntity, 'customData', \AboutYou\Cloud\StorefrontApi\Models\CustomData::class);



    }

    public function testGetById()
    {
        $responseEntity = $this->api->brands->GetById('1',  []);

        $expectedResponseJson = $this->loadFixture('BrandGetByIdResponse.json');
        $this->assertInstanceOf(\AboutYou\Cloud\StorefrontApi\Models\BrandsResponse::class, $responseEntity);
        $this->assertJsonStringEqualsJsonString(json_encode($expectedResponseJson), $responseEntity->toJson());

            $this->assertPropertyHasTheCorrectType($responseEntity, 'customData', \AboutYou\Cloud\StorefrontApi\Models\CustomData::class);



    }

}