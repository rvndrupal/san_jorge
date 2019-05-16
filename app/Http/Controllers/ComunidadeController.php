<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateComunidadeRequest;
use App\Http\Requests\UpdateComunidadeRequest;
use App\Repositories\ComunidadeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

use Illuminate\Support\Facades\Storage;

class ComunidadeController extends AppBaseController
{
    /** @var  ComunidadeRepository */
    private $comunidadeRepository;

    public function __construct(ComunidadeRepository $comunidadeRepo)
    {
        $this->comunidadeRepository = $comunidadeRepo;
    }

    /**
     * Display a listing of the Comunidade.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->comunidadeRepository->pushCriteria(new RequestCriteria($request));
        $comunidades = $this->comunidadeRepository->all();

        return view('comunidades.index')
            ->with('comunidades', $comunidades);
    }

    /**
     * Show the form for creating a new Comunidade.
     *
     * @return Response
     */
    public function create()
    {
        return view('comunidades.create');
    }

    /**
     * Store a newly created Comunidade in storage.
     *
     * @param CreateComunidadeRequest $request
     *
     * @return Response
     */
    public function store(CreateComunidadeRequest $request)
    {
        $input = $request->all();

        $comunidade = $this->comunidadeRepository->create($input);

          //IMAGE
          if($request->file('imagen')){
            $path = Storage::disk('public')->put('comunidad',  $request->file('imagen'));
            $comunidade->fill(['imagen' => asset($path)])->save();
        }

        Flash::success('Comunidade saved successfully.');

        return redirect(route('comunidades.create'));

    }

    /**
     * Display the specified Comunidade.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $comunidade = $this->comunidadeRepository->findWithoutFail($id);

        if (empty($comunidade)) {
            Flash::error('Comunidade not found');

            return redirect(route('comunidades.index'));
        }

        return view('comunidades.show')->with('comunidade', $comunidade);
    }

    /**
     * Show the form for editing the specified Comunidade.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $comunidade = $this->comunidadeRepository->findWithoutFail($id);

        if (empty($comunidade)) {
            Flash::error('Comunidade not found');

            return redirect(route('comunidades.index'));
        }

        return view('comunidades.edit')->with('comunidade', $comunidade);
    }

    /**
     * Update the specified Comunidade in storage.
     *
     * @param  int              $id
     * @param UpdateComunidadeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateComunidadeRequest $request)
    {
        $comunidade = $this->comunidadeRepository->findWithoutFail($id);

        if (empty($comunidade)) {
            Flash::error('Comunidade not found');

            return redirect(route('comunidades.index'));
        }

        $comunidade = $this->comunidadeRepository->update($request->all(), $id);

         //IMAGE
         if($request->file('imagen')){
            $path = Storage::disk('public')->put('comunidad',  $request->file('imagen'));
            $comunidade->fill(['imagen' => asset($path)])->save();
        }

        Flash::success('Comunidade updated successfully.');

        return redirect(route('comunidades.index'));
    }

    /**
     * Remove the specified Comunidade from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $comunidade = $this->comunidadeRepository->findWithoutFail($id);

        if (empty($comunidade)) {
            Flash::error('Comunidade not found');

            return redirect(route('comunidades.index'));
        }

        $this->comunidadeRepository->delete($id);

        Flash::success('Comunidade deleted successfully.');

        return redirect(route('comunidades.index'));
    }
}
