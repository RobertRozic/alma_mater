<?php

use App\Models\Faculty;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/about/{name}', function ($name) {
    $faculties = Faculty::get();
    return view('about')
        ->with('name', $name)
        ->with('faculties', $faculties);
});

Route::get('/calculate/{broj1}/{broj2}', function ($broj1, $broj2) {
    return $broj1 + $broj2;
});

Route::get('/kvadriraj/{broj1}', function ($broj1) {
    return $broj1 ** 2;
});

Route::post('/kvadriraj', function (Request $request) {
    return $request->broj ** 2;
});

Route::get('/api/all_faculties', function() {
    return Faculty::get();
});

Route::get('/api/new_faculty/{title}/{city}', function ($title, $city) {

    $faculty = new Faculty;
    $faculty->title = $title;
    $faculty->city = $city;
    $faculty->save();

    return 'Uspješno dodan fakultet!';
});


Route::get('/api/update_faculty/{id}/{title}/{city}', function ($id, $title, $city) {

    $faculty = Faculty::find($id);
    $faculty->title = $title;
    $faculty->city = $city;
    $faculty->save();

    return 'Uspješno uređen fakultet!';
});