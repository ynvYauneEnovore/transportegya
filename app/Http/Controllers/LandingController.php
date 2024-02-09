<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cargos;
use App\Models\RouteLive;

class LandingController extends Controller
{
    public function index(){
        $data = Cargos::get();
        $routeLive = RouteLive::get();

        return view('frontend.landing.index', compact('data', 'routeLive'));
    }
}
