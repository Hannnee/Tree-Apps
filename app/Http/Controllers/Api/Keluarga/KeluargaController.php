<?php

namespace App\Http\Controllers\Api\Keluarga;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Keluarga\KeluargaService;
use App\Http\Requests\Keluarga\KeluargaRequest;
use App\Http\Resources\Api\Keluarga\KeluargaResource;

class KeluargaController extends Controller
{
    protected $keluargaService;

    public function __construct(KeluargaService $keluargaService)
    {
        $this->keluargaService = $keluargaService;
    }

    public function index()
    {
        return KeluargaResource::collection($this->keluargaService->getListPerson());
    }

    public function show($id)
    {
        return new KeluargaResource($this->keluargaService->getPersonById($id));
    }

    public function store(KeluargaRequest $request)
    {
        return $this->tryCatch(function () use($request) {
            return new KeluargaResource($this->keluargaService->addPerson($request));
        });
    }

    public function update(KeluargaRequest $request, $id)
    {
        return $this->tryCatch(function () use ($request, $id) {
            return new KeluargaResource($this->keluargaService->updatePersonById($request, $id));
        }, '', 'json');
    }

    public function destroy($id)
    {
        return $this->tryCatch(function () use ($id) {
            $this->keluargaService->getPersonById($id)->delete();
            return response()->noContent();
        }, '', 'json');
    }

    public function nomerThree(Request $request)
    {
        return $this->tryCatch(function () use ($request) {
            return KeluargaResource::collection(
                $this->keluargaService->getThree($request->semua_anak_dari_id)
            );
        }, '', 'json');
    }

    public function nomerFour(Request $request)
    {
        return $this->tryCatch(function () use ($request) {
            return KeluargaResource::collection(
                $this->keluargaService->getFour($request->semua_anak_dari_id)
            );
        }, '', 'json');
    }

    public function nomerFive(Request $request)
    {
        return $this->tryCatch(function () use ($request) {
            return KeluargaResource::collection(
                $this->keluargaService->getFive($request->semua_cucu_perempuan_dari_id)
            );
        }, '', 'json');
    }

    public function nomerSix(Request $request)
    {
        return $this->tryCatch(function () use ($request) {
            return KeluargaResource::collection(
                $this->keluargaService->getSix($request->semua_bibi_dari_id)
            );
        }, '', 'json');
    }

    public function nomerSeven(Request $request)
    {
        return $this->tryCatch(function () use ($request) {
            return KeluargaResource::collection(
                $this->keluargaService->getSeven($request->semua_sepupu_laki_laki_dari_id)
            );
        }, '', 'json');
    }
}
