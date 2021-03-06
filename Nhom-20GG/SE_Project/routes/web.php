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
// Route admin
Route::get('admin', function() {
	    return view('admin.layout.index');
	});
Route::group(['prefix'=>'admin'], function() {	
	Route::group(['prefix' => 'Videos'], function() {
	    Route::get('AddVideo', 'VideoController@getAddVideo')->name('addVideo');
	    Route::get('ListVideos', 'VideoController@getListVideos')->name('listVideos');
	    Route::post('AddVideo', 'VideoController@postAddVideo');
	    Route::get('xoa/{id}', 'VideoController@getXoa');
	});
});

Route::get('ListMusic', 'VideoController@getShowList');
Route::get('video/{id}', 'VideoController@getVideo');