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
}
