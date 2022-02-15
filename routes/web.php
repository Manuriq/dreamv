<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\QuestionController;

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

Route::view('/', 'pages.home')->name('home');

Route::group(['middleware' => 'guest'], function() {
    // Routes de connexion
    Route::get('/sign-in/discord', 'App\Http\Controllers\Auth\LoginController@discord')->name('login.discord');
    Route::get('/sign-in/discord/redirect', 'App\Http\Controllers\Auth\LoginController@discordRedirect');
});

Route::group(['middleware' => 'auth'], function() {
    
    Route::view('/panel/home', 'panel.home')->name('panel.home');
    Route::view('/panel/whitelist', 'panel.whitelist.index')->name('whitelist.index');

    // Questionnaire
    Route::get('/panel/whitelist/qcm', 'App\Http\Controllers\Whitelist\QcmController@index')->name('whitelist.qcm');
    Route::post('/panel/whitelist/qcm', 'App\Http\Controllers\Whitelist\QcmController@validator')->name('whitelist.validate');

    // Route de déconnexion
    Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');

    // Les routes Admins
    Route::group(['middleware' => ['admin'], 'prefix' => 'admin'], function() {
        Route::get('/', 'App\Http\Controllers\AdminController@index')->name('panel.admin.home');

        // Question
        Route::post('question/search', 'App\Http\Controllers\Admin\QuestionController@search')->name('question.search');
        Route::resource('question', 'App\Http\Controllers\Admin\QuestionController');

        // Réponses
        Route::post('answer/search', 'App\Http\Controllers\Admin\AnswerController@search')->name('answer.search');
        Route::resource('answer', 'App\Http\Controllers\Admin\AnswerController');

        // User
        Route::post('account/search', 'App\Http\Controllers\Admin\AccountController@search')->name('account.search');
        Route::resource('account', 'App\Http\Controllers\Admin\AccountController');
    });

});
