<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
class TestController extends Controller
{
     public function show()
    {
        return "Test Controller Show";
    }
	 public function showparam($n)
    {
        //return "Test Controller Show" . $n;
		if($n % 2==0)
		return Response::view("even");
	else
		return Response::view("odd");
    }
	 public function addnumbers(Request $request)
    {
        $n1=0;
	$n2=0;
	$sum=0;
	return view("controllerform",['n1' =>$n1,'n2' =>$n2,'sum'=>$sum]);
    }
	
	 public function postaddnumbers(Request $request)
    {
        $n1=$request['n1'];;
	$n2=$request['n2'];
	$sum=$n1+$n2;
	return view("controllerform",['n1' =>$n1,'n2' =>$n2,'sum'=>$sum]);
    }
}
