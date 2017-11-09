<?php



Route::get('/', function () {    return view('index');})->name('index');

Route::get('/company', function () {    return view('static/contacts');})->name ('contacts');

Auth::routes();

Route::group(['prefix' => '/admin',], function () {
    Route::get('/', 'Admin\AdminController@index')->name('admin');
    Route::resource('/product', 'ProductController');
}
);