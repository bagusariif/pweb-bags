<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Services::all();
        return view('index', ['services' => $services]);
    }
}
