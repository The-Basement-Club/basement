<?php

namespace App\Services\Models;

class DomainRecord
{
    public function __construct(
        public string $id,
        public string $name,
        public string $type,
        public string $value,
        public ?int $priority = null,
        public ?int $timeout = null,
        protected array $attributes = [],
    ) {
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