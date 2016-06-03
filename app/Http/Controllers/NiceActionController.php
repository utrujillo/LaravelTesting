<?php

namespace App\Http\Controllers;

use \Illuminate\Http\Request;
use App\NiceAction;

class NiceActionController extends Controller
{

  public function getHome()
  {
    $actions = NiceAction::all();
    return view('home', ['actions' => $actions]);
  }

  public function getNiceAction( $action, $name = null )
  {
    return view('actions.'. $action, ['name' => $name]);
  }

  public function postNiceAction(Request $request)
  {
    $this->validate($request, [
      'nombre' => 'required|alpha'
    ]);
    return view( 'actions.recibeForm', ['request' => $request] );
  }

  private function transformName($nombre)
  {
    $prefix = 'KING ';
    return $prefix. strtoupper($nombre);
  }
}
