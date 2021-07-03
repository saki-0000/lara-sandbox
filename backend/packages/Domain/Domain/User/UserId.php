<?php

namespace packages\Domain\Domain\User;

class UserId
{
    private string $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }
}
