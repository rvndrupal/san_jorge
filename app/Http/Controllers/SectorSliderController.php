<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSectorSliderRequest;
use App\Http\Requests\UpdateSectorSliderRequest;
use App\Repositories\SectorSliderRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\User;
use App\Models\SectorSlider;

use Illuminate\Support\Facades\Storage;

class SectorSliderController extends AppBaseController
{
    /** @var  SectorSliderRepository */
    private $sectorSliderRepository;

    public function __construct(SectorSliderRepository $sectorSliderRepo)
    {
        $this->sectorSliderRepository = $sectorSliderRepo;
    }

    /**
     * Display a listing of the SectorSlider.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->sectorSliderRepository->pushCriteria(new RequestCriteria($request));
        $sectorSliders = $this->sectorSliderRepository->all();

        return view('sector_sliders.index')
            ->with('sectorSliders', $sectorSliders);
    }

    /**
     * Show the form for creating a new SectorSlider.
     *
     * @return Response
     */
    public function create()
    {

        $usuarios = User::where('id','=',auth()->user()->id)->orderBy('name', 'ASC')->pluck('name', 'id');
       // $usuario = auth()->user()->id;

        //dd($usuarios);
        return view('sector_sliders.create',compact('usuarios'));
    }

    /**
     * Store a newly created SectorSlider in storage.
     *
     * @param CreateSectorSliderRequest $request
     *
     * @return Response
     */
    public function store(CreateSectorSliderRequest $request)
    {

         $slider = SectorSlider::create($request->all());
        // $slider=new SectorSlider();
        // $slider->titulo=$request->input("titulo");
        // $slider->descripcion=$request->input("descripcion");
        // $id=auth()->user()->id;
         //IMAGE
         if($request->file('imagen')){
            $path = Storage::disk('public')->put('secto-slider',  $request->file('imagen'));
            $slider->fill(['imagen' => asset($path)])->save();
        }

        // $slider->user_id=$id;

        // $slider->save();

        Flash::success('Sector Slider saved successfully.');

        return redirect(route('sectorSliders.index'));
    }

    /**
     * Display the specified SectorSlider.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sectorSlider = $this->sectorSliderRepository->findWithoutFail($id);

        if (empty($sectorSlider)) {
            Flash::error('Sector Slider not found');

            return redirect(route('sectorSliders.index'));
        }

        return view('sector_sliders.show')->with('sectorSlider', $sectorSlider);
    }

    /**
     * Show the form for editing the specified SectorSlider.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sectorSlider = $this->sectorSliderRepository->findWithoutFail($id);

        if (empty($sectorSlider)) {
            Flash::error('Sector Slider not found');

            return redirect(route('sectorSliders.index'));
        }

        return view('sector_sliders.edit')->with('sectorSlider', $sectorSlider);
    }

    /**
     * Update the specified SectorSlider in storage.
     *
     * @param  int              $id
     * @param UpdateSectorSliderRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSectorSliderRequest $request)
    {
        $sectorSlider = $this->sectorSliderRepository->findWithoutFail($id);

        if (empty($sectorSlider)) {
            Flash::error('Sector Slider not found');

            return redirect(route('sectorSliders.index'));
        }

        $sectorSlider = $this->sectorSliderRepository->update($request->all(), $id);

         //IMAGE
         if($request->file('imagen')){
            $path = Storage::disk('public')->put('secto-slider',  $request->file('imagen'));
            $sectorSlider->fill(['imagen' => asset($path)])->save();
        }

        Flash::success('Sector Slider updated successfully.');

        return redirect(route('sectorSliders.index'));
    }

    /**
     * Remove the specified SectorSlider from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sectorSlider = $this->sectorSliderRepository->findWithoutFail($id);

        if (empty($sectorSlider)) {
            Flash::error('Sector Slider not found');

            return redirect(route('sectorSliders.index'));
        }

        $this->sectorSliderRepository->delete($id);

        Flash::success('Sector Slider deleted successfully.');

        return redirect(route('sectorSliders.index'));
    }
}
