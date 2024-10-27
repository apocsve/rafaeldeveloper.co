<?php

Route::post('fatoni/generate/api', array('as' => 'fatoni.generate.api', 'uses' => 'AhmadFatoni\ApiGenerator\Controllers\ApiGeneratorController@generateApi'));
Route::post('fatoni/update/api/{id}', array('as' => 'fatoni.update.api', 'uses' => 'AhmadFatoni\ApiGenerator\Controllers\ApiGeneratorController@updateApi'));
Route::get('fatoni/delete/api/{id}', array('as' => 'fatoni.delete.api', 'uses' => 'AhmadFatoni\ApiGenerator\Controllers\ApiGeneratorController@deleteApi'));

Route::resource('api/v0/website/menu', 'AhmadFatoni\ApiGenerator\Controllers\API\WebsiteMenuItemsController', ['except' => ['destroy', 'create', 'edit']]);
Route::get('api/v0/website/menu/{id}/delete', ['as' => 'api/v0/website/menu.delete', 'uses' => 'AhmadFatoni\ApiGenerator\Controllers\API\WebsiteMenuItemsController@destroy']);
Route::resource('api/v0/website/blog/posts', 'AhmadFatoni\ApiGenerator\Controllers\API\WebsiteBlogPostsController', ['except' => ['destroy', 'create', 'edit']]);
Route::get('api/v0/website/blog/posts/{id}/delete', ['as' => 'api/v0/website/blog/posts.delete', 'uses' => 'AhmadFatoni\ApiGenerator\Controllers\API\WebsiteBlogPostsController@destroy']);