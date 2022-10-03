<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function profile(){
        return view('backend.profile.profile');
    }
    public function updateProfile( Request $request, User $user){
        $user->update([
            'name' => $request['name'],
            'email' => $request['email'],
          
        ]);
        
        if ($request->password != null) {
                $user->password = Hash::make($request['password']);
                $user->save();
            }
         toastr()->success('محدث.');
        return redirect()->back();
    }
}
