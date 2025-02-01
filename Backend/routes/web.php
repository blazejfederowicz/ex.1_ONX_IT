<?php

use Illuminate\Support\Facades\Route;
use App\Models\Url;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

Route::get('/{shortened_url}', function ($shortened_url) {
    $url = Url::where('shortener_url', 'like', '%/' . $shortened_url)->first();

    if ($url) {
        return redirect()->to($url->original_url);
    }

    abort(404, 'URL not found');
});

require __DIR__ . '/auth.php';
