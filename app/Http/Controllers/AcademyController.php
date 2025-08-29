<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcademyController extends Controller
{
         public function index()
    {
           return view('layout-dashboard.academy', [
            'title' => 'academy',
        ]);
    }
}
