<?php

namespace App\Services\Keluarga;

use App\Models\Keluarga;
use App\Services\Service;

class KeluargaService extends Service
{
    public function getListPerson()
    {
        return Keluarga::orderByDesc('id')->get();
    }

    public function createPerson()
    {
        return $this->getListPerson();
    }

    public function getPersonById($id)
    {
        return Keluarga::findOrFail($id);
    }

    public function setOrangTua($orangTua)
    {
        return ($orangTua != '0') ? $orangTua : null;
    }

    public function addPerson($request)
    {
        $keluarga = Keluarga::create([
            'nama'          => $request->nama,
            'jenis_kelamin' => $request->jenisKelamin,
            'orang_tua'     => $this->setOrangTua($request->orangTua),
        ]);
        return $keluarga;
    }

    public function updatePersonById($request,$id)
    {
        $keluarga = $this->getPersonById($id);
        $keluarga->update([
            'nama'          => $request->nama,
            'jenis_kelamin' => $request->jenisKelamin,
            'orang_tua'     => $this->setOrangTua($request->orangTua),
        ]);
        return $keluarga;
    }

    /**
     *
     * Custom querys
     *
     */
    public function getThree($id)
    {
        return Keluarga::where('orang_tua', $id)->get();
    }

    public function getFour($id)
    {
        return Keluarga::join('keluarga as anak', 'anak.orang_tua', '=', 'keluarga.id')
        ->join('keluarga as cucu', 'cucu.orang_tua', '=', 'anak.id')
        ->where('keluarga.id', $id)
        ->get();
    }

    public function getFive($id)
    {
        return Keluarga::join('keluarga as anak', 'anak.orang_tua', '=', 'keluarga.id')
        ->join('keluarga as cucu', 'cucu.orang_tua', '=', 'anak.id')
        ->where('cucu.jenis_kelamin', '=', 'P')
        ->where('keluarga.id', '=', $id)
        ->get();
    }

    public function getSix($id)
    {
        return Keluarga::join('keluarga as ayah', 'keluarga.orang_tua', '=', 'ayah.id')
        ->join('keluarga as kakek', 'ayah.orang_tua', '=', 'kakek.id')
        ->join('keluarga as bibi', 'kakek.id', '=', 'bibi.orang_tua')
        ->where('keluarga.id', '=', $id)
        ->where('bibi.jenis_kelamin', '=', 'P')
        ->get();
    }

    public function getSeven($id)
    {
        return Keluarga::whereIn('orang_tua', Keluarga::select('id')
        ->where('orang_tua', '=', Keluarga::find(Keluarga::find($id)->getName->id)->getName->id)->get())
        ->where('jenis_kelamin', 'L')
        ->get();
    }
}
