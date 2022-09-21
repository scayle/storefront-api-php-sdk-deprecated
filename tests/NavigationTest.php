<?php

namespace AboutYou\Cloud\StorefrontApi;

use AboutYou\Cloud\StorefrontApi\Models\Identifier;

class NavigationTest extends BaseApiTestCase
{
    public function testGetAll()
    {
        $responseEntity = $this->api->navigations->GetAll( []);

        $expectedResponseJson = $this->loadFixture('NavigationGetAllResponse.json');
        $this->assertInstanceOf(\AboutYou\Cloud\StorefrontApi\Models\NavigationTreeCollection::class, $responseEntity);
        $this->assertJsonStringEqualsJsonString(json_encode($expectedResponseJson), $responseEntity->toJson());



        foreach ($responseEntity->getEntities() as $collectionEntity) {
            $this->assertInstanceOf(\AboutYou\Cloud\StorefrontApi\Models\NavigationTree::class, $collectionEntity);

        }
    }

    public function testGetById()
    {
        $responseEntity = $this->api->navigations->GetById('1',  []);

        $expectedResponseJson = $this->loadFixture('NavigationGetByIdResponse.json');
        $this->assertInstanceOf(\AboutYou\Cloud\StorefrontApi\Models\NavigationTree::class, $responseEntity);
        $this->assertJsonStringEqualsJsonString(json_encode($expectedResponseJson), $responseEntity->toJson());




    }

}