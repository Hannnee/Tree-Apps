<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Feature\Auth\AuthController;
use App\Http\Controllers\Feature\Tree\TreeController;
use App\Http\Controllers\Feature\ApiDocs\ApiDocsController;
use App\Http\Controllers\Feature\Keluarga\KeluargaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [AuthController::class, 'index']);
Route::post('/', [AuthController::class, 'login']);

Route::group(['middleware' => 'auth'], function () {

    /**
     * Route for logout
     */
    Route::post('/logout', [AuthController::class, 'logout']);

    /**
     * Route for keluarga
     */
    Route::resource('feature/keluarga', KeluargaController::class);

    /**
     * Route for visual tree
     */
    Route::get('feature/tree', [TreeController::class, 'visual']);

    /**
     * Route for api docs
     */
    Route::get('feature/api-docs', [ApiDocsController::class, 'document']);
});

