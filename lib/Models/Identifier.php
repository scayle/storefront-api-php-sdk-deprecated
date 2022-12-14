<?php

namespace AboutYou\Cloud\StorefrontApi\Models;

class Identifier
{
    /**
     * @var string
     */
    private $identifier;

    private function __construct(string $identifier)
    {
        $this->identifier = $identifier;
    }

    /**
     * @param int $id
     *
     * @return Identifier
     */
    public static function fromId($id)
    {
        return new self('' . $id);
    }

    /**
     * @param string $referenceKey
     *
     * @return Identifier
     */
    public static function fromKey($referenceKey)
    {
        return new self('key=' . $referenceKey);
    }

    public function __toString()
    {
        return $this->identifier;
    }
}