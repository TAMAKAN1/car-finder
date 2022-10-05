@extends('frontend.mobile')
@section('content')
<style>

</style>
<div class="row" style="padding-bottom:25%">
    @if(!$new->images->isEmpty())
    <div class="col-md-12 m-2">

        <div id="carouselExampleControls" class="carousel slide mt-4" data-ride="carousel">
            <?php $i = 1; ?>

            <div class="carousel-inner">
                <div class="col-md-12 text-right">
                    <label for=""><strong>صور من </strong></label>
                </div>
                @foreach($new->images as $image)

                <div class="carousel-item  {{($i==1)?'active':''}} ">
                    <img src="{{$image->image}}" class="d-block w-100" alt="..." class="img-fluid" style="border-radius:10%">
                </div>
                <?php
                $i++
                ?>
                @endforeach
                <ul class="carousel-indicators">
                    <?php
                    $d = 0;
                    ?>
                    @foreach($new->images as $image)
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



    <div class="col-md-12 mt-4 p-4 ml2 mr-2 bg-white" dir="rtl">
        <div class="row">
        
            <div class="col-md-12">

                <label for=""><strong>موضوعات :</strong></label> <br>
                <span>{{$new->subject}}</span>
                <hr>
            </div>
            <div class="col-md-12">

                <label for=""><strong>تاريخ النشر :</strong></label> <br>
                <span>{{$new->date}}</span>
                <hr>
            </div>
            <div class="col-md-12">

                <label for=""><strong>لتفاصيل:</strong></label> <br>
                <span>{{$new->content}}</span>
                <hr>
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

    });
</script>
@endsection