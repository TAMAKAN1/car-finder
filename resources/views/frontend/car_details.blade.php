@extends('frontend.mobile')
@section('content')
<style>

</style>
<div class="row" style="padding-bottom:25%">
    @if(!$car->outImages->isEmpty())
    <div class="col-md-12 m-2">

        <div id="carouselExampleControls" class="carousel slide mt-4" data-ride="carousel">
            <?php $i = 1; ?>

            <div class="carousel-inner">
                <div class="col-md-12 text-right">
                    <label for=""><strong>صور من الخارج</strong></label>
                </div>
                @foreach($car->outImages as $image)

                <div class="carousel-item  {{($i==1)?'active':''}} ">
                    <img src="{{$image->out}}" class="d-block w-100" alt="..." class="img-fluid" style="border-radius:10%">
                </div>
                <?php
                $i++
                ?>
                @endforeach
                <ul class="carousel-indicators">
                    <?php
                    $d = 0;
                    ?>
                    @foreach($car->outImages as $image)
                    <li data-target=".carousel" data-slide-to="{{$d}}" class="{{($d==$d)?'active':''}}"></li>
                    <?php
                    $d++
                    ?>
                    @endforeach
                </ul>
            </div>

        </div>
    </div>

    @endif
    @if(!$car->insideImages->isEmpty())
    <div class="col-md-12  m-2">

        <div id="carouselExampleControls" class="carousel slide mt-4" data-ride="carousel">
            <?php $i = 1; ?>

            <div class="carousel-inner">
                <div class="col-md-12 text-right">
                    <label for=""><strong>صور المركبة من الداخل</strong></label>
                </div>
                @foreach($car->insideImages as $image)

                <div class="carousel-item  {{($i==1)?'active':''}} ">
                    <img src="{{$image->in}}" class="d-block w-100" alt="..." class="img-fluid" style="border-radius:10%">
                </div>
                <?php
                $i++
                ?>
                @endforeach
                <ul class="carousel-indicators">
                    <?php
                    $s = 0;
                    ?>
                    @foreach($car->insideImages as $image)
                    <li data-target=".carousel" data-slide-to="{{$s}}" class="{{($s==$s)?'active':''}}"></li>
                    <?php
                    $s++
                    ?>
                    @endforeach
                </ul>
            </div>

        </div>
    </div>

    @endif

    @if(!$car->engineImages->isEmpty())
    <div class="col-md-12  m-2">

        <div id="carouselExampleControls" class="carousel slide mt-4" data-ride="carousel">
            <?php $i = 1; ?>

            <div class="carousel-inner">
                <div class="col-md-12 text-right">
                    <label for=""><strong></strong><strong>صورة المحرك</strong></label>
                </div>
                @foreach($car->engineImages as $image)

                <div class="carousel-item  {{($i==1)?'active':''}} ">
                    <img src="{{$image->enngine}}" class="d-block w-100" alt="..." class="img-fluid" style="border-radius:10%">
                </div>
                <?php
                $i++
                ?>
                @endforeach
                <ul class="carousel-indicators">
                    <?php
                    $q = 0;
                    ?>
                    @foreach($car->engineImages as $image)
                    <li data-target=".carousel" data-slide-to="{{$q}}" class="{{($q==$q)?'active':''}}"></li>
                    <?php
                    $q++
                    ?>
                    @endforeach
                </ul>
            </div>

        </div>
    </div>

    @endif

    <div class="col-md-12 mt-4 p-4 ml2 mr-2 bg-white" dir="rtl">
        <div class="row">
            <div class="col-md-12 ">
                <h4><strong>تفاصيل:</strong></h4>
                <hr>
            </div>
            <div class="col-md-6 tex-right " style=" width:70%;float:left;overflow:none">
                <div class="col-md-12">
                    <label for=""><strong>اسم المركبة : </strong></label>
                    <span class="">{{$car->car_name}}</span>
                </div>
                <div class="col-md-12">
                    <label for=""><strong>السعر يبدأ من : </strong></label>
                    <span class="">{{$car->price}}</span>
                </div>
            </div>
            <div class="col-md-6 text-right" style=" width:30%;float:left;overflow:none">
                <div class="col-md-12">
                    <p class="text-dark"><strong>{{$car->modal}}</strong></p>

                </div>
            </div>
            <div class="col-md-12">
                <hr>

                <label for=""><strong>الشركة المصنعة :</strong></label>
                <span>{{$car->category->category_name}}</span>
                <hr>
            </div>
            <div class="col-md-12">

                <label for=""><strong>فئة المركبة :</strong></label>
                <span>{{$car->size}}</span>
                <hr>
            </div>
            <div class="col-md-12">

                <label for=""><strong>سعة المحرك:</strong></label>
                <span>{{$car->capacity}}</span>
                <hr>
            </div>

            <div class="col-md-12">

                <label for=""><strong>عدد المقاعد :</strong></label>
                <span>{{$car->seats}}</span>
                <hr>
            </div>
            <div class="col-md-12">

                <label for=""><strong> بطاقة الوقود: </strong></label>
                <span>{{$car->fuel_card}}</span>
                <hr>
            </div>
            <div class="col-md-12">

                <label for=""><strong> تفاصيل : </strong></label><br>
                <span class="text-justify">{{$car->description}}</span>
            </div>
            <div class="col-md-12">
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
        </div>
    </div>

</div>
@endsection
@section('script')
<script>
    $(document).ready(function() {
        $('.carousel').carousel({
            dots: true,

        })
        $('.c').carousel({
            dots: true,

        })
    });
</script>
@endsection