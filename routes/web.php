<?php

use App\Dashboard;
use Illuminate\Support\Facades\Route;

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

Auth::routes();


Route::get('logout', function () {
    Auth::logout();
    return Redirect::to('login');
});

Route::get('/admintest', function () {
    return view('admin.listdemande');
});

Route::get('/', function () {
    $visiteur = Dashboard::AddVisiteur();
    return view('site.index')->with('visiteur', $visiteur);
})->name('site.index');

Route::get('demande-coworking', function () {
    return view('site.demande');
})->name('demande-coworking');
Route::get('workspace-coworky', function () {
    return view('site.workspace');
})->name('workspace-coworky');
Route::get('startups-coworky', function () {
    return view('site.startups');
})->name('startups-coworky');
Route::get('events-coworky', function () {
    return view('site.event');
})->name('events-coworky');

Auth::routes();


Route::get('logout', function () {
    Auth::logout();
    return Redirect::to('coworky/admin-login');
});

Route::post('checklogin', 'Auth\LoginController@connexion')->name('checklogin');


Route::post('news-letter', 'NewsLetterController@store')->name('news-letter');

Route::get('inscription-coworking', function () {
    return view('site.inscription');
})->name('inscription-coworking');

Route::get('login', function () {
    return view('site.login');
})->name('login');

Route::get('auth/social', 'Auth\LoginController@show')->name('social.login');
Route::get('oauth/{driver}', 'Auth\LoginController@redirectToProvider')->name('social.oauth');
Route::get('oauth/{driver}/callback', 'Auth\LoginController@handleProviderCallback')->name('social.callback');




Route::get('formation.detail', function () {
    return view('site.coursdetail');
})->name('formation.detail');

Route::get('learn-coworking', function () {
    return view('apprenant.index');
})->name('learn-coworking');

Route::get('cart-coworking', function () {
    return view('apprenant.cart');
})->name('cart-coworking');

Route::get('payment-coworking', function () {
    return view('apprenant.payment');
})->name('payment-coworking');

Route::get('coworky-contact', function () {
    return view('site.contact');
})->name('coworky-contact');


