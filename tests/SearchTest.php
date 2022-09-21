<?php

namespace AboutYou\Cloud\StorefrontApi;

use AboutYou\Cloud\StorefrontApi\Models\Identifier;

class SearchTest extends BaseApiTestCase
{
    public function testSuggestions()
    {
        $responseEntity = $this->api->searches->Suggestions('1',  []);

        $expectedResponseJson = $this->loadFixture('SearchSuggestionsResponse.json');
        $this->assertInstanceOf(\AboutYou\Cloud\StorefrontApi\Models\SearchSuggestions::class, $responseEntity);
        $this->assertJsonStringEqualsJsonString(json_encode($expectedResponseJson), $responseEntity->toJson());




    }

}