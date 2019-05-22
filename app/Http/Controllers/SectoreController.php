<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSectoreRequest;
use App\Http\Requests\UpdateSectoreRequest;
use App\Repositories\SectoreRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class SectoreController extends AppBaseController
{
    /** @var  SectoreRepository */
    private $sectoreRepository;

    public function __construct(SectoreRepository $sectoreRepo)
    {
        $this->sectoreRepository = $sectoreRepo;
    }

    /**
     * Display a listing of the Sectore.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->sectoreRepository->pushCriteria(new RequestCriteria($request));
        $sectores = $this->sectoreRepository->all();

        return view('sectores.index')
            ->with('sectores', $sectores);
    }

    /**
     * Show the form for creating a new Sectore.
     *
     * @return Response
     */
    public function create()
    {
        return view('sectores.create');
    }

    /**
     * Store a newly created Sectore in storage.
     *
     * @param CreateSectoreRequest $request
     *
     * @return Response
     */
    public function store(CreateSectoreRequest $request)
    {
        $input = $request->all();

        $sectore = $this->sectoreRepository->create($input);

        Flash::success('Sectore saved successfully.');

        return redirect(route('sectores.create'));
    }

    /**
     * Display the specified Sectore.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sectore = $this->sectoreRepository->findWithoutFail($id);

        if (empty($sectore)) {
            Flash::error('Sectore not found');

            return redirect(route('sectores.index'));
        }

        return view('sectores.show')->with('sectore', $sectore);
    }

    /**
     * Show the form for editing the specified Sectore.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sectore = $this->sectoreRepository->findWithoutFail($id);

        if (empty($sectore)) {
            Flash::error('Sectore not found');

            return redirect(route('sectores.index'));
        }

        return view('sectores.edit')->with('sectore', $sectore);
    }

    /**
     * Update the specified Sectore in storage.
     *
     * @param  int              $id
     * @param UpdateSectoreRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSectoreRequest $request)
    {
        $sectore = $this->sectoreRepository->findWithoutFail($id);

        if (empty($sectore)) {
            Flash::error('Sectore not found');

            return redirect(route('sectores.index'));
        }

        $sectore = $this->sectoreRepository->update($request->all(), $id);

        Flash::success('Sectore updated successfully.');

        return redirect(route('sectores.index'));
    }

    /**
     * Remove the specified Sectore from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sectore = $this->sectoreRepository->findWithoutFail($id);

        if (empty($sectore)) {
            Flash::error('Sectore not found');

            return redirect(route('sectores.index'));
        }

        $this->sectoreRepository->delete($id);

        Flash::success('Sectore deleted successfully.');

        return redirect(route('sectores.index'));
    }
}
