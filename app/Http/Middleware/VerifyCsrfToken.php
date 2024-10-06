<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $addHttpCookie = true;
    protected $except = [
        //
        'stripe/*',
        'http://example.com/foo/bar',
        'http://localhost:8000/*',
        "",
        "http://127.0.0.1:8000/*",
        "https://hotel-back-gdee.vercel.app/*",
        "https://hotel-front-indol.vercel.app/*",
        "https://hotel-back-gdee.vercel.app",
        "https://hotel-front-indol.vercel.app"
    ];
}
