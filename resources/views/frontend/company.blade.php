<?php

use App\Category;

$categories = Category::orderBy('id', 'desc')->get();
?>


<section class="categories text-center pt-4 bg-white" style="border-radius:0 0 20% 0">
    <div class="container">
        <div class="row">
            <div class="categories__slider owl-carousel">
                <div class="col-md-12">
                    <div class="row">
                        @foreach($categories as $category)
                        <div class="col-md-3" style="width:25%;float:left">
                            <a href="{{route('companywishcar',$category->id)}}">
                                <img src="{{asset($category->image)}}" alt="image" max-width="150px" height="60px">

                            </a>
                            <p><a href="{{route('companywishcar',$category->id)}}" class="text-dark"><strong>{{$category->category_name}}</strong></a></p>

                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>