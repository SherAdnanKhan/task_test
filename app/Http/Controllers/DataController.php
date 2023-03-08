<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Cache;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index(Request $request)
    {
        $data = Cache::remember('data', 60, function () {
            return json_decode(file_get_contents('https://cspf-dev-challenge.herokuapp.com/'));
        });

        return view('data', compact('data'));
    }
}
