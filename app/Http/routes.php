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

Route::get('/', function () {
    return view('home');
})->name('home');



Route::group( ['middleware' => ['web']], function(){

  Route::get('/',[
    'uses' => 'NiceActionController@getHome',
    'as' => 'home'
  ]);
  // Ruta que recibe de parametro o no el atributo name, en la vista
  // puede ser utilizado como {{ $name }}
  Route::group(['prefix' => 'do'], function(){

    Route::get('greet/{name?}', function($name = null) {
      return view( 'actions.greet', ['name' => $name] );
    })->name('greet');

    Route::get('form', function () {
        return view('actions.form');
    })->name('formPrueba');

    // No pude hechar a andar en $request['action'], me daba null
    Route::post('recibeForm', function (\Illuminate\Http\Request $request) {
      if ( strlen($request['nombre']) > 0 ){
        return view( 'actions.recibeForm', ['request' => $request] );
      }
      return redirect()->back();
    })->name('recibeForm');

    // Usando la ruta, pero ahora enviando valores a un controlador
    Route::get('/{action}/{name?}', [
      'uses' => 'NiceActionController@getNiceAction',
      'as' => 'niceaction'
    ]);

    Route::post('/form',[
      'uses' => 'NiceActionController@postNiceAction',
      'as' => 'recibeForm'
    ]);

  });

});
