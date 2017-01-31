<?php

Route::group(['middleware' => 'web', 'prefix' => 'pagination', 'namespace' => 'App\\Components\Pagination\Http\Controllers'], function()
{
    Route::get('/', 'PaginationController@index');
});
