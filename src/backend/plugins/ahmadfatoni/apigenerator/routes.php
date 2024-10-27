<?php

Route::post('fatoni/generate/api', array('as' => 'fatoni.generate.api', 'uses' => 'AhmadFatoni\ApiGenerator\Controllers\ApiGeneratorController@generateApi'));
Route::post('fatoni/update/api/{id}', array('as' => 'fatoni.update.api', 'uses' => 'AhmadFatoni\ApiGenerator\Controllers\ApiGeneratorController@updateApi'));
Route::get('fatoni/delete/api/{id}', array('as' => 'fatoni.delete.api', 'uses' => 'AhmadFatoni\ApiGenerator\Controllers\ApiGeneratorController@deleteApi'));

Route::resource('api/v0/website/navigation', 'AhmadFatoni\ApiGenerator\Controllers\API\WebsiteNavigationController', ['except' => ['destroy', 'create', 'edit']]);
Route::get('api/v0/website/navigation/{id}/delete', ['as' => 'api/v0/website/navigation.delete', 'uses' => 'AhmadFatoni\ApiGenerator\Controllers\API\WebsiteNavigationController@destroy']);
Route::resource('api/v0/website/blogs', 'AhmadFatoni\ApiGenerator\Controllers\API\WebsiteBlogController', ['except' => ['destroy', 'create', 'edit']]);
Route::get('api/v0/website/blogs/{id}/delete', ['as' => 'api/v0/website/blogs.delete', 'uses' => 'AhmadFatoni\ApiGenerator\Controllers\API\WebsiteBlogController@destroy']);