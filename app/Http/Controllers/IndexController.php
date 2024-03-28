<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class IndexController extends Controller
{
    public function index()
    {
        return Inertia::render('Home', [
            'title' => 'Home'
        ])->withViewData([ // Передача в Blade, не обновляется в SPA
            'title' => 'Home'
        ]);
    }
    public function about()
    {
        return Inertia::render('About', [
            'title' => 'About'
        ])->withViewData([ // Передача в Blade, не обновляется в SPA
            'title' => 'About'
        ]);
    }
}
