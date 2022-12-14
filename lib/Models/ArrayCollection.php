<?php

namespace AboutYou\Cloud\StorefrontApi\Models;

/**
 * @property array $entities
 */
class ArrayCollection extends ApiCollection
{
    /**
    * @return array
    */
    public function getEntities()
    {
        return $this->entities;
    }
}