<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNumerosPalabrasRequest;
use App\Http\Requests\UpdateNumerosPalabrasRequest;
use App\Repositories\NumerosPalabrasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class NumerosPalabrasController extends AppBaseController
{
    /** @var  NumerosPalabrasRepository */
    private $numerosPalabrasRepository;

    public function __construct(NumerosPalabrasRepository $numerosPalabrasRepo)
    {
        $this->numerosPalabrasRepository = $numerosPalabrasRepo;
    }

    /**
     * Display a listing of the NumerosPalabras.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->numerosPalabrasRepository->pushCriteria(new RequestCriteria($request));
        $numerosPalabras = $this->numerosPalabrasRepository->all();

        return view('numeros_palabras.index')
            ->with('numerosPalabras', $numerosPalabras);
    }

    /**
     * Show the form for creating a new NumerosPalabras.
     *
     * @return Response
     */
    public function create()
    {
        return view('numeros_palabras.create');
    }

    /**
     * Store a newly created NumerosPalabras in storage.
     *
     * @param CreateNumerosPalabrasRequest $request
     *
     * @return Response
     */
    public function store(CreateNumerosPalabrasRequest $request)
    {
        $input = $request->all();

        $numerosPalabras = $this->numerosPalabrasRepository->create($input);

        Flash::success('Numeros Palabras saved successfully.');

        return redirect(route('numerosPalabras.index'));
    }

    /**
     * Display the specified NumerosPalabras.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $numerosPalabras = $this->numerosPalabrasRepository->findWithoutFail($id);

        if (empty($numerosPalabras)) {
            Flash::error('Numeros Palabras not found');

            return redirect(route('numerosPalabras.index'));
        }

        return view('numeros_palabras.show')->with('numerosPalabras', $numerosPalabras);
    }

    /**
     * Show the form for editing the specified NumerosPalabras.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $numerosPalabras = $this->numerosPalabrasRepository->findWithoutFail($id);

        if (empty($numerosPalabras)) {
            Flash::error('Numeros Palabras not found');

            return redirect(route('numerosPalabras.index'));
        }

        return view('numeros_palabras.edit')->with('numerosPalabras', $numerosPalabras);
    }

    /**
     * Update the specified NumerosPalabras in storage.
     *
     * @param  int              $id
     * @param UpdateNumerosPalabrasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateNumerosPalabrasRequest $request)
    {
        $numerosPalabras = $this->numerosPalabrasRepository->findWithoutFail($id);

        if (empty($numerosPalabras)) {
            Flash::error('Numeros Palabras not found');

            return redirect(route('numerosPalabras.index'));
        }

        $numerosPalabras = $this->numerosPalabrasRepository->update($request->all(), $id);

        Flash::success('Numeros Palabras updated successfully.');

        return redirect(route('numerosPalabras.index'));
    }

    /**
     * Remove the specified NumerosPalabras from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $numerosPalabras = $this->numerosPalabrasRepository->findWithoutFail($id);

        if (empty($numerosPalabras)) {
            Flash::error('Numeros Palabras not found');

            return redirect(route('numerosPalabras.index'));
        }

        $this->numerosPalabrasRepository->delete($id);

        Flash::success('Numeros Palabras deleted successfully.');

        return redirect(route('numerosPalabras.index'));
    }
}
