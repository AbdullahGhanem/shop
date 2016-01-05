<?php

Route::get('/', function () {
	$products = App\Product::all();
    return view('home', compact('products'));
});

// Authentication routes...
Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

//cart
Route::resource('cart','CartController');

//cart
Route::get('order/create',['as' => 'order.create', 'uses' => 'OrderController@create']);
Route::post('order/create',['as' => 'order.store', 'uses' => 'OrderController@store']);
Route::get('order',['as' => 'order.show', 'uses' => 'OrderController@show']);
Route::get('order/{id}',['as' => 'order.contant', 'uses' => 'OrderController@contant']);

#search routes
Route::post('search',['as' => 'Search.store', 'uses' => 'SearchController@postSearch']);
Route::get('search/{query}',['as' => 'search.all', 'uses' => 'SearchController@searchAll']);


Route::get('product/{slug}', ['as' => 'product.show', 'uses' => 'ProductController@show']);
Route::get('category/{id}',['as' => 'category.show', 'uses' => 'CategoryController@show']);
Route::get('page/{id}',['as' => 'page.show', 'uses' => 'PageController@show']);

Route::post('lang', ['as' => 'ChangeLang', 'uses' => 'PageController@changeLang']);

Route::group(['prefix' => 'admin'], function () {

	Route::get('/',['as' => 'admin.dashboard', 'uses' => 'PageController@dashboard']);
	Route::get('/reviews',['as' => 'admin.review.index', 'uses' => 'ReviewController@index']);
	
	//categories routes
	Route::resource('category','CategoryController',['except' => ['index','show']]);
	Route::get('categories',['as' => 'admin.category.index', 'uses' => 'CategoryController@index']);

	//products routes
	Route::resource('product','ProductController',['except' => ['index','show']]);
	Route::get('products',['as' => 'admin.product.index', 'uses' => 'ProductController@index']);

	//Pages admin routes
	Route::resource('page','PageController',['except' => ['index','show']]);
	Route::get('pages',['as' => 'admin.page.index', 'uses' => 'PageController@index']);

	//Roles routes
	Route::resource('role','RoleController',['except' => ['index']]);
	Route::get('roles',['as' => 'admin.role.index', 'uses' => 'RoleController@index']);

	//Users admin routes
	Route::resource('user','UserController',['except' => ['index']]);
	Route::get('users',['as' => 'admin.user.index', 'uses' => 'UserController@index']);

	//Orders admin routes
	Route::get('orders',['as' => 'admin.order.inex', 'uses' => 'OrderController@index']);
	Route::resource('order','OrderController',['only' => ['update', 'edit']]);

	//slideshows routes
	Route::resource('slideshow','SlideshowController',['except' => ['index']]);
	Route::get('slideshows','SlideshowController@index');
});

#settings route
Route::get('settings', ['as'=> 'settings', 'uses'=> 'SettingController@show']);
Route::get('settings/changePassword', ['as'=> 'changePassword', 'uses'=> 'SettingController@changePassword']);
Route::get('deleteAccount', ['as'=> 'deleteAccount', 'uses'=> 'SettingController@deleteAccount']);

Route::post('settings', ['as'=> 'settings.update', 'uses'=> 'SettingController@update']);
Route::post('changePassword', ['as'=> 'PostChangePassword', 'uses'=> 'SettingController@PostChangePassword']);

#profile routes
Route::get('{profile}', 'ProfileController@show');