//Route Inscription :
Route::post('save-user', 'HomeController@register')->name('save-user');
Route::post('save-contact', 'ContactController@store')->name('save-contact');
Route::post('save-demande', 'DemandeController@store')->name('save-demande');
Route::group(['middleware' => 'auth:admin'], function () {
// Dashboard Routes :
    Route::group(
        ['prefix' => 'coworky'],
        function () {


            //Dashboard :
            Route::get('admin-dashboard', 'dashboardController@index')->name('admin-dashboard');
            //Pages :
            Route::get('admin-workspace', 'adminController@create')->name('admin-workspace');
            // : Demande

            Route::post('del-demande', 'DemandeController@destroy')->name('del-demande');
            Route::get('admin-list-demande', 'DemandeController@index')->name('admin-list-demande');
            Route::get('admin-detail-demande/{id}', 'DemandeController@show')->name('admin-detail-demande');
            //Ressources :
            Route::get('admin-list-ressources', 'RCoworkingController@index')->name('admin-list-ressources');
            Route::get('admin-add-ressource', 'RCoworkingController@create')->name('admin-add-ressource');
            Route::post('save-ressource', 'RCoworkingController@store')->name('save-ressource');
            Route::post('del-ressource', 'RCoworkingController@destroy')->name('del-ressource');
            Route::post('admin-edit-ressource/update-module', 'RCoworkingController@update')->name('update-ressource');
            Route::get('admin-edit-ressource/{id}', 'RCoworkingController@edit')->name('admin-edit-ressource');
            //Réservation :
            Route::get('admin-list-reservation', 'ReservationController@index')->name('admin-list-reservation');
            Route::get('admin-add-reservation', 'ReservationController@create')->name('admin-add-reservation');
            Route::post('save-reservation', 'ReservationController@store')->name('save-reservation');
            Route::post('del-reservation', 'ReservationController@destroy')->name('del-reservation');
            Route::post('admin-edit-reservation/update-module', 'ReservationController@update')->name('update-reservation');
            Route::get('admin-edit-reservation/{id}', 'ReservationController@edit')->name('admin-edit-reservation');
            //Apprenants :
            Route::get('admin-list-apprenant', 'ApprenantController@index')->name('admin-list-apprenant');
            Route::get('admin-add-apprenant', 'ApprenantController@create')->name('admin-add-apprenant');
            Route::post('save-apprenant', 'ApprenantController@store')->name('save-apprenant');
            Route::post('del-apprenant', 'ApprenantController@destroy')->name('del-apprenant');
            Route::post('admin-edit-apprenant/update-module', 'ApprenantController@update')->name('update-apprenant');
            Route::get('admin-edit-apprenant/{id}', 'ApprenantController@edit')->name('admin-edit-apprenant');
//catalogues :
            Route::get('admin-list-catalogues', 'CatalogueController@index')->name('admin-list-catalogues');
            Route::get('admin-add-theme', 'CatalogueController@create')->name('admin-add-theme');
            Route::post('save-theme', 'CatalogueController@store')->name('save-theme');
            Route::post('del-theme', 'CatalogueController@destroy')->name('del-theme');
            Route::post('admin-edit-theme/update-theme', 'CatalogueController@update')->name('update-theme');
            Route::get('admin-edit-theme/{id}', 'CatalogueController@edit')->name('admin-edit-theme');
//Modules :
            Route::get('admin-list-modules', 'ModuleController@index')->name('admin-list-modules');
            Route::get('admin-add-module', 'ModuleController@create')->name('admin-add-module');
            Route::post('save-module', 'ModuleController@store')->name('save-module');
            Route::post('del-module', 'ModuleController@destroy')->name('del-module');
            Route::post('admin-edit-module/update-module', 'ModuleController@update')->name('update-module');
            Route::post('admin-edit-module/update-theme', 'ModuleController@update')->name('update-module');
            Route::get('admin-edit-module/{id}', 'ModuleController@edit')->name('admin-edit-module');
            Route::post('uploadimage', 'ModuleController@uploadimage')->name('uploadimage');
            Route::post('admin-edit-module/{id}/uploadimageupdate', 'ModuleController@uploadimage')->name('uploadimageupdate');

// Formations :

            Route::get('admin-list-formations', 'FormationController@index')->name('admin-list-formations');
            Route::get('admin-add-formation', 'FormationController@create')->name('admin-add-formation');
            Route::post('save-formation', 'FormationController@store')->name('save-formation');
            Route::post('del-formation', 'FormationController@destroy')->name('del-formation');
            Route::post('admin-edit-formation/update-theme', 'FormationController@update')->name('update-formation');
            Route::get('admin-edit-formation/{id}', 'FormationController@edit')->name('admin-edit-formation');

//Formateurs :
            Route::get('admin-list-formateurs', 'FormateurController@index')->name('admin-list-formateurs');
            Route::get('admin-add-formateur', 'FormateurController@create')->name('admin-add-formateur');
            Route::post('save-formateur', 'FormateurController@store')->name('save-formateur');
            Route::post('del-formateur', 'FormateurController@destroy')->name('del-formateur');
            Route::post('admin-edit-formateur/update-theme', 'FormateurController@update')->name('update-formateur');
            Route::get('admin-edit-formateur/{id}', 'FormateurController@edit')->name('admin-edit-formateur');

            //Lessons :
            Route::get('admin-list-lessons', 'LessonController@index')->name('admin-list-lessons');
            Route::get('admin-add-lesson', 'LessonController@create')->name('admin-add-lesson');
            Route::post('save-lesson', 'LessonController@store')->name('save-lesson');
            Route::post('del-lesson', 'LessonController@destroy')->name('del-lesson');
            Route::post('admin-edit-lesson/update-theme', 'LessonController@update')->name('update-lesson');
            Route::get('admin-edit-lesson/{id}', 'LessonController@edit')->name('admin-edit-lesson');

        }
    );
});

Route::group(['prefix'=>'coworky'], function () {
// Dashboard Routes :
    Route::post('CheckLogin', 'Auth\LoginController@CheckLogin')->name('CheckLogin');
    Route::get('admin-login', 'HomeController@index')->name('admin-login');
  //  Route::post('login', 'AdminController@login')->name('admin.login');


});