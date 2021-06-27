<?php
use Illuminate\Support\Facades\Route;
/**
 * 后台路由
 */
Route::group(['prefix'=>'adminapi'],function (){
    Route::group([],function (){
        Route::post('adminlogin','LoginController@index');
    });
});
