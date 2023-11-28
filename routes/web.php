<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\EntresController;
use App\Http\Controllers\FacturesController;
use App\Http\Controllers\FournisseursController;
use App\Http\Controllers\ProduitsController;
use App\Http\Controllers\SocietesController;
use App\Http\Controllers\SortiesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Auth');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::post('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

Route::post('/login',[AuthController::class, 'login'] )->name('login');
Route::get('/logout',[AuthController::class, 'logout'] )->name('logout');



Route::resource('client', ClientsController::class);
Route::get('supprimer-client/{id}', [ClientsController::class,'destroy']);


Route::resource('produit', ProduitsController::class);
Route::get('supprimer-produit/{id}', [ProduitsController::class,'destroy']);



Route::resource('facture', FacturesController::class);
Route::get('supprimer-facture/{id}', [FacturesController::class,'destroy']);

Route::resource('fournisseur', FournisseursController::class);
Route::get('supprimer-fournisseur/{id}', [FournisseurController::class,'destroy']);

Route::resource('sortie', SortiesController::class);
Route::get('supprimer-sortie/{id}', [SortiesController::class,'destroy']);

Route::resource('entre', EntresController::class);
Route::get('supprimer-entre/{id}', [EntresController::class,'destroy']);

Route::resource('societe', SocietesController::class);
