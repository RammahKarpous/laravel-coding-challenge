<?php

namespace App\Http\Controllers\apis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class QuotesController extends Controller
{
    public function quotes()
    {
        $quotes = [];

        for ($i=0; $i < 5; $i++) { 
            array_push($quotes, Http::get('https://api.kanye.rest')->json());
        }

        return $quotes;
    }
}
