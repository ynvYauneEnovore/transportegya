<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cargos;


class LandingController extends Controller
{
    public function index(){
        $data = Cargos::get();
        return view('frontend.landing.index', compact('data'));
    }
}
