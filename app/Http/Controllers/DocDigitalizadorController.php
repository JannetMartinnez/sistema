<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDocDigitalizadorRequest;
use App\Http\Requests\UpdateDocDigitalizadorRequest;
use App\Repositories\DocDigitalizadorRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class DocDigitalizadorController extends AppBaseController
{
    /** @var  DocDigitalizadorRepository */
    private $docDigitalizadorRepository;

    public function __construct(DocDigitalizadorRepository $docDigitalizadorRepo)
    {
        $this->docDigitalizadorRepository = $docDigitalizadorRepo;
    }

    /**
     * Display a listing of the DocDigitalizador.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->docDigitalizadorRepository->pushCriteria(new RequestCriteria($request));
        $docDigitalizadors = $this->docDigitalizadorRepository->all();

        return view('doc_digitalizadors.index')
            ->with('docDigitalizadors', $docDigitalizadors);
    }

    /**
     * Show the form for creating a new DocDigitalizador.
     *
     * @return Response
     */
    public function create()
    {
        return view('doc_digitalizadors.create');
    }

    /**
     * Store a newly created DocDigitalizador in storage.
     *
     * @param CreateDocDigitalizadorRequest $request
     *
     * @return Response
     */
    public function store(CreateDocDigitalizadorRequest $request)
    {
        $input = $request->all();

        $docDigitalizador = $this->docDigitalizadorRepository->create($input);

        Flash::success('Doc Digitalizador saved successfully.');

        return redirect(route('docDigitalizadors.index'));
    }

    /**
     * Display the specified DocDigitalizador.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $docDigitalizador = $this->docDigitalizadorRepository->findWithoutFail($id);

        if (empty($docDigitalizador)) {
            Flash::error('Doc Digitalizador not found');

            return redirect(route('docDigitalizadors.index'));
        }

        return view('doc_digitalizadors.show')->with('docDigitalizador', $docDigitalizador);
    }

    /**
     * Show the form for editing the specified DocDigitalizador.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $docDigitalizador = $this->docDigitalizadorRepository->findWithoutFail($id);

        if (empty($docDigitalizador)) {
            Flash::error('Doc Digitalizador not found');

            return redirect(route('docDigitalizadors.index'));
        }

        return view('doc_digitalizadors.edit')->with('docDigitalizador', $docDigitalizador);
    }

    /**
     * Update the specified DocDigitalizador in storage.
     *
     * @param  int              $id
     * @param UpdateDocDigitalizadorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDocDigitalizadorRequest $request)
    {
        $docDigitalizador = $this->docDigitalizadorRepository->findWithoutFail($id);

        if (empty($docDigitalizador)) {
            Flash::error('Doc Digitalizador not found');

            return redirect(route('docDigitalizadors.index'));
        }

        $docDigitalizador = $this->docDigitalizadorRepository->update($request->all(), $id);

        Flash::success('Doc Digitalizador updated successfully.');

        return redirect(route('docDigitalizadors.index'));
    }

    /**
     * Remove the specified DocDigitalizador from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $docDigitalizador = $this->docDigitalizadorRepository->findWithoutFail($id);

        if (empty($docDigitalizador)) {
            Flash::error('Doc Digitalizador not found');

            return redirect(route('docDigitalizadors.index'));
        }

        $this->docDigitalizadorRepository->delete($id);

        Flash::success('Doc Digitalizador deleted successfully.');

        return redirect(route('docDigitalizadors.index'));
    }
}
