<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBloqueunoRequest;
use App\Http\Requests\UpdateBloqueunoRequest;
use App\Repositories\BloqueunoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;



class BloqueunoController extends AppBaseController
{
    /** @var  BloqueunoRepository */
    private $bloqueunoRepository;

    public function __construct(BloqueunoRepository $bloqueunoRepo)
    {
        $this->bloqueunoRepository = $bloqueunoRepo;
    }

    /**
     * Display a listing of the Bloqueuno.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->bloqueunoRepository->pushCriteria(new RequestCriteria($request));
        $bloqueunos = $this->bloqueunoRepository->all();

        return view('bloqueunos.index')
            ->with('bloqueunos', $bloqueunos);
    }



    /**
     * Show the form for creating a new Bloqueuno.
     *
     * @return Response
     */
    public function create()
    {
        return view('bloqueunos.create');
    }

    /**
     * Store a newly created Bloqueuno in storage.
     *
     * @param CreateBloqueunoRequest $request
     *
     * @return Response
     */
    public function store(CreateBloqueunoRequest $request)
    {
        $input = $request->all();

        $bloqueuno = $this->bloqueunoRepository->create($input);

        Flash::success('Bloqueuno saved successfully.');

        return redirect(route('bloqueunos.index'));
    }

    /**
     * Display the specified Bloqueuno.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $bloqueuno = $this->bloqueunoRepository->findWithoutFail($id);

        if (empty($bloqueuno)) {
            Flash::error('Bloqueuno not found');

            return redirect(route('bloqueunos.index'));
        }

        return view('bloqueunos.show')->with('bloqueuno', $bloqueuno);
    }

    /**
     * Show the form for editing the specified Bloqueuno.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $bloqueuno = $this->bloqueunoRepository->findWithoutFail($id);

        if (empty($bloqueuno)) {
            Flash::error('Bloqueuno not found');

            return redirect(route('bloqueunos.index'));
        }

        return view('bloqueunos.edit')->with('bloqueuno', $bloqueuno);
    }

    /**
     * Update the specified Bloqueuno in storage.
     *
     * @param  int              $id
     * @param UpdateBloqueunoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBloqueunoRequest $request)
    {
        $bloqueuno = $this->bloqueunoRepository->findWithoutFail($id);

        if (empty($bloqueuno)) {
            Flash::error('Bloqueuno not found');

            return redirect(route('bloqueunos.index'));
        }

        $bloqueuno = $this->bloqueunoRepository->update($request->all(), $id);

        Flash::success('Bloqueuno updated successfully.');

        return redirect(route('bloqueunos.index'));
    }

    /**
     * Remove the specified Bloqueuno from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $bloqueuno = $this->bloqueunoRepository->findWithoutFail($id);

        if (empty($bloqueuno)) {
            Flash::error('Bloqueuno not found');

            return redirect(route('bloqueunos.index'));
        }

        $this->bloqueunoRepository->delete($id);

        Flash::success('Bloqueuno deleted successfully.');

        return redirect(route('bloqueunos.index'));
    }
}
