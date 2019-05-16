<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateoracioneRequest;
use App\Http\Requests\UpdateoracioneRequest;
use App\Repositories\oracioneRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Oracione;

class oracioneController extends AppBaseController
{
    /** @var  oracioneRepository */
    private $oracioneRepository;

    public function __construct(oracioneRepository $oracioneRepo)
    {
        $this->oracioneRepository = $oracioneRepo;
    }

    /**
     * Display a listing of the oracione.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->oracioneRepository->pushCriteria(new RequestCriteria($request));
        $oraciones = $this->oracioneRepository->all();

        return view('oraciones.index')
            ->with('oraciones', $oraciones);
    }

    /**
     * Show the form for creating a new oracione.
     *
     * @return Response
     */
    public function create()
    {
        $bloque=Oracione::pluck('bloque','id');
        //$bloque=Oracione::getEnum('bloque');
        //dd($bloque);
        return view('oraciones.create',compact('bloque'));
    }

    /**
     * Store a newly created oracione in storage.
     *
     * @param CreateoracioneRequest $request
     *
     * @return Response
     */
    public function store(CreateoracioneRequest $request)
    {
        $input = $request->all();

        $oracione = $this->oracioneRepository->create($input);

        Flash::success('Oracione saved successfully.');

        return redirect(route('oraciones.create'));
    }

    /**
     * Display the specified oracione.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $oracione = $this->oracioneRepository->findWithoutFail($id);

        if (empty($oracione)) {
            Flash::error('Oracione not found');

            return redirect(route('oraciones.index'));
        }

        return view('oraciones.show')->with('oracione', $oracione);
    }

    /**
     * Show the form for editing the specified oracione.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $oracione = $this->oracioneRepository->findWithoutFail($id);

        if (empty($oracione)) {
            Flash::error('Oracione not found');

            return redirect(route('oraciones.index'));
        }

        return view('oraciones.edit')->with('oracione', $oracione);
    }

    /**
     * Update the specified oracione in storage.
     *
     * @param  int              $id
     * @param UpdateoracioneRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateoracioneRequest $request)
    {
        $oracione = $this->oracioneRepository->findWithoutFail($id);

        if (empty($oracione)) {
            Flash::error('Oracione not found');

            return redirect(route('oraciones.index'));
        }

        $oracione = $this->oracioneRepository->update($request->all(), $id);

        Flash::success('Oracione updated successfully.');

        return redirect(route('oraciones.index'));
    }

    /**
     * Remove the specified oracione from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $oracione = $this->oracioneRepository->findWithoutFail($id);

        if (empty($oracione)) {
            Flash::error('Oracione not found');

            return redirect(route('oraciones.index'));
        }

        $this->oracioneRepository->delete($id);

        Flash::success('Oracione deleted successfully.');

        return redirect(route('oraciones.index'));
    }
}
