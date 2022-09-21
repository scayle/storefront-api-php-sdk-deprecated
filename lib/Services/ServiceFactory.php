<?php

namespace AboutYou\Cloud\StorefrontApi\Services;

/**
 * Factory to create API services
 */
class ServiceFactory extends AbstractServiceFactory
{
	/**
	 * @var array<string, string>
     */
    protected $classMap = [
        'attributes' => \AboutYou\Cloud\StorefrontApi\Services\AttributeService::class,
        'brands' => \AboutYou\Cloud\StorefrontApi\Services\BrandService::class,
        'categories' => \AboutYou\Cloud\StorefrontApi\Services\CategoryService::class,
        'filters' => \AboutYou\Cloud\StorefrontApi\Services\FilterService::class,
        'campaign' => \AboutYou\Cloud\StorefrontApi\Services\CampaignService::class,
        'navigation' => \AboutYou\Cloud\StorefrontApi\Services\NavigationService::class,
        'products' => \AboutYou\Cloud\StorefrontApi\Services\ProductService::class,
        'search' => \AboutYou\Cloud\StorefrontApi\Services\SearchService::class,
        'shopConfigurations' => \AboutYou\Cloud\StorefrontApi\Services\ShopConfigurationService::class,
        'typeahead' => \AboutYou\Cloud\StorefrontApi\Services\TypeaheadService::class,
        'variants' => \AboutYou\Cloud\StorefrontApi\Services\VariantService::class,
        'wishlists' => \AboutYou\Cloud\StorefrontApi\Services\WishlistService::class,
        'baskets' => \AboutYou\Cloud\StorefrontApi\Services\BasketService::class,
    ];
}