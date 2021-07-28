<?php

namespace AboutYou\Cloud\StorefrontApi;

use AboutYou\Cloud\StorefrontApi\Models\Identifier;

class FilterTest extends BaseApiTestCase
{
    public function testGet()
    {
        $responseEntity = $this->api->filters->Get( []);

        $expectedResponseJson = $this->loadFixture('FilterGetResponse.json');
        $this->assertInstanceOf(\AboutYou\Cloud\StorefrontApi\Models\FilterCollection::class, $responseEntity);
        $this->assertJsonStringEqualsJsonString(json_encode($expectedResponseJson), $responseEntity->toJson());



        foreach ($responseEntity->getEntities() as $collectionEntity) {
            $this->assertInstanceOf(\AboutYou\Cloud\StorefrontApi\Models\Filter::class, $collectionEntity);

        }
    }

    public function testGetValues()
    {
        $responseEntity = $this->api->filters->GetValues('1',  []);

        $expectedResponseJson = $this->loadFixture('FilterGetValuesResponse.json');
        $this->assertInstanceOf(\AboutYou\Cloud\StorefrontApi\Models\anytypeCollection::class, $responseEntity);
        $this->assertJsonStringEqualsJsonString(json_encode($expectedResponseJson), $responseEntity->toJson());



        foreach ($responseEntity->getEntities() as $collectionEntity) {
            $this->assertInstanceOf(\AboutYou\Cloud\StorefrontApi\Models\anytype::class, $collectionEntity);

        }
    }

}