<?php

namespace App\Http\Controllers;

use \Illuminate\Http\Request;

class NiceActionController extends Controller
{
  public function getNiceAction( $action, $name = null )
  {
    return view('actions.'. $action, ['name' => $name]);
  }

  public function postNiceAction(Request $request)
  {

    if ( strlen($request['nombre']) > 0 ){
      $request['nombre'] = $this->transformName( $request['nombre'] );
      return view( 'actions.recibeForm', ['request' => $request] );
    }
    return redirect()->back();
  }

  private function transformName($nombre)
  {
    $prefix = 'KING ';
    return $prefix. strtoupper($nombre);
  }
}
