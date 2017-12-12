<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAspirantesDocumentoRequest;
use App\Http\Requests\UpdateAspirantesDocumentoRequest;
use App\Repositories\AspirantesDocumentoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class AspirantesDocumentoController extends AppBaseController
{
    /** @var  AspirantesDocumentoRepository */
    private $aspirantesDocumentoRepository;

    public function __construct(AspirantesDocumentoRepository $aspirantesDocumentoRepo)
    {
        $this->aspirantesDocumentoRepository = $aspirantesDocumentoRepo;
    }

    /**
     * Display a listing of the AspirantesDocumento.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->aspirantesDocumentoRepository->pushCriteria(new RequestCriteria($request));
        $aspirantesDocumentos = $this->aspirantesDocumentoRepository->all();

        return view('aspirantes_documentos.index')
            ->with('aspirantesDocumentos', $aspirantesDocumentos);
    }

    /**
     * Show the form for creating a new AspirantesDocumento.
     *
     * @return Response
     */
    public function create()
    {
        return view('aspirantes_documentos.create');
    }

    /**
     * Store a newly created AspirantesDocumento in storage.
     *
     * @param CreateAspirantesDocumentoRequest $request
     *
     * @return Response
     */
    public function store(CreateAspirantesDocumentoRequest $request)
    {
        $input = $request->all();

        $aspirantesDocumento = $this->aspirantesDocumentoRepository->create($input);

        Flash::success('Aspirantes Documento saved successfully.');

        return redirect(route('aspirantesDocumentos.index'));
    }

    /**
     * Display the specified AspirantesDocumento.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $aspirantesDocumento = $this->aspirantesDocumentoRepository->findWithoutFail($id);

        if (empty($aspirantesDocumento)) {
            Flash::error('Aspirantes Documento not found');

            return redirect(route('aspirantesDocumentos.index'));
        }

        return view('aspirantes_documentos.show')->with('aspirantesDocumento', $aspirantesDocumento);
    }

    /**
     * Show the form for editing the specified AspirantesDocumento.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $aspirantesDocumento = $this->aspirantesDocumentoRepository->findWithoutFail($id);

        if (empty($aspirantesDocumento)) {
            Flash::error('Aspirantes Documento not found');

            return redirect(route('aspirantesDocumentos.index'));
        }

        return view('aspirantes_documentos.edit')->with('aspirantesDocumento', $aspirantesDocumento);
    }

    /**
     * Update the specified AspirantesDocumento in storage.
     *
     * @param  int              $id
     * @param UpdateAspirantesDocumentoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAspirantesDocumentoRequest $request)
    {
        $aspirantesDocumento = $this->aspirantesDocumentoRepository->findWithoutFail($id);

        if (empty($aspirantesDocumento)) {
            Flash::error('Aspirantes Documento not found');

            return redirect(route('aspirantesDocumentos.index'));
        }

        $aspirantesDocumento = $this->aspirantesDocumentoRepository->update($request->all(), $id);

        Flash::success('Aspirantes Documento updated successfully.');

        return redirect(route('aspirantesDocumentos.index'));
    }

    /**
     * Remove the specified AspirantesDocumento from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $aspirantesDocumento = $this->aspirantesDocumentoRepository->findWithoutFail($id);

        if (empty($aspirantesDocumento)) {
            Flash::error('Aspirantes Documento not found');

            return redirect(route('aspirantesDocumentos.index'));
        }

        $this->aspirantesDocumentoRepository->delete($id);

        Flash::success('Aspirantes Documento deleted successfully.');

        return redirect(route('aspirantesDocumentos.index'));
    }
}
