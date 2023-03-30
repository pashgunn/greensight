<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class PagesController extends Controller
{
    public function homepage(): View
    {
        return view('pages.homepage');
    }
}
