<?php

namespace Tests\Feature;

use Tests\TestCase;

class ApiKeyTest extends TestCase
{
    public function test_index_returns_ok(): void
    {
        $this->getJson('/api/api_keys')->assertStatus(200);
    }
}
