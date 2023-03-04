<?php

use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\Keluarga\KeluargaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function() {
    //3. Buat query untuk mendapatkan semua anak Budi
    Route::get('keluarga/test-php/soal/nomer-3', [KeluargaController::class, 'nomerThree']);

    //4. Buat query untuk mendapatkan cucu dari budi
    Route::get('keluarga/test-php/soal/nomer-4', [KeluargaController::class, 'nomerFour']);

    //5. Buat query untuk mendapatkan cucu perempuan dari budi
    Route::get('keluarga/test-php/soal/nomer-5', [KeluargaController::class, 'nomerFive']);

    //6. Buat query untuk mendapatkan bibi dari Farah
    Route::get('keluarga/test-php/soal/nomer-6', [KeluargaController::class, 'nomerSix']);

    //7. Buat query untuk mendapatkan sepupu laki-laki dari Hani
    Route::get('keluarga/test-php/soal/nomer-7', [KeluargaController::class, 'nomerSeven']);

    Route::apiResource('keluarga', KeluargaController::class);

    Route::post('logout', [AuthController::class, 'logout']);
});
