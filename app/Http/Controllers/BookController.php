<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
class BookController extends Controller
{
	public function index(Request $request)
    {return view('bookinsert');
	}
	public function insert(Request $request)
    {
    try {
		
			
		$newbook = new Book;
$newbook->bookname = $request->bookname;
$newbook->subject = $request->booksubject;
$newbook->price = $request->bookprice;
$newbook->save();
return view('bookinsert',['result' => 'Success','newbook'=>$newbook,'newbookno'=>$newbook->bookno]);
		}
		catch(Exception $e)
		{
			return view('bookinsert',['result' => 'Error']);
		}
}
}
