<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentRegController extends Controller
{
    public function create()
    {
        return view('public.pages.register');
    }

}