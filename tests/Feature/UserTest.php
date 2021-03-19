<?php

namespace Tests\Feature;

use Tests\TestCase;

class UserTest extends TestCase
{
    public function test_index_returns_ok(): void
    {
        $this->getJson('/api/users')->assertStatus(200);
    }
}
