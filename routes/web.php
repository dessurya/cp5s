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

// frontend
	
	// home
		Route::get('/', 'Frontend\FrontendController@home')
			->name('frontend.home');
	// home

	// about
		Route::get('/about', 'Frontend\FrontendController@about')
			->name('frontend.about');
	// about

	// product
		Route::get('/product', 'Frontend\FrontendController@product')
			->name('frontend.product');
		Route::get('/product/{slug}', 'Frontend\FrontendController@productIndex')
			->name('frontend.product.index');
		Route::get('/product/{slug}/{subslug}', 'Frontend\FrontendController@productView')
			->name('frontend.product.view');
	// product

	// contact
		Route::get('/contact', 'Frontend\FrontendController@contact')
			->name('frontend.contact');
		Route::post('/contact/store', 'Frontend\FrontendController@contactStore')
			->name('frontend.contact.store');

	// contact
// frontend

// backend
	Route::prefix('admin')->group(function(){

		Route::get('login', 'Auth\LoginController@showLoginForm')->name('loginForm');
	    Route::post('login', 'Auth\LoginController@login')->name('login');
	    Route::post('logout', 'Auth\LoginController@logout')->name('logout');
    
	});
// backend
