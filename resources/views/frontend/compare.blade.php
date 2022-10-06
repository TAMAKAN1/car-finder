@extends('frontend.mobile')
@section('content')
<div class="row text-right bg-white" dir="rtl" style="padding-top:50px;padding-bottom:50px">
 @if(!$cars->isEmpty())
 @foreach($cars as $car)
    <div class="col-md-6  " style="width:33%;float:left;overflow:none">
        <form action="{{route('car.delete.compare',$car->id)}}" method="POST">
            @csrf
            @method('delete')
            <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>

        </form>
        <div class="col-md-12 mt-4">
            <a href="{{route('carDetails',$car->id)}}">
                <img src="{{asset($car->outImages[0]->out ?? $car->insideImages[0]->in )}}" alt="" class="img-fluid">


            </a>
        </div>
        <div class="col-md-12">
            <small style="font-size:10px"><strong><a href="{{route('carDetails',$car->id)}}" class="text-dark">{{$car->car_name}}</a></strong></small>
        </div>
        <div class="col-md-12">
            <small style="font-size:10px"><strong>{{$car->category->category_name}}</strong></small>
        </div>
        <div class="col-md-12">
            <small style="font-size:10px"><strong>{{$car->modal}}</strong></small>
        </div>
        <div class="col-md-12">
            <small style="font-size:10px"><strong>{{$car->price}}</strong></small>
        </div>
        <div class="col-md-12">
            <small style="font-size:10px"><strong>{{$car->size}}</strong></small>
        </div>
        <div class="col-md-12">
            <small style="font-size:10px"><strong>{{$car->capacity}}</strong></small>
        </div>
        <div class="col-md-12">
            <small style="font-size:10px"><strong>{{$car->seats}}</strong></small>
        </div>
        <div class="col-md-12">
            <small style="font-size:10px"><strong>{{$car->dimention}}</strong></small>
        </div>
        <div class="col-md-12">
            <small style="font-size:10px"><strong>{{$car->fuel_card}}</strong></small>
        </div>
    </div>

    @endforeach
 @else
 <div class="col-md-12">
    <p class="text-center">لا يوجد عنصر مضاف...</p>
 </div>
 @endif
</div>
@endsection