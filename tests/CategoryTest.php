<?php

namespace AboutYou\Cloud\StorefrontApi;

use AboutYou\Cloud\StorefrontApi\Models\Identifier;

class CategoryTest extends BaseApiTestCase
{
    public function testGetRoots()
    {
        $responseEntity = $this->api->categories->GetRoots( []);

        $expectedResponseJson = $this->loadFixture('CategoryGetRootsResponse.json');
        $this->assertInstanceOf(\AboutYou\Cloud\StorefrontApi\Models\CategoryCollection::class, $responseEntity);
        $this->assertJsonStringEqualsJsonString(json_encode($expectedResponseJson), $responseEntity->toJson());

            $this->assertPropertyHasTheCorrectType($responseEntity, 'parent', \AboutYou\Cloud\StorefrontApi\Models\Category::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'children', \AboutYou\Cloud\StorefrontApi\Models\Category::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'properties', \AboutYou\Cloud\StorefrontApi\Models\CategoryProperty::class);


        foreach ($responseEntity->getEntities() as $collectionEntity) {
            $this->assertInstanceOf(\AboutYou\Cloud\StorefrontApi\Models\Category::class, $collectionEntity);
            $this->assertPropertyHasTheCorrectType($collectionEntity, 'parent', \AboutYou\Cloud\StorefrontApi\Models\Category::class);
            $this->assertPropertyHasTheCorrectType($collectionEntity, 'children', \AboutYou\Cloud\StorefrontApi\Models\Category::class);
            $this->assertPropertyHasTheCorrectType($collectionEntity, 'properties', \AboutYou\Cloud\StorefrontApi\Models\CategoryProperty::class);

        }
    }

    public function testGetByIds()
    {
        $responseEntity = $this->api->categories->GetByIds('1',  []);

        $expectedResponseJson = $this->loadFixture('CategoryGetByIdsResponse.json');
        $this->assertInstanceOf(\AboutYou\Cloud\StorefrontApi\Models\CategoryCollection::class, $responseEntity);
        $this->assertJsonStringEqualsJsonString(json_encode($expectedResponseJson), $responseEntity->toJson());

            $this->assertPropertyHasTheCorrectType($responseEntity, 'parent', \AboutYou\Cloud\StorefrontApi\Models\Category::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'children', \AboutYou\Cloud\StorefrontApi\Models\Category::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'properties', \AboutYou\Cloud\StorefrontApi\Models\CategoryProperty::class);


        foreach ($responseEntity->getEntities() as $collectionEntity) {
            $this->assertInstanceOf(\AboutYou\Cloud\StorefrontApi\Models\Category::class, $collectionEntity);
            $this->assertPropertyHasTheCorrectType($collectionEntity, 'parent', \AboutYou\Cloud\StorefrontApi\Models\Category::class);
            $this->assertPropertyHasTheCorrectType($collectionEntity, 'children', \AboutYou\Cloud\StorefrontApi\Models\Category::class);
            $this->assertPropertyHasTheCorrectType($collectionEntity, 'properties', \AboutYou\Cloud\StorefrontApi\Models\CategoryProperty::class);

        }
    }

    public function testGetById()
    {
        $responseEntity = $this->api->categories->GetById('1',  []);

        $expectedResponseJson = $this->loadFixture('CategoryGetByIdResponse.json');
        $this->assertInstanceOf(\AboutYou\Cloud\StorefrontApi\Models\Category::class, $responseEntity);
        $this->assertJsonStringEqualsJsonString(json_encode($expectedResponseJson), $responseEntity->toJson());

            $this->assertPropertyHasTheCorrectType($responseEntity, 'parent', \AboutYou\Cloud\StorefrontApi\Models\Category::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'children', \AboutYou\Cloud\StorefrontApi\Models\Category::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'properties', \AboutYou\Cloud\StorefrontApi\Models\CategoryProperty::class);



    }

    public function testGetByPath()
    {
        $responseEntity = $this->api->categories->GetByPath('1',  []);

        $expectedResponseJson = $this->loadFixture('CategoryGetByPathResponse.json');
        $this->assertInstanceOf(\AboutYou\Cloud\StorefrontApi\Models\Category::class, $responseEntity);
        $this->assertJsonStringEqualsJsonString(json_encode($expectedResponseJson), $responseEntity->toJson());

            $this->assertPropertyHasTheCorrectType($responseEntity, 'parent', \AboutYou\Cloud\StorefrontApi\Models\Category::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'children', \AboutYou\Cloud\StorefrontApi\Models\Category::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'properties', \AboutYou\Cloud\StorefrontApi\Models\CategoryProperty::class);



    }

}