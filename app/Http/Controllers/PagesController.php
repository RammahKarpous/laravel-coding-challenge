<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PagesController extends Controller
{
    public function index()
    {
        $quotes = [];

        for ($i=0; $i < 5; $i++) { 
            array_push($quotes, Http::get('https://api.kanye.rest')->json());
        }

        return view('welcome', [
            'quotes' => $quotes
        ]);
    }

    public function dashboard()
    {
        $quotes = [];

        for ($i=0; $i < 5; $i++) { 
            array_push($quotes, Http::get('https://api.kanye.rest')->json());
        }

        return view('dashboard', [
            'quotes' => $quotes
        ]);
    }
}
