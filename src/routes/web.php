<?php

Route::group(['namespace'=>'Gcl\Contact\Http\Controllers'],function(){

	Route::get('contact','ContactController@index')->name('contact');
	Route::post('contact','ContactController@saveData');

});