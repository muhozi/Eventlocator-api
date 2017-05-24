<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/events', function(){
	$events = \App\Models\Events::orderBy('id','desc')->get();
	return Response()->json($events);
});
Route::get('/events/{id}', function($id){
	$event = \App\Models\Events::findOrFail($id);
	return Response()->json($event);
});
Route::post('/comment/{id}', function($id,Request $request){
	$event = \App\Models\Events::findOrFail($id);
	$comment = new \App\Models\Comments();
	$comment->event_id = $event->id;
	$comment->firstname = $request->input('firstname');
	$comment->lastname = $request->input('lastname');
	$comment->email = $request->input('email');
	$comment->comment = $request->input('comment');
	$comment->save();
	return Response()->json(["message"=>"Your comment has been successfully submitted"]);
});
Route::post('/reserve/{id}', function($id,Request $request){
	$event = \App\Models\Events::findOrFail($id);
	$reserve = new \App\Models\Reservations();
	$reserve->event_id = $event->id;
	$reserve->firstname = $request->input('firstname');
	$reserve->lastname = $request->input('lastname');
	$reserve->email = $request->input('email');
	$reserve->phone = $request->input('phone');
	$reserve->save();
	return Response()->json(["message"=>"You reservation has been successfully submitted"]);
});
