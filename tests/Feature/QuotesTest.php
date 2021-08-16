<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class getFiveQuotesTest extends TestCase
{

    // use WithoutMiddleware;
    // use RefreshDatabase;

    public function test_home_page_is_reachable()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_use_has_to_be_authenticated_to_enter_the_dashboard()
    {
        $response = $this->get('/dashboard');
        $response->assertStatus(302);
    }

    public function test_quotes_are_being_fetched()
    {
        $response = $this->get('/dashboard');

    }
}
