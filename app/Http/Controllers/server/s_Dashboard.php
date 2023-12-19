<?php

namespace App\Http\Controllers\server;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models;

class s_Dashboard extends Controller
{
    public function index()
    {
        return view('server.dashboard');
    }
}
