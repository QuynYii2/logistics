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
    return view('auth/login');
});

Auth::routes();
Route::get('logout', 'HomeController@logout');

Route::get('/Dashboard', 'HomeController@index');


/* router warehouse */
Route::group(['prefix'=>'/warehouse', 'middleware' => [\App\Http\Middleware\CheckRoleWarehouse::class]],function(){
    Route::get('/list', 'WarehouseController@index');
    Route::get('/{id}/edit', 'WarehouseController@edit');
    Route::post('/update', 'WarehouseController@update');
    Route::get('/{id}/delete/', 'WarehouseController@destroy');
    Route::get('/addwarehouse', 'WarehouseController@add');
    Route::post('/checkadd', 'WarehouseController@checkadd');
});
/* end router warehouse */

/* router bill */
Route::group(['prefix'=>'/bill'],function(){
    Route::get('/list', 'BillController@index')->middleware(\App\Http\Middleware\CheckRoleBill::class);
    Route::get('ChangeStatus', 'BillController@updatestatus')->middleware(\App\Http\Middleware\CheckRoleBill::class);
    Route::get('/{id}/edit', 'BillController@edit');
    Route::post('/update', 'BillController@update');
    Route::get('/{id}/delete/', 'BillController@destroy');
    Route::get('/addbill', 'BillController@add');
    Route::post('/checkadd', 'BillController@checkadd');
    Route::get('/statics', 'BillController@statics');
    Route::get('/staticss', 'BillController@Gstatics');
});
/* end router bill */


/* router user */
Route::get('/list-user', 'UserController@index');
Route::get('userChangeStatus', 'UserController@userChangeStatus');
/* end router user */
