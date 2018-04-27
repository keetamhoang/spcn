<?php

/*
 * Frontend
 */
Route::get('/', 'Frontend\HomeController@index');

Route::get('test', 'Frontend\HomeController@test');
Route::get('kien-thuc-y-hoc-va-cac-bai-thuoc-huu-dung', 'Frontend\HomeController@kienthuc');
Route::get('bai-viet/{slug}-{id}', 'Frontend\HomeController@detail')
    ->where(['slug' => '[a-zA-Z0-9-]+', 'id' => '[0-9-]+']);

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

Route::post('question', 'Frontend\HomeController@question');

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

    Route::get('categories', 'Backend\CategoryController@index');
    Route::get('categoryAttribute.data', 'Backend\CategoryController@categoryAttribute');
    Route::get('categories/create', 'Backend\CategoryController@createView');
    Route::post('categories/store', 'Backend\CategoryController@store');
    Route::get('categories/{id}', 'Backend\CategoryController@editView');
    Route::post('categories/update', 'Backend\CategoryController@update');
    Route::get('categories/delete/{id}', 'Backend\CategoryController@delete');


    Route::get('posts', 'Backend\PostController@index');
    Route::get('posts/add', 'Backend\PostController@create');
    Route::get('posts/{id}', 'Backend\PostController@edit');
    Route::post('posts/store', 'Backend\PostController@store');
    Route::get('posts/delete/{id}', 'Backend\PostController@delete');
    Route::post('posts/update', 'Backend\PostController@update');
    Route::get('postAttribute.data', 'Backend\PostController@postAttribute');



    Route::get('get-ck-by-Category-id', 'Backend\CategoryController@getCkByCategoryId');

    Route::get('users', 'Backend\AccountController@index');
    Route::get('userAttribute.data', 'Backend\AccountController@userAttribute');

    Route::get('accounts', 'Backend\AccountController@index');
    Route::get('userAttribute.data', 'Backend\AccountController@userAttribute');

    Route::get('accounts/contents', 'Backend\AccountController@contentIndex');
    Route::get('contentAttribute.data', 'Backend\AccountController@contentAttribute');

    Route::get('transactions', 'Backend\TransactionController@index');
    Route::get('transactionAttribute.data', 'Backend\TransactionController@transactionAttribute');

    Route::get('products', 'Backend\ProductController@index');
    Route::get('productAttribute.data', 'Backend\ProductController@productAttribute');
    Route::post('Categorys/update-status-product', 'Backend\ProductController@updateStatus');
});
/*
 * End Admin
 */