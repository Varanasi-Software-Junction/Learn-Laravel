
<?php
use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', 'TestController@show');
Route::get('/testparam/{n}', 'TestController@showparam');

Route::get('/controllerform/', 'TestController@addnumbers');
Route::post('/controllerform/', 'TestController@postaddnumbers');




Route::get('/webform', function ()
{
	$n1=0;
	$n2=0;
	$sum=0;
	return view("webform",['n1' =>$n1,'n2' =>$n2,'sum'=>$sum]);
});
Route::post('/webform', function (Request $request)
{
	$n1=$request['n1'];
	$n2=$request['n2'];
	$sum=$n1+$n2;
	return view("webform",['n1' =>$n1,'n2' =>$n2,'sum'=>$sum]);
});

