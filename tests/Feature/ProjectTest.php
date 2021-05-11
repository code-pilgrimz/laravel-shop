<?php

namespace Tests\Feature;

use Tests\TestCase;

class ProjectTest extends TestCase
{
    public function test_index_returns_ok(): void
    {
        $this->getJson('/api/projects')->assertStatus(200);
    }
}
