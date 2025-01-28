<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard', [
            'expiring_domains' => request()->user()
                ->domains()
                ->where('expires_at', '>', now())
                ->where('expires_at', '<=', now()->addMonths(3))
                ->orderBy('expires_at')
                ->get(),
            'domain_count' => request()->user()->domains()->count(),
            'server_count' => request()->user()->servers()->count(),
            'servers' => request()->user()->servers()->get(),
        ]);
    })->name('dashboard');

    Route::get('/manage', function () {
        return Inertia::render('Manage');
    })->name('manage');
});
