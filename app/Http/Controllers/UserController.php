<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users=User::all();
        return view('users.index',compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required',
        ]);

        $pass=bcrypt($request->password);

        $user=User::create([
           'name'=>$request->name,
           'email'=>$request->email,
           'password'=>$pass,
        ]);

        if ($user)
        {
            return response()->json([
                'status'=>200,
                'student'=> $user,
                'message'=>toastr()->success('Data Saved Successfully!'),
            ]);
        }

        return redirect()->route('index');
    }
}
