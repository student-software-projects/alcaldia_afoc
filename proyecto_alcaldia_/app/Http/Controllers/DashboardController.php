<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('modules.dashboard.index');
    }
    public function perfil(){
        return view('modules.dashboard.perfil');
    }
}
