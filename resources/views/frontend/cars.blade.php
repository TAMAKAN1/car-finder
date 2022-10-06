<?php

use App\Car;

$cars = Car::orderBy('id', 'desc')->get();


?>
@extends('frontend.mobile')
@section('content')
@include('frontend.searchforcar')
@include('frontend.company')

<section class="featured  p-2  " dir="rtl" style="background:#f1f1f1">
    <div class="container">

        <div class="row featured__filter">
            <div class="row" class="" style="margin-bottom:20%">
                @foreach($cars as $car)

                <div class="col-md-12  bg-white  mt-2 mb-2 text-right" style="">
                    <div class="row">
                        <div class="col-md-6 mt-4" style="width: 50%;float:left">
                            <p class="m-0" style="font-size:14px"><a href="{{route('carDetails',$car->id)}}" class="text-dark"><strong>{{$car->car_name}}</strong></a></p>
                            <p class="m-0" style="font-size:13px"><strong>{{$car->modal}}</strong></p>
                            <p class="m-0" style="font-size:13px"><strong>{{$car->price}}</strong></p>
                            <p>
                        @foreach ($cart_items as $c) 
                            @if($c->id==$car->id)
                             <a href="{{route('cars.show')}}"><small style="font-size:10px;text-decoration:underline">عنصر مقارنة</small></a>
                         
                            @endif
                          
                            @endforeach 
                            <form action="{{route('compare.add',$car->id)}}" method="POST">
                                @csrf
                                <button type="submit" class="m-0 " style="color:#0aab96;font-size: 18px;border:none;background:none"><i title="مقارنة" class="fa fa fa-retweet"></i></button>
                            </form>
                            
                            </p>
                           
                        </div>
                        <div class="col-md-6 mt-4 mb-2" style="width: 50%;float:left">
                            <a href="{{route('carDetails',$car->id)}}"> <img src="{{$car->outImages[0]->out}}" alt="img-fluid" style="border-radius:5%"></a>

                        </div>

                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</section>

@endsection