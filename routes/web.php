<?php

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
Route::get('/home', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/ContactUS', function () {
    return view('ContactUS');
});
Route::get('/city', function () {
    return view('city');
});
Route::get('/spec/ANATOMIE-PATHOLOGIE', function () {
    return view('spec.ANATOMIE-PATHOLOGIE');
});

Route::get('/spec/ANESTHESIE-REANIMATION', function () {
    return view('spec.ANESTHESIE-REANIMATION');
});
Route::get('/spec/STOMATOLOGIE', function () {
    return view('spec.STOMATOLOGIE');
});
Route::get('/spec/CARDIOLOGIE', function () {
    return view('spec.CARDIOLOGIE');
});
Route::get('/spec/PNEUMOLOGIE', function () {
    return view('spec.PNEUMOLOGIE');
});
Route::get('/spec/PEDIATRIE', function () {
    return view('spec.PEDIATRIE');
});
Route::get('/spec/OPHTALMOLOGIE', function () {
    return view('spec.OPHTALMOLOGIE');
});
Route::get('/spec/RHUMATOLOGIE', function () {
    return view('spec.RHUMATOLOGIE');
});
Route::get('/spec/PSYCHIATRIE', function () {
    return view('spec.PSYCHIATRIE');
});
Route::get('/spec/DERMATOLOGIE', function () {
    return view('spec.DERMATOLOGIE');
});
Route::get('/spec/ENDOCRINOLOGIE', function () {
    return view('spec.ENDOCRINOLOGIE');
});
Route::get('/spec/CHIRURGIE_ORTHOPEDIQUE', function () {
    return view('spec.CHIRURGIE_ORTHOPEDIQUE');
});
Route::get('/citys/Anatomi-path_Tunis', function () {
    return view('citys.Anatomi-path_Tunis');
});
Route::get('/citys/Stoma-sfax', function () {
    return view('citys.Stoma-sfax');
});
Route::get('/citys/anatomi-path_sousse', function () {
    return view('citys.anatomi-path_sousse');
});
Route::get('/citys/anatomi-path_sfax', function () {
    return view('citys.anatomi-path_sfax');
});
Route::get('/citys/anatomi-path_gabes', function () {
    return view('citys.anatomi-path_gabes');
});
Route::get('/citys/anatomi-path_ariana', function () {
    return view('citys.anatomi-path_ariana');
});

Route::get('contact-us', 'ContactUSController@contactUS');
Route::post('contact-us', ['as'=>'contactus.store','uses'=>'ContactUSController@contactUSPost']);

