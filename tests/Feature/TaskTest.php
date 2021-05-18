<?php

namespace Tests\Feature;

use Tests\TestCase;

class TaskTest extends TestCase
{
    public function test_index_returns_ok(): void
    {
        $this->getJson('/api/tasks')->assertStatus(200);
    }
}
