<?php

namespace Tests\Feature;

use Tests\TestCase;

class CommentTest extends TestCase
{
    public function test_index_returns_ok(): void
    {
        $this->getJson('/api/comments')->assertStatus(200);
    }
}
// wip: search
