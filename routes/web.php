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
use Illuminate\Http\Request;

Route::get('/test', function () {
    return view('welcome');
});

Route::get('/', function () {
	
    return view('index');
})->name('home');

Route::get('/map', function() {
	return view('map');
});

Route::get('/signup', 'RegistrationController@create');
Route::post('/signup', 'RegistrationController@store');

Route::get('/login', 'LoginController@create');
Route::post('/login', 'LoginController@store');

Route::get('/logout', 'LoginController@destroy');

Route::get('/create', function() {
	return view('tour.create');
});

Route::post('/create', 'TourController@store');


Route::get('/tour/{id?}', function($id = null) {
	return view('tour.detail');
});

Route::get('/search',function(Request $request) {

	if($request->date && $request->price && $request->phone) {
		$tours = DB::select('select * from tours where phone_number ='.$request->phone);
		//dd($table);
		return view('search', ['tours' => $tours]);
	}
	
	return back();
});








Route::get('/fucking', function() {
	return view('exam');
});