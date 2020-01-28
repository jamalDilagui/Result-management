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
/* Welcome */
Route::get('/', 'WelcomeController@index');
Route::post('/getStudent', 'WelcomeController@getStudent');
Route::post('/resultat', 'WelcomeController@yourResultat');

Auth::routes();

/* Classe */

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/classe', 'ClasseController@index');

Route::get('/createClasse', 'ClasseController@create');

Route::post('/addClasse', 'ClasseController@store');

Route::get('/editClasse/{id}', 'ClasseController@edit');

Route::put('/updateClasse/{id}', 'ClasseController@update');

Route::get('/deleteClasse/{id}', 'ClasseController@destroy');

/* Student */

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/student', 'StudentController@index');

Route::get('/createStudent', 'StudentController@create');

Route::post('/addStudent', 'StudentController@store');

Route::get('/editStudent/{id}', 'StudentController@edit');

Route::put('/updateStudent/{id}', 'StudentController@update');

Route::get('/deleteStudent/{id}', 'StudentController@destroy');


/* Subject */

Route::get('/subject', 'SubjectController@index');

Route::get('/createSubject', 'SubjectController@create');

Route::post('/addSubject', 'SubjectController@store');

Route::get('/editSubject/{id}', 'SubjectController@edit');

Route::put('/updateSubject/{id}', 'SubjectController@update');

Route::get('/deleteSubject/{id}', 'SubjectController@destroy');

/* Resultat */

Route::get('/resultat', 'ResultatController@index');

Route::get('/createResultat', 'ResultatController@create');

Route::post('/addResultat', 'ResultatController@store');

Route::get('/editResultat/{id}', 'ResultatController@edit');

Route::put('/updateResultat/{id}', 'ResultatController@update');

Route::get('/deleteResultat/{id}', 'ResultatController@destroy');

Route::post('/getStudent', 'ResultatController@getStudent');

/* Exam */

Route::get('/exam', 'ExamController@index');

Route::get('/createExam', 'ExamController@create');

Route::post('/addExam', 'ExamController@store');

Route::get('/editExam/{id}', 'ExamController@edit');

Route::put('/updateExam/{id}', 'ExamController@update');

Route::get('/deleteExam/{id}', 'ExamController@destroy');