<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $searchTerm = $request->input('search');

        $response = Http::get("https://swapi.dev/api/people/?search=$searchTerm");

        $results = $response->json();

        return view('search.results', compact('results'));
    }
}
