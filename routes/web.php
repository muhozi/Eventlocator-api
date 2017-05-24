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

Route::get('/', 'HomeController@index');

Auth::routes();
Route::group(['middleware'=>'auth'],function(){
	Route::get('/newevent', 'EventsController@showEventForm')->name('addEvent');
	Route::post('/newevent', 'EventsController@saveEvent');
	Route::get('/events', 'EventsController@index')->name('events');
	Route::get('/events/{id}', 'EventsController@singleEvent')->name('singleEvent');
	Route::get('/events/delete/{id}','EventsController@deleteEvent')->name('deleteEvent');
	Route::get('/events/edit/{id}','EventsController@editEvent')->name('editEvent');
	Route::post('/events/edit/{id}','EventsController@updateEvent')->name('updateEvent');
	//Route::get('/home', 'HomeController@index');
});
/*Route::get('/updateall',function(){
	$events = \App\Models\Events::all();
	foreach($events as $event){
		$ev = \App\Models\Events::find($event->id);
		$ev->date = $event->created_at;
		$ev->save();
	}
});*/