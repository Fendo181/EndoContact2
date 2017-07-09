<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LinkListTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testRespons()
    {
        $response = $this->get('/link');
        $response->assertStatus(200);
    }
}
