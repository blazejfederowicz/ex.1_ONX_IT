<?php

namespace App\Http\Controllers;

use App\Models\Url;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UrlController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'original_url' => 'required|url|max:500',
        ]);

        $shortenedUrl = Str::random(5);

        $url = Url::create([
            'title' => Str::title($request->title),
            'original_url' => $request->input('original_url'),
            'shortener_url' => url('/', $shortenedUrl)
        ]);

        return response()->json(['shortener_url' => $url->shortener_url,]);
    }
}
