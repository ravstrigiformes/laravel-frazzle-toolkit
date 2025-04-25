<?php

namespace FrazzleToolkit\DTOs;

class UserDto
{
    public function __construct(
        public string $name,
        public string $email
    ) {}

    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
        ];
    }
}
