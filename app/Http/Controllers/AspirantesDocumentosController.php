<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAspirantesDocumentosRequest;
use App\Http\Requests\UpdateAspirantesDocumentosRequest;
use App\Repositories\AspirantesDocumentosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\DocDigitalizar;

class AspirantesDocumentosController extends AppBaseController
{
    /** @var  AspirantesDocumentosRepository */
    private $aspirantesDocumentosRepository;

    public function __construct(AspirantesDocumentosRepository $aspirantesDocumentosRepo)
    {
        $this->aspirantesDocumentosRepository = $aspirantesDocumentosRepo;
    }

    /**
     * Display a listing of the AspirantesDocumentos.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->aspirantesDocumentosRepository->pushCriteria(new RequestCriteria($request));
        $aspirantesDocumentos = $this->aspirantesDocumentosRepository->all();

        return view('aspirantes_documentos.index')
            ->with('aspirantesDocumentos', $aspirantesDocumentos);
    }

    /**
     * Show the form for creating a new AspirantesDocumentos.
     *
     * @return Response
     */
    public function create()
    {
       

    $doc_digitalizar=DocDigitalizar::orderBy('id')->pluck('descrpcion','id');
        return view('aspirantes_documentos.create',compact('doc_digitalizar'));
    }

    /**
     * Store a newly created AspirantesDocumentos in storage.
     *
     * @param CreateAspirantesDocumentosRequest $request
     *
     * @return Response
     */
    public function store(CreateAspirantesDocumentosRequest $request)
    {
        $input = $request->all();

        $aspirantesDocumentos = $this->aspirantesDocumentosRepository->create($input);

        Flash::success('Aspirantes Documentos saved successfully.');

        return redirect(route('aspirantesDocumentos.index'));
    }

    /**
     * Display the specified AspirantesDocumentos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $aspirantesDocumentos = $this->aspirantesDocumentosRepository->findWithoutFail($id);

        if (empty($aspirantesDocumentos)) {
            Flash::error('Aspirantes Documentos not found');

            return redirect(route('aspirantesDocumentos.index'));
        }

        return view('aspirantes_documentos.show')->with('aspirantesDocumentos', $aspirantesDocumentos);
    }

    /**
     * Show the form for editing the specified AspirantesDocumentos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $aspirantesDocumentos = $this->aspirantesDocumentosRepository->findWithoutFail($id);

        if (empty($aspirantesDocumentos)) {
            Flash::error('Aspirantes Documentos not found');

            return redirect(route('aspirantesDocumentos.index'));
        }

        return view('aspirantes_documentos.edit')->with('aspirantesDocumentos', $aspirantesDocumentos);
    }

    /**
     * Update the specified AspirantesDocumentos in storage.
     *
     * @param  int              $id
     * @param UpdateAspirantesDocumentosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAspirantesDocumentosRequest $request)
    {
        $aspirantesDocumentos = $this->aspirantesDocumentosRepository->findWithoutFail($id);

        if (empty($aspirantesDocumentos)) {
            Flash::error('Aspirantes Documentos not found');

            return redirect(route('aspirantesDocumentos.index'));
        }

        $aspirantesDocumentos = $this->aspirantesDocumentosRepository->update($request->all(), $id);

        Flash::success('Aspirantes Documentos updated successfully.');

        return redirect(route('aspirantesDocumentos.index'));
    }

    /**
     * Remove the specified AspirantesDocumentos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $aspirantesDocumentos = $this->aspirantesDocumentosRepository->findWithoutFail($id);

        if (empty($aspirantesDocumentos)) {
            Flash::error('Aspirantes Documentos not found');

            return redirect(route('aspirantesDocumentos.index'));
        }

        $this->aspirantesDocumentosRepository->delete($id);

        Flash::success('Aspirantes Documentos deleted successfully.');

        return redirect(route('aspirantesDocumentos.index'));
    }
}
