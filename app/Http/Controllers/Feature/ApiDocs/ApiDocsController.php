<?php

namespace App\Http\Controllers\Feature\ApiDocs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiDocsController extends Controller
{
    public function document()
    {
        $apis = [
            [
                'name'              => 'login',
                'url'               => url('api/login'),
                'method'            => 'post',
                'description'       => 'Untuk login ke dalam sistem, akan mendapatkan token untuk authentikasi',
                'headers'           => [
                    'accept'        => 'application/json',
                ],
                'body'              => [

                ],
                'response'          => [
                    'token'         => 'string',
                ],
            ],
            [
                'name'              => 'logout',
                'url'               => url('api/logout'),
                'method'            => 'post',
                'description'       => 'Untuk logout',
                'headers'           => [
                    'accept'        => 'application/json',
                    'bearer'        => 'string token from login',
                ],
                'body'              => [

                ],
                'response'          => [

                ],
            ],
            [
                'name'              => 'create keluarga',
                'url'               => url('api/keluarga'),
                'method'            => 'post',
                'description'       => 'Untuk membuat data member keluarga',
                'headers'           => [
                    'accept'        => 'application/json',
                    'bearer'        => 'string token from login',
                ],
                'body'              => [
                    'name'          => 'string|required|max:225',
                    'jenisKelamin'  => 'required|L or P',
                    'orangTua'      => 'required|keluarga_id'
                ],
                'response'          => [
                    'id'            => 'integer',
                    'nama'          => 'string',
                    'jenis_kelamin' => 'enum',
                    'created_at'    => 'd F Y',
                ],
            ],
            [
                'name'              => 'delete keluarga',
                'url'               => url('api/keluarga/{id}'),
                'method'            => 'delete',
                'description'       => 'Untuk menghapus data member keluarga',
                'headers'           => [
                    'accept'        => 'application/json',
                    'bearer'        => 'string token from login',
                ],
                'body'              => [

                ],
                'response'          => [

                ],
            ],
            [
                'name'              => 'update keluarga',
                'url'               => url('api/keluarga/{id}'),
                'method'            => 'put',
                'description'       => 'Untuk mengupdate data member keluarga',
                'headers'           => [
                    'accept'        => 'application/json',
                    'bearer'        => 'string token from login',
                ],
                'body'              => [
                    'name'          => 'string|required|max:225',
                    'jenisKelamin'  => 'required|L or P',
                    'orangTua'      => 'required|keluarga_id'
                ],
                'response'          => [
                    'id'            => 'integer',
                    'nama'          => 'string',
                    'jenis_kelamin' => 'enum',
                    'created_at'    => 'd F Y',
                ],
            ],
            [
                'name'              => 'detail keluarga',
                'url'               => url('api/keluarga/{id}'),
                'method'            => 'get',
                'description'       => 'Untuk melihat detail data member keluarga',
                'headers'           => [
                    'accept'        => 'application/json',
                    'bearer'        => 'string token from login',
                ],
                'body'              => [

                ],
                'response'          => [
                    'id'            => 'integer',
                    'nama'          => 'string',
                    'jenis_kelamin' => 'enum',
                    'created_at'    => 'd F Y',
                ],
            ],
            [
                'name'              => 'get all list keluarga',
                'url'               => url('api/keluarga'),
                'method'            => 'get',
                'description'       => 'Untuk melihat semua data member keluarga',
                'headers'           => [
                    'accept'        => 'application/json',
                    'bearer'        => 'string token from login',
                ],
                'body'              => [

                ],
                'response'          => [
                    'id'            => 'integer',
                    'nama'          => 'string',
                    'jenis_kelamin' => 'enum',
                    'created_at'    => 'd F Y',
                ],
            ],
            [
                'name'              => 'query semua anak budi',
                'url'               => url('api/keluarga/test-php/soal/nomer-3?semua_anak_dari_id=1'),
                'method'            => 'get',
                'description'       => 'Untuk melihat semua anak budi',
                'headers'           => [
                    'accept'        => 'application/json',
                    'bearer'        => 'string token from login',
                ],
                'body'              => [

                ],
                'response'          => [
                    'id'            => 'integer',
                    'nama'          => 'string',
                    'jenis_kelamin' => 'enum',
                    'created_at'    => 'd F Y',
                ],
            ],
            [
                'name'              => 'query semua cucu budi',
                'url'               => url('api/keluarga/test-php/soal/nomer-4?semua_cucu_dari_id=1'),
                'method'            => 'get',
                'description'       => 'Untuk melihat semua cucu budi',
                'headers'           => [
                    'accept'        => 'application/json',
                    'bearer'        => 'string token from login',
                ],
                'body'              => [

                ],
                'response'          => [
                    'id'            => 'integer',
                    'nama'          => 'string',
                    'jenis_kelamin' => 'enum',
                    'created_at'    => 'd F Y',
                ],
            ],
            [
                'name'              => 'query semua cucu perempuan budi',
                'url'               => url('api/keluarga/test-php/soal/nomer-5?semua_cucu_perempuan_dari_id=1'),
                'method'            => 'get',
                'description'       => 'Untuk melihat semua cucu perempuan budi',
                'headers'           => [
                    'accept'        => 'application/json',
                    'bearer'        => 'string token from login',
                ],
                'body'              => [

                ],
                'response'          => [
                    'id'            => 'integer',
                    'nama'          => 'string',
                    'jenis_kelamin' => 'enum',
                    'created_at'    => 'd F Y',
                ],
            ],
            [
                'name'              => 'query semua bibi dari farah',
                'url'               => url('api/keluarga/test-php/soal/nomer-6?semua_bibi_dari_id=7'),
                'method'            => 'get',
                'description'       => 'Untuk melihat semua bibi dari farah',
                'headers'           => [
                    'accept'        => 'application/json',
                    'bearer'        => 'string token from login',
                ],
                'body'              => [

                ],
                'response'          => [
                    'id'            => 'integer',
                    'nama'          => 'string',
                    'jenis_kelamin' => 'enum',
                    'created_at'    => 'd F Y',
                ],
            ],
            [
                'name'              => 'query semua sepupu laki laki dari hani',
                'url'               => url('api/keluarga/test-php/soal/nomer-7?semua_sepupu_laki_laki_dari_id=10'),
                'method'            => 'get',
                'description'       => 'Untuk melihat semua sepupu laki laki dari hani',
                'headers'           => [
                    'accept'        => 'application/json',
                    'bearer'        => 'string token from login',
                ],
                'body'              => [

                ],
                'response'          => [
                    'id'            => 'integer',
                    'nama'          => 'string',
                    'jenis_kelamin' => 'enum',
                    'created_at'    => 'd F Y',
                ],
            ],
        ];
        return view('feature.apiDocs.index', compact('apis'));
    }
}
