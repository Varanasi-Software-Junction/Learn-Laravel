
<?php
use Illuminate\Http\Request;
use App\Book;

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


Route::get('protected', function () {
    // Only authenticated users may enter...
	Auth::logout();
})->middleware('auth');

Route::get('/login', array('as' => 'login', function()
{
	
	
		return "Please login here" ;
}));



Route::get('/dologin', function ()
{
	$email="1";
	$b=Auth::loginUsingId($email, TRUE);
	
		return "Do Login $b" ;
});







Route::get('/test', 'TestController@show');
Route::get('/testparam/{n}', 'TestController@showparam');

Route::get('/controllerform/', 'TestController@addnumbers');
Route::post('/controllerform/', 'TestController@postaddnumbers');

Route::get('/bookinsert', 'BookController@index');
Route::post('/reportinsert', 'BookController@insert');

Route::get('/protected/', 'ProtectController@protectget');
Route::post('/protected/', 'ProtectController@protectpost');

Route::get('/login', 'SessionsController@create')->name('login');


Route::get('/query', function ()
{
$data=Book::all();
		return view('searchall',['data'=>$data]);
});

Route::get('/where', function ()
{
$data = Book::where('subject', 'Recursion')->where('price','123')->orderby('price')->get();
		return view('searchall',['data'=>$data]);
});




Route::get('/loop', function ()
{
$arr=array(1,2,3,4);
	return view("loop",['arr'=>$arr]);
});



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
Route::get('/oddeven', 'OddEvenController')->middleware('oddeven');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
