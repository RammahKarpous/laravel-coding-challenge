<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class getFiveQuotesTest extends TestCase
{

    public function test_use_has_to_be_authenticated_to_enter_the_dashboard()
    {
        $response = $this->get('/dashboard');
        $response->assertStatus(302);
    }

    public function test_five_random_quotes_are_being_fetched()
    {
        $this->get('/dashboard');

        $quotes = [];

        for ($i=0; $i < 5; $i++) { 
            array_push($quotes, Http::get('https://api.kanye.rest')->json());
        }

        $this->assertCount(5, $quotes);
    }
}
