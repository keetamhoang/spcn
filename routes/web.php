<?php

/*
 * Frontend
 */
Route::get('/', 'Frontend\HomeController@index');

Route::get('test', 'Frontend\HomeController@test');
Route::get('gen-link', 'Frontend\DealController@genLink');
Route::get('thong-tin-ca-nhan', 'Frontend\CashController@index');
Route::get('don-hang-cua-ban', 'Frontend\OrderController@index');
Route::get('san-pham-cua-ban', 'Frontend\ProductController@index');
Route::get('xu-cua-toi', 'Frontend\CashController@myXu');

/*
 * End Frontend
 */

/*
 * Auth
 */
Route::get('dang-nhap', 'Frontend\AuthController@loginView');
Route::post('login', 'Frontend\AuthController@login');
Route::get('admin/logout', 'Frontend\AuthController@logout');

// social
Route::get('login-social/redirect', 'Frontend\AuthController@redirectToProvider');
Route::get('login-social/callback', 'Frontend\AuthController@handleProviderCallback');
Route::get('logout', 'Frontend\AuthController@logoutSocial');
/*
 * End Auth
 */


/*
 * Admin KEE
 */
Route::group(['prefix' => 'admin', 'middleware' => ['auth.admin']], function () {
    Route::get('/', 'Backend\MainController@index');

    Route::get('brands', 'Backend\BrandController@index');
    Route::get('brandAttribute.data', 'Backend\BrandController@brandAttribute');
    Route::get('brands/create', 'Backend\BrandController@createView');
    Route::post('brands/store', 'Backend\BrandController@store');
    Route::get('brands/{id}', 'Backend\BrandController@editView');
    Route::post('brands/update', 'Backend\BrandController@update');
    Route::post('brands/update-status-brand', 'Backend\BrandController@updateStatus');
    Route::get('brands/delete/{id}', 'Backend\BrandController@delete');

    Route::get('get-ck-by-brand-id', 'Backend\BrandController@getCkByBrandId');

    Route::get('users', 'Backend\AccountController@index');
    Route::get('userAttribute.data', 'Backend\AccountController@userAttribute');

    Route::get('transactions', 'Backend\TransactionController@index');
    Route::get('transactionAttribute.data', 'Backend\TransactionController@transactionAttribute');

    Route::get('products', 'Backend\ProductController@index');
    Route::get('productAttribute.data', 'Backend\ProductController@productAttribute');
    Route::post('brands/update-status-product', 'Backend\ProductController@updateStatus');
});
/*
 * End Admin
 */