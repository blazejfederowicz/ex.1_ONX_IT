<?php

namespace App\Http\Controllers;

use App\Models\Url;
use Illuminate\Http\Request;

class UrlController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'original_url' => 'required|url',
        ]);

        $shortenedUrl = 'shortened-url';



        return response()->json(['shortener_url' => $shortenedUrl]);
    }
}
