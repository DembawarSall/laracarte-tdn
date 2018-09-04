<?php

use App\Mail\ContactMessageCreated;

Route::get('/', [
	'as' => 'root_path',
	'uses' => 'PagesController@home'
]);


Route::get('/test-email', function() {
	return new ContactMessageCreated('Demba', 'wardembasal@gmail.com', 'Ceci est un teste');
});

Route::get('/about', 'PagesController@about')->name('about_path');

Route::get('/contact', [
	'as' => 'contact_path',
	'uses' => 'ContactsController@create'
]);

Route::post('/contact', [
	'as' => 'contact_path',
	'uses' => 'ContactsController@store'
]);

