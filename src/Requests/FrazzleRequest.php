<?php

namespace FrazzleToolkit\Requests;

use Illuminate\Http\Request;

class FrazzleRequest extends Request
{
    /**
     * Returns only validated input based on allowed fields.
     *
     * @param array $fields
     * @return array
     */
    public function onlyValidated(array $fields): array
    {
        return array_filter(
            $this->only($fields),
            fn($value) => !is_null($value) && $value !== ''
        );
    }

    /**
     * A convenience method for checking if a request is from an API.
     *
     * @return bool
     */
    public function isApi(): bool
    {
        return $this->expectsJson() || $this->is('api/*');
    }
}
