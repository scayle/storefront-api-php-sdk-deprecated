<?php

namespace AboutYou\Cloud\StorefrontApi;

use AboutYou\Cloud\StorefrontApi\Models\Identifier;

class VariantTest extends BaseApiTestCase
{
    public function testGetByIds()
    {
        $responseEntity = $this->api->variants->GetByIds('1',  []);

        $expectedResponseJson = $this->loadFixture('VariantGetByIdsResponse.json');
        $this->assertInstanceOf(\AboutYou\Cloud\StorefrontApi\Models\VariantsResponse::class, $responseEntity);
        $this->assertJsonStringEqualsJsonString(json_encode($expectedResponseJson), $responseEntity->toJson());

            $this->assertPropertyHasTheCorrectType($responseEntity, 'attributes', \AboutYou\Cloud\StorefrontApi\Models\Attribute::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'advancedAttributes', \AboutYou\Cloud\StorefrontApi\Models\AdvancedAttribute::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'price', \AboutYou\Cloud\StorefrontApi\Models\Price::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'stock', \AboutYou\Cloud\StorefrontApi\Models\Stock::class);



    }

}