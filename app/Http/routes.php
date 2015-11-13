<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::resource('community', 'CommunityController');

Route::resource('member', 'CommunityMemberController');

Route::resource('donater', 'DonaterController');

use App\Community;
use App\Donater;

Route::get('/test', function ()
{
	$com =  Community::all();

	foreach ($com as $key => $value) {
		return $value->donaters;
	}
});