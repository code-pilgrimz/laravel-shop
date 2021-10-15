<?php

namespace Tests\Feature;

use Tests\TestCase;

class WebhookTest extends TestCase
{
    public function test_index_returns_ok(): void
    {
        $this->getJson('/api/webhooks')->assertStatus(200);
    }
}
// wip: filtering
