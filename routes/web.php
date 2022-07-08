<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ExpertiseController;
use App\Http\Controllers\ProjectController;
use App\Models\Expertise;
use Illuminate\Support\Facades\DB;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/expertise', function () {

    $expertise = DB::select(DB::raw("SELECT expertise.title,expertise.description,files.directory FROM expertise RIGHT JOIN files ON expertise.File_FK = files.id"));

    return view('expertise',['expertises'=>$expertise]);
});

Route::get('/project', function () {
    return view('project');
});

Route::get('/about', function () {
    return view('about');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





//Expertise
Route::post('/expertise',[ExpertiseController::class,'store']);
Route::get('/expertiseView',[ExpertiseController::class,'view']);
Route::get('/expertiseDelete/{id}',[ExpertiseController::class,'delete']);






//Project
Route::post('/project',[ProjectController::class,'store']);