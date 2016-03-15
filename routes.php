<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//Normal Routes (Mixed)
Route::get('/', array("uses"=>"HomeController@index","as"=>"home"));
Route::get('/registerCollegeAjax', array("uses"=>"HomeController@registerCollegeAjax","as"=>"register.collegeajax"));
Route::get('/collegeTerms', array("uses"=>"HomeController@collegeTerms","as"=>"register.college.terms"));
Route::get('/registerCollege', array("uses"=>"HomeController@registerCollege","as"=>"register.college"));

//------------------------------------------------------------------------------------------------------------------------

//Student Routes
Route::get('/student.registration', array("uses"=>"StudentController@index","as"=>"student.registration"));
Route::get('/registerStudent', array("uses"=>"HomeController@registerStudent","as"=>"register.student"));

//------------------------------------------------------------------------------------------------------------------------

//College Routes
Route::get('/college.dashboard', array("uses"=>"CollegeController@index","as"=>"college.dashboard"));

//------------------------------------------------------------------------------------------------------------------------

//Auto-Generated Routes
Route::resource('collegeRegistrations', 'CollegeRegistrationsController',array('except'=>array('show','edit','update')));
Route::resource('student', 'StudentController',array('except'=>array('show','edit','update')));
//------------------------------------------------------------------------------------------------------------------------