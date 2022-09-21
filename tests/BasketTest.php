<?php

namespace AboutYou\Cloud\StorefrontApi;

use AboutYou\Cloud\StorefrontApi\Models\Identifier;

class BasketTest extends BaseApiTestCase
{
    public function testAddItem()
    {
        $expectedRequestJson = $this->loadFixture('BasketAddItemRequest.json');

        $requestEntity = new \AboutYou\Cloud\StorefrontApi\Models\CreateBasketBody($expectedRequestJson);
        $this->assertJsonStringEqualsJsonString(json_encode($expectedRequestJson), $requestEntity->toJson());

        $responseEntity = $this->api->baskets->AddItem('1', $requestEntity,  []);

        $expectedResponseJson = $this->loadFixture('BasketAddItemResponse.json');
        $this->assertInstanceOf(\AboutYou\Cloud\StorefrontApi\Models\Basket::class, $responseEntity);
        $this->assertJsonStringEqualsJsonString(json_encode($expectedResponseJson), $responseEntity->toJson());

            $this->assertPropertyHasTheCorrectType($responseEntity, 'items', \AboutYou\Cloud\StorefrontApi\Models\BasketItem::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'cost', \AboutYou\Cloud\StorefrontApi\Models\Price::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'packages', \AboutYou\Cloud\StorefrontApi\Models\Package::class);



    }

    public function testGet()
    {
        $responseEntity = $this->api->baskets->Get('1',  []);

        $expectedResponseJson = $this->loadFixture('BasketGetResponse.json');
        $this->assertInstanceOf(\AboutYou\Cloud\StorefrontApi\Models\Basket::class, $responseEntity);
        $this->assertJsonStringEqualsJsonString(json_encode($expectedResponseJson), $responseEntity->toJson());

            $this->assertPropertyHasTheCorrectType($responseEntity, 'items', \AboutYou\Cloud\StorefrontApi\Models\BasketItem::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'cost', \AboutYou\Cloud\StorefrontApi\Models\Price::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'packages', \AboutYou\Cloud\StorefrontApi\Models\Package::class);



    }

    public function testRemove()
    {
        $responseEntity = $this->api->baskets->Remove('1', '1',  []);

        $expectedResponseJson = $this->loadFixture('BasketRemoveResponse.json');
        $this->assertInstanceOf(\AboutYou\Cloud\StorefrontApi\Models\Basket::class, $responseEntity);
        $this->assertJsonStringEqualsJsonString(json_encode($expectedResponseJson), $responseEntity->toJson());

            $this->assertPropertyHasTheCorrectType($responseEntity, 'items', \AboutYou\Cloud\StorefrontApi\Models\BasketItem::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'cost', \AboutYou\Cloud\StorefrontApi\Models\Price::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'packages', \AboutYou\Cloud\StorefrontApi\Models\Package::class);



    }

    public function testUpdate()
    {
        $expectedRequestJson = $this->loadFixture('BasketUpdateRequest.json');

        $requestEntity = new \AboutYou\Cloud\StorefrontApi\Models\CreateBasketBody($expectedRequestJson);
        $this->assertJsonStringEqualsJsonString(json_encode($expectedRequestJson), $requestEntity->toJson());

        $responseEntity = $this->api->baskets->Update('1', '1', $requestEntity,  []);

        $expectedResponseJson = $this->loadFixture('BasketUpdateResponse.json');
        $this->assertInstanceOf(\AboutYou\Cloud\StorefrontApi\Models\Basket::class, $responseEntity);
        $this->assertJsonStringEqualsJsonString(json_encode($expectedResponseJson), $responseEntity->toJson());

            $this->assertPropertyHasTheCorrectType($responseEntity, 'items', \AboutYou\Cloud\StorefrontApi\Models\BasketItem::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'cost', \AboutYou\Cloud\StorefrontApi\Models\Price::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'packages', \AboutYou\Cloud\StorefrontApi\Models\Package::class);



    }

}