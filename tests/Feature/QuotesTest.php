<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class getFiveQuotesTest extends TestCase
{

    use RefreshDatabase;

    public function test_five_random_quotes_are_being_fetched()
    {
        $this->get('/dashboard');

        $quotes = [];

        for ($i=0; $i < 5; $i++) { 
            array_push($quotes, Http::get('https://api.kanye.rest')->json());
        }

        $this->assertCount(5, $quotes);
    }

    public function test_user_has_to_be_logged_in_to_enter_the_dashboard()
    {
        $response = $this->get('/dashboard');
        $response->assertStatus(302);
    }

    public function test_user_can_login()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->withSession(['banned' => false])->get('/dashboard');

        $response->assertStatus(200);
    }

    public function test_five_random_quotes_are_being_fetched_with_api()
    {
        $response = $this->getJson('/api/get-quotes');
        $response->assertStatus(200);
    }
}
