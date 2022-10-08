<?php

namespace App\Http\Controllers;

use Cart;
use App\Car;
use App\Category;
use App\News;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Collection;

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
    public function profile()
    {
        return view('backend.profile.profile');
    }
    public function updateProfile(Request $request, User $user)
    {
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


    public function news()
    {
        return view('frontend.news');
    }
    public function mobileCars()
    {
        $cart_items = Cart::getContent();

        return view('frontend.cars', compact('cart_items'));
    }
    public function car_details(Car $car)
    {
        return view('frontend.car_details', compact('car'));
    }
    public function news_details(News $new)
    {
        return view('frontend.newsDetails', compact('new'));
    }

    public function search(Request $request)
    {

        $cart_items = Cart::getContent();
        $cars = Car::where('car_name', 'LIKE', '%' . $request->search . '%')->orWhere('modal', 'LIKE', '%' . $request->search . '%')->orWhere('size', 'LIKE', '%' . $request->search . '%')->orWhere('capacity', 'LIKE', '%' . $request->search . '%')->orWhere('fuel_card', 'LIKE', '%' . $request->search . '%')->orWhere('seats', 'LIKE', '%' . $request->search . '%')->orWhere('price', 'LIKE', '%' . $request->search . '%')->orWhere('dimention', 'LIKE', '%' . $request->search . '%')->orWhereHas('category', function ($query) use ($request) {
            $query->where('category_name', 'like', "%{$request->search}%");
        })->get();
        return view('frontend.search', compact('cart_items', 'cars'));
    }
    public function companywish(Category $category)
    {
        $cart_items = Cart::getContent();
        return view('frontend.categoryWisecar', compact('category', 'cart_items'));
    }
    public function compare()
    {
        return view('frontend.compare');
    }

    public function comparecard(Request $request, Car $car)
    {
        Cart::add(array(
            'id' => $car->id,
            'name' => $car->car_name,
            'price' => 1,
            'quantity' => 1,
        ));
        toastr()->success('مضاف');
        return redirect()->route('cars.show');
    }

    public function showCart()
    {
        $cart['count'] = Cart::getContent()->count();
        $cars = new Collection();
        $cart_items = Cart::getContent();
        foreach ($cart_items as $item) {
            $car = Car::find($item->id);
            $cars->push($car);
        }
        return view('frontend.compare', compact('cars', 'cart'));
    }
    public function destroyCart(Car $car)
    {
        Cart::remove($car->id);
        toastr()->success('إزالة');
        return redirect()->back();
    }


    public function Newssearch(Request $request)
    {

        $news = News::where('subject', 'LIKE', '%' . $request->search . '%')->orWhere('date', 'LIKE', '%' . $request->search . '%')->get();
        return view('frontend.newsResult', compact('news'));
    }
    public function fliter(Request $request)
    {
        $cart_items = Cart::getContent();
        if ($request->company_name && $request->car_name && $request->price && $request->modal && $request->capacity) {
            $cars = Car::where('car_name', $request->car_name)->where('price', 'LIKE', '%' . $request->price . '%')->where('modal', 'LIKE', '%' . $request->modal . '%')->where('capacity', 'LIKE', '%' . $request->capacity . '%')->orWhereHas('category', function ($query) use ($request) {
                $query->where('category_name', 'like', "%{$request->company_name}%");
            })->get();
        } 
        elseif($request->company_name && $request->car_name && $request->modal && $request->capacity ||   $request->price ){
            $cars=  Car::where('car_name', $request->car_name)->where('modal', $request->modal)->where('capacity',$request->capacity)->where('price',$request->price)->whereHas('category', function ($query) use ($request) {
                $query->where('category_name', 'like', "%{$request->company_name}%");
            })->get();
        }
        elseif($request->company_name && $request->car_name && $request->modal && $request->price  ){
            $cars=  Car::where('car_name', $request->car_name)->where('modal', $request->modal)->where('price',$request->price)->whereHas('category', function ($query) use ($request) {
                $query->where('category_name', 'like', "%{$request->company_name}%");
            })->get();
        }
   
        elseif($request->company_name && $request->car_name && $request->modal  ){
            $cars=  Car::where('car_name', $request->car_name)->where('modal', $request->modal)->whereHas('category', function ($query) use ($request) {
                $query->where('category_name', 'like', "%{$request->company_name}%");
            })->get();
        }


     
        elseif($request->company_name && $request->car_name){
            $cars=  Car::where('car_name', $request->car_name)->whereHas('category', function ($query) use ($request) {
                $query->where('category_name', 'like', "%{$request->company_name}%");
            })->get();
        }
   
        elseif ($request->company_name) {
            $cars = Car::WhereHas('category', function ($query) use ($request) {
                $query->where('category_name', 'like', "%{$request->company_name}%");
            })->get();
        } 
        elseif($request->car_name){
          $cars=  Car::where('car_name', $request->car_name)->get();
        }
        elseif($request->price){
            $cars=  Car::where('price', $request->price)->get();
          }
          elseif($request->capacity){
            $cars=  Car::where('capacity', $request->capacity)->get();
          }
          elseif($request->modal){
            $cars=  Car::where('modal', $request->modal)->get();
          }
      
        else {
            $cars = Car::where('car_name', 'LIKE', '%' . $request->car_name . '%')->orWhere('modal', 'LIKE', '%' . $request->modal . '%')->orWhere('capacity', 'LIKE', '%' . $request->capacity . '%')->orWhere('price', 'LIKE', '%' . $request->price . '%')->orWhereHas('category', function ($query) use ($request) {
                $query->where('category_name', 'like', "%{$request->company_name}%");
            })->get();
        }

        return view('frontend.fillter', compact('cart_items', 'cars'));
    }
}
