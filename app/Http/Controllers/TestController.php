<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
     public function show()
    {
        return "Test Controller Show";
    }
	 public function showparam($n)
    {
        return "Test Controller Show" . $n;
    }
}
