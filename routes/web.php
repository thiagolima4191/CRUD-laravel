<?php

use App\Http\Controllers\CandidatoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Candidato;

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

Route::get('/', [CandidatoController::class, 'show'])->name('home'); 
Route::post('/cadastrar', [CandidatoController::class, 'create'])->name('cadastrar'); 
Route::delete('/delete', [CandidatoController::class, 'delete'])->name('delete');

// Route:: post('/cadastrar-candidato', function(Request $informacoes) {
//     Candidato::create([
//         'name' => $informacoes->nome_candidato,
//         'telefone' => $informacoes->telefone_candidato
//     ]);
//     echo "Candidato Criado com Sucesso!";
//     // dd($informacoes->all());
// });

// Route::get('/mostrar-candidato/{id_do_candidato}', function($id_do_candidato) {
//     $candidato = Candidato::findOrFail($id_do_candidato);
//     echo $candidato->name;
//     echo $candidato->telefone;
//     echo "<br />";
//     echo $candidato->telefone;
// });