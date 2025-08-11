<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public function __invoke()
    {
        $links = Auth::user()->links;

        return view('dashboard', [
            'links' => $links
        ]);
    }
}
