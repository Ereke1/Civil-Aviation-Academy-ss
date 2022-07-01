<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Config;

Auth::routes(['register' => false]);

// ADMIN
Route::group(['middleware' => 'auth', 'prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.'], function () {

	// HOME PAGE
	Route::resource('', 'HomeController');
	Route::group(['prefix' => 'department', 'namespace' => 'Department', 'as' => 'department.'], function () {
		Route::resources([
			'teacher' => 'DepartmentTeacherController',
		]);
	});

	// WEBSITE
	Route::group(['prefix' => 'website', 'namespace' => 'Website', 'as' => 'website.'], function () {
		Route::resources([
			'navigation' => 'NavigationController',
			'pages' => 'PageController',
			'news' => 'NewsController',
			'events' => 'EventController',
			'department' => 'DepartmentController',
			'department-page' => 'DepartmentPageController',
		]);

		// CK EDITOR
		Route::post('pages/upload', 'PageController@upload')->name('pages.upload');
		Route::post('department-page/upload', 'DepartmentPageController@upload')->name('department-page.upload');
		/* Route::post('images', 'ImageController@store')->name('images.store'); */
	});

	// WORKERS
	Route::group(['namespace' => 'Workers'], function () {
		Route::resources([
			'workers' => 'WorkersController',
			'workers-permissions' => 'WorkersPermissionsController',
		]);
	});

	// ENROLLEE
	Route::group(['prefix' => 'enrollee', 'namespace' => 'Enrollee', 'as' => 'enrollee.'], function () {
		Route::resources([
			'bachelor' => 'BachelorController',
			'master' => 'MasterController',
			'doctoral' => 'DoctoralController',
			'deleted' => 'DeletedController',
			'documents' => 'DocumentsController',
		]);

        //Documents
		Route::get('documents', 'DocumentsController@index')->name('documents.index');
		Route::get('documents/word-statements/{id}', 'DocumentsController@wordExportStatements')->name('documents.wordExportStatements');
		Route::get('documents/word-bilateralAgreement/{id}', 'DocumentsController@wordExportBilateralAgreement')->name('documents.wordExportBilateralAgreement');
		Route::get('documents/word-stateGrantAgreement/{id}', 'DocumentsController@wordExportStateGrantAgreement')->name('documents.wordExportStateGrantAgreement');
		Route::get('documents/word-applicationForCredits/{id}', 'DocumentsController@wordExportApplicationForCredits')->name('documents.wordExportApplicationForCredits');

		// General Report
		Route::get('greport', 'GReportController@index')->name('greport.index');
		Route::get('greport/pdf', 'GReportController@pdf')->name('greport.pdf');
		Route::get('greport/pdf/{created_at_from}/{created_at_to}', 'GReportController@pdf')->name('greport.pdf');
		// Reception Report
		Route::get('rreport', 'RReportController@index')->name('rreport.index');
		Route::get('rreport/pdf', 'RReportController@pdf')->name('rreport.pdf');
		Route::get('rreport/pdf/{created_at_from}/{created_at_to}', 'RReportController@pdf')->name('rreport.pdf');
	});

	// GRADUATE
	Route::group(['prefix' => 'graduate', 'namespace' => 'Graduate', 'as' => 'graduate.'], function () {
		Route::resource('graduates', 'GraduateController');
		Route::get('report', 'ReportController@index')->name('report.index');
		Route::get('pdf', 'ReportController@pdf')->name('report.pdf');
	});

	// VACCINATION
	Route::group(['prefix' => 'vaccination', 'namespace' => 'Vaccination', 'as' => 'vaccination.'], function () {
		Route::resource('', 'VaccinationController');
	});
});

// FRONTEND
Route::group(['namespace' => 'Front', 'as' => 'front.'], function () {
	// HOMEPAGE
	Route::get('', 'HomeController@index')->name('home');
	Route::get('news', 'NewsController@index')->name('news');
	Route::get('news/{slug}', 'NewsController@show')->name('news.show');
	Route::get('events', 'EventController@index')->name('events');
	Route::get('events/{slug}', 'EventController@show')->name('events.show');
	// ENROLLEE
	Route::group(['prefix' => 'enrollee', 'namespace' => 'Enrollee', 'as' => 'enrollee.'], function () {
		Route::resources([
			'bachelor' => 'BachelorController',
			'master' => 'MasterController',
			'doctoral' => 'DoctoralController',
		]);
		Route::get('', 'EnrolleeController@index');
	});


	// DEPARTMENT
	Route::group(['namespace' => 'Department'], function () {
		Route::resources([
			'departments' => 'DepartmentController',
		]);
		Route::group(['prefix' => 'departments', 'as' => 'department.'], function () {
			Route::get('{department}/{history}', 'DepartmentController@history')->name('history.index');
			Route::get('{department}/teachers', 'DepartmentController@teachers')->name('teachers.index');
			Route::get('{department}/teachers/{teacher}', 'DepartmentController@teacher')->name('teachers.show');
		});
	});

	// PAGES
	Route::get('{page}', 'PageController@show')->name('pages');

	// LANGUAGE SWITCHER
	Route::get('/language/{locale}', function ($locale) {
		app()->setLocale($locale);
		session()->put('locale', $locale);
		return redirect()->back();
	});
});
