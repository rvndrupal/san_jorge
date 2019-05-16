<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bloqueuno;
use App\Models\Slider;

class FrontController extends Controller
{

    public function index()
    {
        $uno=Bloqueuno::orderBy('id','DESC')->take(1)->get();
        $slider=Slider::orderBy('id','DESC')->take(4)->get();

        //dd($slider);


        return view('front.inicio',compact('uno','slider'));
    }


}
