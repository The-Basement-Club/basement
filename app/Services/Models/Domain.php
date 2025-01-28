<?php

namespace App\Services\Models;

class Domain
{
    public function __construct(
        public string $id,
        public string $name,
        public ?string $expires_at = null,
        public ?int $ttl = null,
        public ?string $verificationKey = null,
        public ?array $geolocation = null,
        protected array $attributes = [],
    )
    {
    }
    public function __set(string $name, $value): void
    {
        if (property_exists($this, $name)) {
            $this->$name = $value;
            return;
        }

        $this->attributes[$name] = $value;
    }

    public function __get(string $name)
    {
        return $this->attributes[$name] ?? $this->$name ?? null;
    }
}