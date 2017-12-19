<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAspirantesDocumentosRequest;
use App\Http\Requests\UpdateAspirantesDocumentosRequest;
use App\Repositories\AspirantesDocumentosRepository;
use App\Http\Controllers\AppBaseController;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\DocDigitalizar;
use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;


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
       
     $actuales=Storage::files('public');
   
    $doc_digitalizar=DocDigitalizar::orderBy('id')->pluck('descrpcion','id');
        return view('aspirantes_documentos.create',compact('doc_digitalizar','actuales'));
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

          if($request->hasFile('file')){
            //$request->file('file');
            $filename=$request->file->getClientOriginalName();
            //return $filesize=$request->file->getClientSize();
            $filesize=$request->file->getClientSize();

            $request->file->storeAs('public',$filename);
            //Lista todos los archivo del directorio imagenes
            $actuales=Storage::files('public');
      
        }else
        {
            return 'No ha seleccionado un archivo';
        }

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
        /*$aspirantesDocumentos = $this->aspirantesDocumentosRepository->findWithoutFail($id);

        if (empty($aspirantesDocumentos)) {
            Flash::error('Aspirantes Documentos not found');

            return redirect(route('aspirantesDocumentos.index'));
        }

        return view('aspirantes_documentos.show')->with('aspirantesDocumentos', $aspirantesDocumentos);
        */
        $url=Storage::url('estsela.jpg');


        return view('verFile',['url'=>$url]);
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
