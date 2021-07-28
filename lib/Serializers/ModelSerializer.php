<?php

namespace AboutYou\Cloud\StorefrontApi\Serializers;

class ModelSerializer
{
    private $adapters = [
       \AboutYou\Cloud\StorefrontApi\Models\Attribute::class => AttributeAdapter::class,
    ];

    public function parse($class, $attributes)
    {
        foreach ($this->adapters as $adapterClass => $adapter) {
            if ($adapterClass !== $class) {
                continue;
            }
            return (new $adapter())->deserialize($attributes);
        }

        return new $class($attributes);
    }

}
