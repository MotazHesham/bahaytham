<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'Frontend\HomeController@index')->name('home');



Route::group(['as' => 'frontend.', 'namespace' => 'Frontend'], function () {

    Route::get('aboutus', 'HomeController@aboutus')->name('aboutus');
    Route::get('contact', 'HomeController@contact')->name('contact');
    Route::post('contact','HomeController@store')->name('contact.store');
    Route::get('request_service', 'HomeController@request_service')->name('request_service');
    Route::post('request_service', 'HomeController@store_request_service')->name('request_service.store');
    Route::get('project', 'HomeController@project')->name('project');
    Route::get('projects', 'HomeController@projects')->name('projects');
    Route::get('service', 'HomeController@service')->name('service');
    Route::get('services', 'HomeController@services')->name('services');
});
