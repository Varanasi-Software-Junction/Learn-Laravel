<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProtectController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


public function currentuser(Request $request)
{
$user = Auth::user();
$id = Auth::id();
$email = $user->email;
    return "Current User" . $user . $id . $email;
	}


public function protectget(Request $request)
    {return view('bookinsert');
	}
public function protectpost(Request $request)
    {return view('bookinsert');
	}


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
}
