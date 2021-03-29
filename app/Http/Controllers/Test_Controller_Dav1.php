<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Test_Controller_Dav1 extends Controller
{
    public function index(){

        return view('test');
    }
    public function calculate(Request $request){

        (int)$a = $request -> numberOne;
        (int)$b = $request -> numberTwo;
        $Action = $request->action;


          if ($Action =='division') {
              return ($a / $b);
          }
          if ($Action =='plus') {
              return ($a + $b);
          }
          if ($Action =='minus') {
              return ($a - $b);
          }
          if ($Action =='multiply') {
              return ($a * $b);
          }

    }

}
