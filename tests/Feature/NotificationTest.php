<?php

namespace Tests\Feature;

use Tests\TestCase;

class NotificationTest extends TestCase
{
    public function test_index_returns_ok(): void
    {
        $this->getJson('/api/notifications')->assertStatus(200);
    }
}
