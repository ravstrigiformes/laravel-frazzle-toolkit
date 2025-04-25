<?php

namespace FrazzleToolkit\DTOs;

class FrazzleDto
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
