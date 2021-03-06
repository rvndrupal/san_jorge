<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bloqueuno;
use App\Models\Slider;
use App\Models\Oracione;
use App\Models\Comunidade;
use App\Models\SectorSlider;
use App\Models\Sectore;

class FrontController extends Controller
{

    public function index()
    {
        $uno=Bloqueuno::orderBy('id','DESC')->take(1)->get();
        $slider=Slider::orderBy('id','DESC')->take(4)->get();
        $oraciones=Oracione::orderBy('id','DESC')->take(4)->get();
        $comunidad=Comunidade::orderBy('id','DESC')->take(7)->get();
       //dd($comunidad);


        return view('front.inicio',compact('uno','slider','oraciones','comunidad'));
    }

    public function sectorMaster($nombre)
    {
        $secSlider=SectorSlider::orderBy('id','DESC')->take(4)->get();
        //dd($nombre);
        //dd($secSlider);

        $sectores=Sectore::with(['sectSlider'])->orderBy('id','DESC')->get();

        dd($sectores);

        return view('front.'.$nombre ,compact('secSlider'));
    }


}
