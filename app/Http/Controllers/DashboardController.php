<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index ()
    {
        return view('admin/pages/index');
    }

    public function users(){
        return view('admin/pages/users');
    }
}
