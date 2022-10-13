<?php

namespace AboutYou\Cloud\StorefrontApi;

use AboutYou\Cloud\StorefrontApi\Models\Identifier;

class ShopConfigurationTest extends BaseApiTestCase
{
    public function testSuggestions()
    {
        $responseEntity = $this->api->shopConfigurations->Suggestions('1',  []);

        $expectedResponseJson = $this->loadFixture('ShopConfigurationSuggestionsResponse.json');
        $this->assertInstanceOf(\AboutYou\Cloud\StorefrontApi\Models\ShopConfiguration::class, $responseEntity);
        $this->assertJsonStringEqualsJsonString(json_encode($expectedResponseJson), $responseEntity->toJson());

            $this->assertPropertyHasTheCorrectType($responseEntity, 'customData', \AboutYou\Cloud\StorefrontApi\Models\CustomData::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'properties', \AboutYou\Cloud\StorefrontApi\Models\ShopProperties::class);



    }

}