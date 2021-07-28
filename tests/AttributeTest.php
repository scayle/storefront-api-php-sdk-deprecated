<?php

namespace AboutYou\Cloud\StorefrontApi;

use AboutYou\Cloud\StorefrontApi\Models\Identifier;

class AttributeTest extends BaseApiTestCase
{
    public function testGetByKey()
    {
        $responseEntity = $this->api->attributes->GetByKey('1',  []);

        $expectedResponseJson = $this->loadFixture('AttributeGetByKeyResponse.json');
        $this->assertInstanceOf(\AboutYou\Cloud\StorefrontApi\Models\Attribute::class, $responseEntity);
        $this->assertJsonStringEqualsJsonString(json_encode($expectedResponseJson), $responseEntity->toJson());

            $this->assertPropertyHasTheCorrectType($responseEntity, 'values', \AboutYou\Cloud\StorefrontApi\Models\AttributeValue::class);



    }

}