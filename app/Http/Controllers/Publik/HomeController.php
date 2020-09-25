<?php

namespace App\Http\Controllers\Publik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('publik.home');
    }
    public function show()
    {
        return view('publik.detail');
    }
}
