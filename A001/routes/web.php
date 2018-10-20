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


/*
	Here route that we use to set locale.
*/
Route::get('/setlocale', function () {
    
    $locale = Request::get('locale');
    
    if (in_array($locale, \Config::get('app.locales'))) {
    	Session::put('locale', $locale);                    
    }

    return redirect()->back();
});



Route::group(['middleware' => ['locale']], function(){

	// Home
	Route::get('/',['as' => 'home', 'uses' => 'HomeController@index']);
 
 	
 	//Auth routes: Authentication, Registration
	Auth::routes();


	//Worker routes
	//can access only authorized users
	Route::group(['middleware'=>'auth', 'prefix'=>'/worker'], function(){
		Route::get('/identify', ['as' => 'worker-identify', 'uses' => 'worker\IdentifyController@identify']);
		
		Route::group(['prefix' => '/admin'], function(){
			Route::get('/profile', ['as' => 'worker-admin-profile', 'uses' => 'worker\AdminController@profile']);
			Route::get('/users', ['as' => 'worker-admin-users', 'uses' => 'worker\AdminController@users']);
			Route::get('/user/register', ['as' => 'worker-admin-user-register', 'uses' => 'worker\AdminController@userRegister']);
		});

		Route::group(['prefix' => '/auto-mechanic'], function(){
			Route::get('/profile', ['as' => 'worker-auto-mechanic-profile', 'uses' => 'worker\AutoMechanicController@profile']);
		});

		Route::group(['prefix' => '/cook'], function(){
			Route::get('/profile', ['as' => 'worker-cook-profile', 'uses' => 'worker\CookController@profile']);
		});

		Route::group(['prefix' => '/seller'], function(){
			Route::get('/profile', ['as' => 'worker-seller-profile', 'uses' => 'worker\SellerController@profile']);
		});
	});


	//Butchery routes
	//can access none-authorized, authorized users
	Route::group(['prefix'=>'/butchery'], function(){

		Route::get('/home', 'Butchery\HomeController@index');

		Route::get('/catalogue', 'Butchery\CatalogueController@index');

		Route::group(['prefix' => '/catalogue'], function(){
			
			Route::get('/beef', 'Butchery\CatalogueController@beef');
			Route::get('/lamb', 'Butchery\CatalogueController@lamb');
			Route::get('/pork', 'Butchery\CatalogueController@pork');
			Route::get('/poultry', 'Butchery\CatalogueController@poultry');

		});

		Route::get('/workers', 'Butchery\WorkersController@index');

		Route::get('/about', 'Butchery\AboutController@index');
	});


	//
	Route::get('/garage', function(){
		return view('visitor.garage');
	});

	Route::get('/barbecue', function(){
		return view('visitor.barbecue');
	});

});
