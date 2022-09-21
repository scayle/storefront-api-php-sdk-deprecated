<?php

namespace AboutYou\Cloud\StorefrontApi;

use AboutYou\Cloud\StorefrontApi\Models\Identifier;

class WishlistTest extends BaseApiTestCase
{
    public function testAddItem()
    {
        $expectedRequestJson = $this->loadFixture('WishlistAddItemRequest.json');

        $requestEntity = new \AboutYou\Cloud\StorefrontApi\Models\CreateWishlistBody($expectedRequestJson);
        $this->assertJsonStringEqualsJsonString(json_encode($expectedRequestJson), $requestEntity->toJson());

        $responseEntity = $this->api->wishlists->AddItem('1', $requestEntity,  []);

        $expectedResponseJson = $this->loadFixture('WishlistAddItemResponse.json');
        $this->assertInstanceOf(\AboutYou\Cloud\StorefrontApi\Models\Wishlist::class, $responseEntity);
        $this->assertJsonStringEqualsJsonString(json_encode($expectedResponseJson), $responseEntity->toJson());

            $this->assertPropertyHasTheCorrectType($responseEntity, 'items', \AboutYou\Cloud\StorefrontApi\Models\WishlistItem::class);



    }

    public function testGet()
    {
        $responseEntity = $this->api->wishlists->Get('1',  []);

        $expectedResponseJson = $this->loadFixture('WishlistGetResponse.json');
        $this->assertInstanceOf(\AboutYou\Cloud\StorefrontApi\Models\Wishlist::class, $responseEntity);
        $this->assertJsonStringEqualsJsonString(json_encode($expectedResponseJson), $responseEntity->toJson());

            $this->assertPropertyHasTheCorrectType($responseEntity, 'items', \AboutYou\Cloud\StorefrontApi\Models\WishlistItem::class);



    }

    public function testRemove()
    {
        $responseEntity = $this->api->wishlists->Remove('1', '1',  []);

        $expectedResponseJson = $this->loadFixture('WishlistRemoveResponse.json');
        $this->assertInstanceOf(\AboutYou\Cloud\StorefrontApi\Models\Wishlist::class, $responseEntity);
        $this->assertJsonStringEqualsJsonString(json_encode($expectedResponseJson), $responseEntity->toJson());

            $this->assertPropertyHasTheCorrectType($responseEntity, 'items', \AboutYou\Cloud\StorefrontApi\Models\WishlistItem::class);



    }

}