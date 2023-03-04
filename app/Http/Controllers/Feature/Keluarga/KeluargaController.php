<?php

namespace App\Http\Controllers\Feature\Keluarga;

use App\Http\Controllers\Controller;
use App\Services\Keluarga\KeluargaService;
use App\Http\Requests\Keluarga\KeluargaRequest;

class KeluargaController extends Controller
{
    protected $keluargaService;

    public function __construct(KeluargaService $keluargaService)
    {
        $this->keluargaService = $keluargaService;
    }

    public function index()
    {
        $keluarga = $this->keluargaService->getListPerson();
        return view('feature.keluarga.index', compact('keluarga'));
    }

    public function create()
    {
        $keluarga = $this->keluargaService->createPerson();
        return view('feature.keluarga.create', compact('keluarga'));
    }

    public function store(KeluargaRequest $request)
    {
        return $this->tryCatch(function () use ($request) {
            $this->keluargaService->addPerson($request);
            return redirect('feature/keluarga');
        }, 'Data keluarga berhasil ditambahkan');
    }

    public function show($id)
    {
        $keluarga = $this->keluargaService->getPersonById($id);
        return view('feature.keluarga.show', compact('keluarga'));
    }

    public function edit($id)
    {
        $keluarga = $this->keluargaService->getPersonById($id);
        $orangTua = $this->keluargaService->getListPerson();
        return view('feature.keluarga.edit', compact('keluarga', 'orangTua'));
    }

    public function update(KeluargaRequest $request, $id)
    {
        return $this->tryCatch(function () use ($request, $id) {
            $this->keluargaService->updatePersonById($request, $id);
            return redirect('feature/keluarga');
        }, 'Data keluarga berhasil diupdate');
    }

    public function destroy($id)
    {
        return $this->tryCatch(function () use ($id) {
            $this->keluargaService->getPersonById($id)->delete();
            return redirect('feature/keluarga');
        }, 'Data keluarga berhasil dihapus');
    }
}
