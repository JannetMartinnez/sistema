<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDocDigitalizarRequest;
use App\Http\Requests\UpdateDocDigitalizarRequest;
use App\Repositories\DocDigitalizarRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class DocDigitalizarController extends AppBaseController
{
    /** @var  DocDigitalizarRepository */
    private $docDigitalizarRepository;

    public function __construct(DocDigitalizarRepository $docDigitalizarRepo)
    {
        $this->docDigitalizarRepository = $docDigitalizarRepo;
    }

    /**
     * Display a listing of the DocDigitalizar.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->docDigitalizarRepository->pushCriteria(new RequestCriteria($request));
        $docDigitalizars = $this->docDigitalizarRepository->all();

        return view('doc_digitalizars.index')
            ->with('docDigitalizars', $docDigitalizars);
    }

    /**
     * Show the form for creating a new DocDigitalizar.
     *
     * @return Response
     */
    public function create()
    {
        return view('doc_digitalizars.create');
    }

    /**
     * Store a newly created DocDigitalizar in storage.
     *
     * @param CreateDocDigitalizarRequest $request
     *
     * @return Response
     */
    public function store(CreateDocDigitalizarRequest $request)
    {
        $input = $request->all();

        $docDigitalizar = $this->docDigitalizarRepository->create($input);

        Flash::success('Doc Digitalizar saved successfully.');

        return redirect(route('docDigitalizars.index'));
    }

    /**
     * Display the specified DocDigitalizar.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $docDigitalizar = $this->docDigitalizarRepository->findWithoutFail($id);

        if (empty($docDigitalizar)) {
            Flash::error('Doc Digitalizar not found');

            return redirect(route('docDigitalizars.index'));
        }

        return view('doc_digitalizars.show')->with('docDigitalizar', $docDigitalizar);
    }

    /**
     * Show the form for editing the specified DocDigitalizar.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $docDigitalizar = $this->docDigitalizarRepository->findWithoutFail($id);

        if (empty($docDigitalizar)) {
            Flash::error('Doc Digitalizar not found');

            return redirect(route('docDigitalizars.index'));
        }

        return view('doc_digitalizars.edit')->with('docDigitalizar', $docDigitalizar);
    }

    /**
     * Update the specified DocDigitalizar in storage.
     *
     * @param  int              $id
     * @param UpdateDocDigitalizarRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDocDigitalizarRequest $request)
    {
        $docDigitalizar = $this->docDigitalizarRepository->findWithoutFail($id);

        if (empty($docDigitalizar)) {
            Flash::error('Doc Digitalizar not found');

            return redirect(route('docDigitalizars.index'));
        }

        $docDigitalizar = $this->docDigitalizarRepository->update($request->all(), $id);

        Flash::success('Doc Digitalizar updated successfully.');

        return redirect(route('docDigitalizars.index'));
    }

    /**
     * Remove the specified DocDigitalizar from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $docDigitalizar = $this->docDigitalizarRepository->findWithoutFail($id);

        if (empty($docDigitalizar)) {
            Flash::error('Doc Digitalizar not found');

            return redirect(route('docDigitalizars.index'));
        }

        $this->docDigitalizarRepository->delete($id);

        Flash::success('Doc Digitalizar deleted successfully.');

        return redirect(route('docDigitalizars.index'));
    }
}
