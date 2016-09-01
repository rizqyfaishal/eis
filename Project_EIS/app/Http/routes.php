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

Route::get('/','PageController@index');
Route::get('/auth','PageController@auth');


Route::get('/meet-eis', 'PageController@meetEIS');

Route::get('/our-program','PageController@programs');

Route::get('/contact-us', 'PageController@contactUs');

Route::get('/ask-our-alumni','AskController@home');

Route::get('/social-media', function () {
    return view('social-media');
});

Route::get('/old', function () {
    return view('home_old');
});

Route::auth();

//start dashboard
Route::get('/dashboard', 'DashboardController@home');
Route::get('/dashboard/ganti-password', 'DashboardController@gantiPassword');
Route::post('/dashboard/ganti-password', 'DashboardController@update');
Route::get('/dashboard/edit-akun', 'DashboardController@editAkun');
Route::patch('/dashboard/edit-akun', 'AdminController@update');

Route::get('/dashboard/inbox','DashboardController@inbox');
Route::get('/dashboard/inbox/{id}/view','DashboardController@messageView');
Route::get('/dashboard/inbox/{id}/reply','DashboardController@messageReply');
Route::get('/dashboard/inbox/{id}/delete','DashboardController@messageDelete');

Route::get('/dashboard/members', 'DashboardController@membersManager');
Route::get('/dashboard/programs', 'DashboardController@programsManager');
Route::get('/dashboard/events/create', 'DashboardController@createEvent');
Route::get('/dashboard/article/create', 'DashboardController@createArticle');
Route::get('/dashboard/programs/create', 'DashboardController@createProgram');
Route::post('/dashboard/events/save', 'EventController@store');
Route::post('/dashboard/programs/save', 'ProgramController@save');
Route::post('/dashboard/article/save', 'ArticleController@store');
Route::get('/dashboard/events/{id}/edit', 'EventController@edit');
Route::get('/dashboard/programs/{id}/edit', 'ProgramController@edit');
Route::get('/dashboard/article/{id}/edit', 'ArticleController@edit');
Route::patch('/dashboard/events/{id}/edit', 'EventController@update');
Route::patch('/dashboard/programs/{id}/edit', 'ProgramController@update');
Route::patch('/dashboard/article/{id}/edit', 'ArticleController@update');
Route::get('/dashboard/events/{id}/delete/confirm', 'DashboardController@eventDeleteConfirm');
Route::get('/dashboard/article/{id}/delete/confirm', 'DashboardController@articleDeleteConfirm');
Route::get('/dashboard/program/{id}/delete/confirm', 'ProgramController@showDeleteConfirmation');
Route::delete('/dashboard/events/{id}/delete', 'EventController@delete');
Route::delete('/dashboard/article/{id}/delete', 'ArticleController@delete');
Route::delete('/dashboard/program/{id}/delete', 'ProgramController@delete');

Route::get('/dashboard/research', 'DashboardController@articleManager');

Route::get('/dashboard/event', 'DashboardController@eventManager');

Route::get('/dashboard/program','DashboardController@programsManager');

Route::get('/dashboard/eis-team', function () {
    return view('dashboard-admin-eisteam-manager');
});

Route::get('/dashboard/send', function () {
    return view('dashboard-admin-send');
});

Route::post('auth','Auth\AuthController@postLogin');
Route::post('auth-alumni','AlumniController@reg');
Route::post('auth-f-student','FutureStudentController@reg');
Route::post('auth-student','StudentController@reg');

Route::get('/api/unique/{email}','PageController@checkUnique');
Route::get('success','PageController@registerSuccess');
Route::get('/email',function (){
    \Illuminate\Support\Facades\Mail::send('home',['articles' => \App\Article::all(),'events' => \App\Event::all()],function($message){
        $message
            ->from('noreply@eisociety.org')
            ->to('rizqyfaishal@hotmail.com')
            ->subject('Welcome to Rizqy');
    });
});


Route::post('send','MessageController@sendMessage');
Route::get('events/{id}','EventController@show');
Route::get('programs/{id}','ProgramController@show');
Route::get('p/{hashcode}','AttachmentController@get');
Route::post('reply','MessageController@reply');
Route::post('message/{id}/delete','MessageController@delete');
Route::patch('user/{id}/accept','DashboardController@toggleStatusAccepted');
Route::patch('user/{id}/reject','DashboardController@toggleStatusRejected');
Route::delete('user/{id}/delete','DashboardController@delete');
Route::delete('alumni/{id}/delete','AlumniController@delete');
Route::delete('f-student/{id}/delete','FutureStudentController@delete');
Route::delete('student/{id}/delete','StudentController@delete');
Route::get('alumni/{id}/delete/confimation','DashboardController@deleteAlumniConfirmation');
Route::get('f-student/{id}/delete/confimation','DashboardController@deleteFStudentConfirmation');
Route::get('student/{id}/delete/confimation','DashboardController@deleteStudentConfirmation');

Route::get('/r-and-i/{id}','ArticleController@show');
Route::get('f/{hashcode}/delete/confirm','AttachmentController@showConfirmation');
Route::delete('f/{hashcode}/delete','AttachmentController@delete');
Route::get('ask/new','AskController@newPost');
Route::post('ask','AskController@save');
Route::get('ask/{id}','AskController@show');
Route::get('akun-suspended','PageController@akunSuspended');
Route::get('akun-rejected','PageController@akunRejected');
Route::post('send-email','DashboardController@sendMail');
Route::post('ask/{id}','AskController@saveComment');
Route::get('ask/{id}/json','PageController@getAskJSON');
Route::post('ask/{id}/saveComment','AskController@saveComment');