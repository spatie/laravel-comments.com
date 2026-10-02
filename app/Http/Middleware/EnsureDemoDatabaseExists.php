<?php

namespace App\Http\Middleware;

use App\Support\DemoDatabase;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureDemoDatabaseExists
{
    public function handle(Request $request, Closure $next): Response
    {
        DemoDatabase::ensureExists();

        return $next($request);
    }
}
