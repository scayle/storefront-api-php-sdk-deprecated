<?php

namespace AboutYou\Cloud\StorefrontApi;

use AboutYou\Cloud\StorefrontApi\Models\Identifier;

class ProductTest extends BaseApiTestCase
{
    public function testGetById()
    {
        $responseEntity = $this->api->products->GetById('1',  []);

        $expectedResponseJson = $this->loadFixture('ProductGetByIdResponse.json');
        $this->assertInstanceOf(\AboutYou\Cloud\StorefrontApi\Models\Product::class, $responseEntity);
        $this->assertJsonStringEqualsJsonString(json_encode($expectedResponseJson), $responseEntity->toJson());

            $this->assertPropertyHasTheCorrectType($responseEntity, 'attributes', \AboutYou\Cloud\StorefrontApi\Models\Attribute::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'advancedAttributes', \AboutYou\Cloud\StorefrontApi\Models\AdvancedAttribute::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'categories', \AboutYou\Cloud\StorefrontApi\Models\ProductCategory::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'definingAttributes', \AboutYou\Cloud\StorefrontApi\Models\DefiningAttribute::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'images', \AboutYou\Cloud\StorefrontApi\Models\Image::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'priceRange', \AboutYou\Cloud\StorefrontApi\Models\PriceRange::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'lowestPriorPrice', \AboutYou\Cloud\StorefrontApi\Models\LowestPriorPrice::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'siblings', \AboutYou\Cloud\StorefrontApi\Models\Product::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'baseCategories', \AboutYou\Cloud\StorefrontApi\Models\BaseCategory::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'variants', \AboutYou\Cloud\StorefrontApi\Models\Variant::class);



    }

    public function testQuery()
    {
        $responseEntity = $this->api->products->Query( []);

        $expectedResponseJson = $this->loadFixture('ProductQueryResponse.json');
        $this->assertInstanceOf(\AboutYou\Cloud\StorefrontApi\Models\ProductsResponse::class, $responseEntity);
        $this->assertJsonStringEqualsJsonString(json_encode($expectedResponseJson), $responseEntity->toJson());

            $this->assertPropertyHasTheCorrectType($responseEntity, 'attributes', \AboutYou\Cloud\StorefrontApi\Models\Attribute::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'advancedAttributes', \AboutYou\Cloud\StorefrontApi\Models\AdvancedAttribute::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'categories', \AboutYou\Cloud\StorefrontApi\Models\ProductCategory::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'definingAttributes', \AboutYou\Cloud\StorefrontApi\Models\DefiningAttribute::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'images', \AboutYou\Cloud\StorefrontApi\Models\Image::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'priceRange', \AboutYou\Cloud\StorefrontApi\Models\PriceRange::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'lowestPriorPrice', \AboutYou\Cloud\StorefrontApi\Models\LowestPriorPrice::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'siblings', \AboutYou\Cloud\StorefrontApi\Models\Product::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'baseCategories', \AboutYou\Cloud\StorefrontApi\Models\BaseCategory::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'variants', \AboutYou\Cloud\StorefrontApi\Models\Variant::class);



    }

}