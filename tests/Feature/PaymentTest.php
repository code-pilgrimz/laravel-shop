<?php

namespace Tests\Feature;

use Tests\TestCase;

class PaymentTest extends TestCase
{
    public function test_index_returns_ok(): void
    {
        $this->getJson('/api/payments')->assertStatus(200);
    }
}
