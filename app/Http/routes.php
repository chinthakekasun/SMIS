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
Route::group(['middleware' => ['web']], function () {

});

Route::get('test','TestController@viewTest');
Route::post('test','TestController@doTest');

Route::get('/mail', function () {
    return view('emails.mail');
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('practise', function () {
    return view('common.practise')
    	->with('title','Practise Shedule');
});

Route::get('badminton', function () {
    return view('games.badminton')
    	->with('title','Badminton');
});
Route::get('basketball', function () {
    return view('games.basketball')
    	->with('title','Basketball');
});


Route::get('/director_home', function () {
	if(Auth::check()){
    return view('director.director_home')->with('title','Director');
	}
	else{
		return ReDirect::to('login');
	}
});

Route::get('/instructor_home', function () {
	if(Auth::check()){
    return view('instructor.instructor_home')->with('title','Instructor');
	}
	else{
		return ReDirect::to('login');
	}
});


Route::get('/team_cap_home', function () {
	if(Auth::check()){
    return view('team_cap.team_cap_home')->with('title','Team Captan');
	}
	else{
		return Redirect::to('login');
	}
});

Route::get('/faculty_cap_home', function () {
	if(Auth::check()){
    return view('faculty_cap.faculty_cap_home')->with('title','Faculty Captan');
	}
	else
	{
		return Redirect::to('login');
	}
});

Route::get('/player_home', function () {
	if(Auth::check()){
    return view('player.player_home')->with('title','Player');
	}
	else
	{
		return Redirect::to('login');
	}
});

Route::get('login','UserController@showLogin');
Route::post('login','UserController@doLogin');

Route::get('/logout', function () {
	Auth::logout();
    return Redirect::to('login');
    //Route::get('login','UserController@showLogin');
});

Route::get('/profile', function () {
	if(Auth::check()){
    return view('common.profile')->with('title','Profile');
	}
	else
	{
		return Redirect::to('login');
	}
});

Route::get('/manage', function () {
	if(Auth::check())
	{
		if(Auth::user()->role === 'director')
		{
			return view('director.manage_users')->with('title','Manage Users');
		}
		else{
			return view('errors.404');
		}
	}
	else
	{
		return Redirect::to('login');
	}
});

Route::get('/mysports', function () {
	if(Auth::check())
	{
		if(Auth::user()->role === 'instructor')
		{
			return view('instructor.sports')->with('title','My Sports');
		}
		else{
			return view('errors.404');
		}
	}
	else
	{
		return Redirect::to('login');
	}
});


Route::get('home','HomeController@goHome');

Route::get('edit_profile','EditprofileController@showEditprofile');
Route::post('edit_profile','EditprofileController@doEditprofile');

Route::get('notice','NoticeController@getNotice');


Route::get('teammembers','PlayerController@viewPlayers');

Route::get('upld','AdminController@showUpload');
Route::post('upld','AdminController@doUpload');

Route::get('delete/{id}',[
			'as'=>'delete',
			'uses'=>'AdminController@destroy'
			]);

Route::get('remove/{id}',[
			'as'=>'remove',
			'uses'=>'EntryformController@destroy'
			]);
Route::get('approveteamcards/{id}',[
			'as'=>'approveteamcards',
			'uses'=>'RequestController@approveEntryforms'
			]);

Route::get('requests','RequestController@showRequests');
Route::get('publish/{id}',[
			'as'=>'publish',
			'uses'=>'RequestController@publish'
			]);

Route::post('newuser','AdminController@newUser');


Route::get('upcoming','EventController@upcomigEvent');
Route::get('newevent','EventController@newEvent');
Route::post('newevent','EventController@addEvent');

Route::get('application/{game}',[
	'as'=>'application',
	'uses'=>'ApplicationController@showApplycation'
	]);
Route::post('application','ApplicationController@doApplycation');

Route::get('applied','ApplicationController@viewApplications');

Route::get('entryform','EntryformController@viewEntryforms');
Route::post('entryform','EntryformController@sendEntryforms');

Route::get('editnotice/{id}',[
			'as'=>'editnotice',
			'uses'=>'NoticeController@viewEdit'
			]);

Route::post('update','NoticeController@doEdit');

Route::get('viewapplication/{id}',[
		'as'=>'viewapplication',
		'uses'=>'ApplicationController@viewApp'
		]);

Route::post('sendmail','MailController@sendMail');

Route::get('createpdf/{id}',[
			'as'=>'createpdf',
			'uses'=>'PdfController@createPdf']);

Route::get('teamcard','EntryformController@viewTeams');

//Route::get('ground','ReservationController@viewGroundbooking');

Route::get('facteams','AdminController@viewFacultyteams');

Route::post('/addtopool','InstructorController@addtoPool');

Route::post('/addtoteam','InstructorController@addtoTeam');


Route::get('teamplayers/{game}', [
		'as'=>'teamplayers',
		'uses'=>'InstructorController@viewPlayers'
		]);

Route::get('rate/{value}', [
		'as'=>'rate',
		'uses'=>'InstructorController@rateMe'
		]);

Route::get('ground','GroundController@viewGrounds');
Route::post('ground','GroundController@bookGrounds');

Route::get('groundApprove/{id}',[
			'as'=>'groundApprove',
			'uses'=>'GroundController@approveGrounds'
			]);

Route::get('groundReject/{id}',[
			'as'=>'groundReject',
			'uses'=>'GroundController@rejectGrounds'
			]);

Route::get('confirmedapp','EntryformController@confirmedApp');

Route::post('playermessage','MailController@sendMessage');

Route::get('notice_requests','RequestController@noticeReq');


