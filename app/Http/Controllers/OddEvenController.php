<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

 namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class OddEvenController extends Controller {

    public function __invoke(Request $request)
    {
		echo "Odd Even Controller";
	$n=$request->n;
	if($n % 2==0)
		return view("oddeven",['result'=>'Even']);
	else 
		return view("oddeven",['result'=>'Odd']);
    }

}
?>
