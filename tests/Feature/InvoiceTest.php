<?php

namespace Tests\Feature;

use Tests\TestCase;

class InvoiceTest extends TestCase
{
    public function test_index_returns_ok(): void
    {
        $this->getJson('/api/invoices')->assertStatus(200);
    }
}
