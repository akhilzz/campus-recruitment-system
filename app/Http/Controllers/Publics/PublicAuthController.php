<?php

namespace App\Http\Controllers\Publics;

use App\Http\Controllers\Controller;

class PublicAuthController extends Controller
{
    public function index()
    {
        return view('public.pages.index');
    }
}
