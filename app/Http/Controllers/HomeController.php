<?php

namespace App\Http\Controllers;

use App\Car;
use App\News;
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
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

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


    //mobile

 
    public function news(){
        return view('frontend.news');
    }
    public function mobileCars(){
        return view('frontend.cars');
    }
    public function car_details(Car $car){
        return view('frontend.car_details',compact('car'));
    }
    public function news_details(News $new){
        return view('frontend.newsDetails',compact('new'));
    }

    public function search(){
        return view('frontend.search');
    }
    public function companywish(){
        return view('frontend.categoryWisecar');
    }
    public function compare(){
     return view('frontend.compare');
    }
}
