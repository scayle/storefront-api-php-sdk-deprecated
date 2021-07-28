<?php

namespace AboutYou\Cloud\StorefrontApi\Models;

/**
 * @property int $id 
 * @property int $attributeId 
 * @property array $customData 
 * @property string $externalReference 
 * @property string $group 
 * @property bool $isActive 
 * @property string $logoHash 
 * @property string $createdAt 
 * @property string $updatedAt 
 */
class Brand extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
    ];

    protected $collectionClassMap = [
    ];

    protected $collection2dClassMap = [
    ];

protected $polymorphic = [
    ];

    protected $polymorphicCollections = [
    ];
}