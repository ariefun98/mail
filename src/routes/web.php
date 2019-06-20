<?php

Route::group(['prefix' => 'mail'], function(){
	Route::get('/', 'Zirvu\Mail\MailController@view');
});