<?php

Auth::routes();

Route::get('/', 'HomeController@index');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::group(['prefix' => 'events'], function () {
        Route::get('/{event}', 'EventController@admin');
        Route::get('/', 'EventController@adminIndex');
        Route::post('/', 'EventController@store');
        Route::patch('/{event}', 'EventController@update');
        Route::delete('/{event}', 'EventController@destroy');
    });

    Route::group(['prefix' => 'competitions'], function () {
        Route::get('/{competition}', 'CompetitionController@admin');
        Route::get('/', 'CompetitionController@adminIndex');
        Route::post('/', 'CompetitionController@store');
        Route::patch('/{competition}', 'CompetitionController@update');
        Route::delete('/{competition}', 'CompetitionController@destroy');
    });

    Route::group(['prefix' => 'accounts'], function () {
        Route::get('', 'AccountController@index');
    });

    Route::get('/news', 'NewsController@index');
    Route::post('/news', 'NewsController@store');

    Route::group(['prefix' => 'documents'], function () {
        Route::get('/', 'DocumentsAdministratorController@index');
        Route::post('/', 'DocumentsAdministratorController@store');
        Route::delete('/{document}', 'DocumentsAdministratorController@destroy');
        Route::post('/{document}', 'DocumentsAdministratorController@update');
    });
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'superadmin']], function () {
    Route::post('/accounts/promote/{user}', 'AccountController@promote');
    Route::post('/accounts/demote/{user}', 'AccountController@demote');
});

Route::group(['prefix' => 'documents', 'middleware' => 'auth'], function () {
    Route::get('/', 'DocumentController@index');
});

Route::group(['prefix' => 'events', 'middleware' => 'auth'], function () {
    Route::get('/', 'EventController@index');
    Route::get('{event}', 'EventController@show');
    Route::post('{event}/registrations', 'EventRegistrationController@store');
    Route::post('{event}/registrations/{registration}', 'EventRegistrationController@update');
});

Route::group(['prefix' => 'competitions', 'middleware' => 'auth'], function () {
    Route::get('/', 'CompetitionController@index');
    Route::get('{competition}', 'CompetitionController@show');
    Route::post('{competition}/registrations', 'CompetitionRegistrationController@store');
    Route::post('{competition}/registrations/{registration}', 'CompetitionRegistrationController@update');
});

Route::group(['prefix' => 'profile', 'middleware' => 'auth'], function () {
    Route::get('/', 'ProfileController@index');
    Route::post('/name', 'ProfileController@updateName');
    Route::post('/email', 'ProfileController@updateEmail');
    Route::post('/password', 'ProfileController@updatePassword');
});

Route::group(['prefix' => 'auth'], function () {
    Route::post('google', 'AuthController@google');
    Route::post('microsoft', 'AuthController@microsoft');
});
