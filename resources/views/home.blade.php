<?php

use App\Category;
use App\Car;

$companies = Category::orderBy('id', 'desc')->get();
$cars = Car::orderBy('id', 'desc')->get();
?>
@extends('backend.admin.app')
@section('content')



<div class="row">
    <div class="p-4 card">
        <!-- /.card -->

        <div class="">
            <!-- /.card-header -->
            <div class="card-body ">
                <h4 class="text-right m-b-40" title="أضف سيارات"><a href="" class="btn btn-dark" data-toggle="modal" data-target="#cd"><i class="fa fa-plus "></i></a></h4>


                <!-- add car -->
                <div class="modal fade bd-example-modal-lg des " id="cd" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content ">
                            <div class="modal-header bg-dark " dir="rtl">
                                <h5 class="modal-title col-md-12 text-right text-white " id="exampleModalLongTitle"><strong>إضافة مركبة جديدة</strong></h5>
                                <button type="button" class="close btn-lg text-lef ml-2 text-white" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="m-2" dir="rtl">

                                <div class="col-md-12">
                                    <form action="{{route('store.car')}}" method="POST" enctype="multipart/form-data" name="2">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group text-right">
                                                    <label for=""><strong>اسم الشركة</strong></label>
                                                    <select name="category_id" id="" class="form-control" required>
                                                        <option value="#">اختر واحدة</option>
                                                        @foreach($companies as $company)
                                                        <option value="{{$company->id}}" required> {{$company->category_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="form-group text-right">
                                                    <label for=""><strong>اسم السيارة</strong></label>
                                                    <input type="text" class="form-control" name="car_name" required>
                                                </div>
                                                <div class="form-group text-right">
                                                    <label for=""><strong>سنة الصنع </strong></label>
                                                    <select name="modal" id="" class="form-control" required>
                                                        <option value="">اختر واحدة</option>

                                                        @for($i=2030; $i>=1980; $i--)
                                                        <option value="{{$i}}">{{$i}}</option>
                                                        @endfor
                                                    </select>
                                                </div>
                                                <div class="form-group nor text-right">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for=""><strong>فئة </strong></label>
                                                            <select name="size" id="" class="form-control" required>

                                                                <option value="">اختر واحدة</option>
                                                                <option value="SEDAN">SEDAN</option>
                                                                <option value="SUV">SUV</option>
                                                                <option value="SPORTS CAR">SPORTS CAR</option>
                                                                <option value="MINIVAN">MINIVAN</option>
                                                                <option value="COUPE">COUPE</option>
                                                                <option value="STATION WAGON">STATION WAGON</option>
                                                                <option value="PICKUP TRUCK">PICKUP TRUCK</option>
                                                                <option value="HATCHBACK">HATCHBACK</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6 ">
                                                            <label for=""><strong>سعر</strong></label>
                                                            <input type="text" placeholder=" 1000-200 ريال" name="price" class="form-control">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="form-group  text-right">
                                                    <label for="">سعة المحرك</label>
                                                    <input type="text" name="capacity" class="form-control" required>
                                                </div>
                                                <div class="form-group  text-right">
                                                    <label for="">عدد المقاعد </label>
                                                    <input type="text" name="seats" class="form-control" required>
                                                </div>
                                                <div class="form-group  text-right">
                                                    <label for=""> بطاقة الوقود</label>
                                                    <select name="fuel_card" id="" class="form-control" required>
                                                        <option value="">اختر واحدة</option>
                                                        <option value="ممتاز">ممتاز</option>
                                                        <option value="جيد">جيد</option>
                                                        <option value="معدل">معدل</option>
                                                        <option value="رديئة">رديئة</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group text-right">
                                                    <label for=""> صور المركبة من الخارج</label>
                                                    <div class="input-group control-group increment">
                                                        <div class="input-group-btn">
                                                            <button class="btn btn-success" type="button"  style="padding-bottom: 12px;"><i class="fa fa-plus text-white"></i></button>
                                                        </div>
                                                        <input type="file" name="out[]" class="form-control">

                                                    </div>
                                                    <div class="clone d-none">
                                                        <div class="control-group input-group" style="margin-top:10px">
                                                            <div class="input-group-btn">
                                                                <button class="btn btn-danger" type="button"  style="padding-bottom: 12px;"><i class="fa fa-trash text-white"></i></button>

                                                            </div>
                                                            <input type="file" name="out[]" class="form-control">

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group text-right">
                                                    <label for=""> صور المركبة من الداخل </label>
                                                    <div class="input-group control-group incremen">
                                                        <div class="input-group-btn">
                                                            <button class="btn btn-warning" type="button"  style="padding-bottom: 12px;"><i class="fa fa-plus text-white"></i></button>
                                                        </div>
                                                        <input type="file" name="in[]" class="form-control">

                                                    </div>
                                                    <div class="clon d-none">
                                                        <div class="control-group input-group" style="margin-top:10px">
                                                            <div class="input-group-btn">
                                                                <button class="btn btn-danger bc text-white" type="button"  style="padding-bottom: 12px;"><i class="fa fa-trash text-white"></i></button>

                                                            </div>
                                                            <input type="file" name="in[]" class="form-control">

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group text-right">
                                                    <label for=""> صور المركبة من الداخل </label>
                                                    <div class="input-group control-group increments">
                                                        <div class="input-group-btn">
                                                            <button class="btn btn-secondary" type="button"  style="padding-bottom: 12px;"><i class="fa fa-plus text-white"></i></button>
                                                        </div>
                                                        <input type="file" name="engine[]" class="form-control">

                                                    </div>
                                                    <div class="clonrs d-none">
                                                        <div class="control-group input-group" style="margin-top:10px">
                                                            <div class="input-group-btn">
                                                                <button class="btn btn-danger bc text-white" type="button"  style="padding-bottom: 12px;"><i class="fa fa-trash text-white"></i></button>

                                                            </div>
                                                            <input type="file" name="engine[]" class="form-control">

                                                        </div>
                                                    </div>

                                                    <div class="form-group text-right">

                                                    </div>

                                                </div>
                                                <div class="form-group text-right">
                                                    <label for=""> المميزات</label>
                                                    <textarea name="description" id="" cols="30" rows="12" class="form-control" required></textarea>
                                                </div>


                                            </div>

                                        </div>
                                        <button type="submit" class=" col-md-12 d-block btn btn-dark text-white">حـفـظ</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <table id="example1" class="table table-responsive table-striped text-right " dir="rtl">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th>#</th>
                            <th>صورة</th>
                            <th>اسم الشركة</th>
                            <th>اسم السيارة</th>
                            <th>سنة الصنع</th>
                            <th>فئة</th>
                            <th>سعر </th>
                            <th>سعة المحرك </th>
                            <th>عدد المقاعد</th>
                            <th>بطاقة الوقود</th>
                            <th>المحتوى</th>
                            <th>تفاصيل</th>
                            <th>عمل</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $c = 1;
                        ?>
                        @foreach($cars as $car)
                        <tr>
                            <td>{{$c++}}</td>
                            <td>
                                @if(!$car->outImages->isEmpty())
                                <a href="{{$car->outImages[0]->out ?? ''}}" target="_blank"> <img src="{{asset($car->outImages[0]->out) ?? ''}}" alt="image" width="50px" height="50px"></a>
                                @else
                                <img src="" alt="Not Added">
                                @endif

                            </td>
                            <td>{{$car->category->category_name}}</td>
                            <td>{{$car->car_name}}</td>
                            <td>{{$car->modal}}</td>
                            <td>{{$car->size}}</td>
                            <th>{{$car->price}}</td>
                            <td>{{$car->capacity}}</td>
                            <td>{{$car->seats}}</td>
                            <td>{{$car->fuel_card}}</td>
              
                            <td class="text-right">{{ Str::limit($car->description, 135) }}</td>
                            <td class="text-left"> <a href=""  data-toggle="modal" data-target="#exam{{$car->id}}"><i class="fa fa-bars text-white mt-2 text-white " aria-hidden="true"   style="background-color:black; font-size:20px" title="تفاصيل السيارة"></i></a></td>
                            <td class="text-left">
                                <a href="" class="m-2 text-danger " data-toggle="modal" data-target="#delete{{$car->id}}"><i class="fa fa-trash mt-2" title="حذف" style="font-size:20px"></i></a>

                            </td>
                            <!-- car-delete-start -->
                            <div class="modal fade" id="delete{{$car->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content text-right">
                                        <div class="modal-header">
                                            <h3 class="modal-title text-center" id="exampleModalLabel">هل أنت متأكد من الحذف؟</h3>
                                            <button type="button" class="close btn-lg text-lef ml-2 " data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="col-md-12  p-2 text-right">
                                            <form action="{{route('car.delete',$car->id)}}" method="Post" name="3">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">حذف</button>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- car-delete-end -->
                            <!-- Details -->
                            <div class="modal fade bd-example-modal-lg " id="exam{{$car->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content ">
                                        <div class="modal-header bg-dark " dir="rtl">
                                            <h5 class="modal-title col-md-12 text-right text-white " id="exampleModalLongTitle"><strong>تفاصيل السيارة</strong></h5>
                                            <button type="button" class="close btn-lg text-lef ml-2 text-white" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="m-2" dir="rtl">
                                            <form action="{{route('update.car',$car->id)}}" method="POST" enctype="multipart/form-data" name="4">
                                                @csrf
                                                @method('PATCH')
                                                <div class="col-md-12">

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group text-right">
                                                                <label for=""><strong>اسم الشركة</strong></label>
                                                                <select name="category_id" id="" class="form-control" required>
                                                                    <option value="">اختر واحدة</option>
                                                                    @foreach($companies as $company)
                                                                    <option value="{{$company->id}}" {{$car->category->id == $company->id ? "selected" : "" }} required> {{$company->category_name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>

                                                            <div class="form-group text-right">
                                                                <label for=""><strong>اسم السيارة</strong></label>
                                                                <input type="text" class="form-control" name="car_name" value="{{$car-> car_name}}" required>
                                                            </div>
                                                            <div class="form-group text-right">
                                                                <label for=""><strong>سنة الصنع </strong></label>
                                                                <select name="modal" id="" class="form-control" required>
                                                                    <option value="">اختر واحدة</option>

                                                                    @for($i=2030; $i>=1980; $i--)
                                                                    <option value="{{$i}}" {{$car->modal==$i ? "selected" : ""}}>{{$i}}</option>
                                                                    @endfor
                                                                </select>
                                                            </div>
                                                            <div class="form-group nor text-right">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label for=""><strong>فئة </strong></label>
                                                                        <select name="size" id="" class="form-control" required>

                                                                            <option value="">اختر واحدة</option>
                                                                            <option value="SEDAN" {{$car->size=="SEDAN" ? "selected" : ''}}>SEDAN</option>
                                                                            <option value="SUV" {{$car->size=="SUV" ? "selected" : ''}}>SUV</option>
                                                                            <option value="SPORTS CAR" {{$car->size=="SPORTS CAR" ? "selected" : ''}}>SPORTS CAR</option>
                                                                            <option value="MINIVAN" {{$car->size=="MINIVAN" ? "selected" : ''}}>MINIVAN</option>
                                                                            <option value="COUPE" {{$car->size=="COUPE" ? "selected" : ''}}>COUPE</option>
                                                                            <option value="STATION WAGON" {{$car->size=="STATION WAGON" ? "selected" : ''}}>STATION WAGON</option>
                                                                            <option value="PICKUP TRUCK" {{$car->size=="SPICKUP TRUCK" ? "selected" : ''}}>PICKUP TRUCK</option>
                                                                            <option value="HATCHBACK" {{$car->size=="HATCHBACK" ? "selected" : ''}}>HATCHBACK</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-6 ">
                                                                        <label for=""><strong>سعر</strong></label>
                                                                        <input type="text" value="{{$car->price}}" name="price" class="form-control">
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="form-group  text-right">
                                                                <label for="">سعة المحرك</label>
                                                                <input type="text" name="capacity" value="{{$car->capacity}}" class="form-control" required>
                                                            </div>
                                                            <div class="form-group  text-right">
                                                                <label for="">عدد المقاعد </label>
                                                                <input type="text" name="seats" class="form-control" value="{{$car->seats}}" required>
                                                            </div>
                                                            <div class="form-group  text-right">
                                                                <label for=""> بطاقة الوقود</label>
                                                                <select name="fuel_card" id="" class="form-control" required>
                                                                    <option value="">اختر واحدة</option>
                                                                    <option value="ممتاز" {{$car->fuel_card=="ممتاز" ? "selected" : ''}}>ممتاز</option>
                                                                    <option value="جيد" {{$car->fuel_card=="جيد" ? "selected" : ''}}>جيد</option>
                                                                    <option value="معدل" {{$car->fuel_card=="معدل" ? "selected" : ''}}>معدل</option>
                                                                    <option value="رديئة" {{$car->fuel_card=="رديئة" ? "selected" : ''}}>رديئة</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group text-right  row ">
                                                                <div class="col-md-12">
                                                                    <label for=""> صور المركبة من الخارج</label>
                                                                </div>

                                                                @foreach($car->outImages as $image)

                                                                <div class="col-md-4  p-2">

                                                                    <div class="col-md-12">
                                                                        <!-- <form action="{{route('out.delete',$image->id)}}" method="POST">
                                                                            @csrf
                                                                            @method('DELETE') -->

                                                                        <a class="btn btn-sm btn-danger delete text-white" data-id="{{$image->id}}"><i class="fa fa-trash"></i></a>
                                                                        <!-- </form> -->
                                                                        <a href="{{$image->out}}" target="_blank"><img src="{{asset($image->out)}}" width="80px" height="80px" class=" mt-2 mb-2  " alt=""></a>
                                                                    </div>
                                                                </div>

                                                                @endforeach


                                                                <div class="input-group control-group ">
                                                                    <div class="input-group-btn">
                                                                        <button class="btn btn-success" type="button"  style="padding-bottom: 12px;">تحميل الصور</button>
                                                                    </div>
                                                                    <input type="file" name="out[]" class="form-control">

                                                                </div>
                                                                
                                                            </div>

                                                            <div class="form-group text-right row">
                                                                <label for="" class="col-md-12"> صور المركبة من الداخل </label>
                                                                @foreach($car->insideImages as $img)

                                                                <div class="col-md-4  p-2">

                                                                    <div class="col-md-12">
                                                                   
                                                                            <!-- <form action="{{route('inside.delete',$img->id)}}" method="POST" name="5">
                                                                                @csrf
                                                                                @method('delete') -->
                                                                                <a class=" btn btn-sm btn-danger delete2 text-white" data-id="{{$img->id}}"><i class="fa fa-trash"></i></a>
                                                                            <!-- </form> -->
                                                                        <a href="{{$img->in}}" target="_blank"><img src="{{asset($img->in)}}" width="80px" height="80px" class=" mt-2 mb-2  " alt=""></a>
                                                                    </div>
                                                                </div>

                                                                @endforeach
                                                                <div class="input-group control-group ">
                                                                    <div class="input-group-btn">
                                                                        <button class="btn btn-warning" type="button"  style="padding-bottom: 12px;">تحميل الصور</button>
                                                                    </div>
                                                                    <input type="file" name="in[]" class="form-control">

                                                                </div>
                                                           
                                                            </div>
                                                            <div class="form-group text-right row">
                                                                <label for="" class="col-md-12"> صور المركبة من الداخل </label>
                                                                @foreach($car->engineImages as $img)

                                                                <div class="col-md-4  p-2">

                                                                    <div class="col-md-12">

                                                                        <!-- <form action="{{route('engine.delete',$img->id)}}" method="POST">
                                                                            @csrf
                                                                            @method('delete') -->
                                                                        <a class=" btn btn-sm btn-danger delete3 text-white " data-id="{{$img->id}}"><i class="fa fa-trash "></i></a>
                                                                        <!-- </form> -->


                                                                        <a href="{{$img->enngine}}" target="_blank"><img src="{{asset($img->enngine)}}" width="80px" height="80px" class=" mt-2 mb-2  " alt=""></a>
                                                                    </div>
                                                                </div>
                                                                @endforeach
                                                                <div class="input-group control-group ">
                                                                    <div class="input-group-btn">
                                                                        <button class="btn btn-secondary" type="button" style="padding-bottom: 12px;">تحميل الصور</button>
                                                                    </div>
                                                                    <input type="file" name="engine[]" class="form-control">

                                                                </div>
                                                               

                                                                <div class="form-group text-right">

                                                                </div>

                                                            </div>



                                                        </div>
                                                        <div class=" col-md-12 form-group text-right mt-2">
                                                            <label for="" class="col-md-12"> المميزات</label>
                                                            <textarea name="description" id="" cols="30" rows="10" class="form-control" value="{!!$car->description!!}">{!!$car->description!!} </textarea>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class=" col-md-12 d-block btn btn-dark text-white">تحديث</button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Details -->




                        </tr>
                        @endforeach
                        <?php
                        $c = $c + 1;
                        ?>
                    </tbody>

                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
<!-- /.container-fluid -->

@endsection
@section('script')
<script type="text/javascript">
    $(document).ready(function() {
        $(".btn-success").click(function() {
            var html = $(".clone").html();
            $(".increment").after(html);
        });
        $(".btn-warning").click(function() {
            var html = $(".clon").html();
            $(".incremen").after(html);
        });

        $(".btn-secondary").click(function() {
            var html = $(".clonrs").html();
            $(".increments").after(html);
        });

        $("body").on("click", ".btn-danger", function() {
            $(this).parents(".control-group").remove();
            $(this).parents(".bc").remove();
            $(this).parents(".cd").remove();
        });

        $(".delete").click(function() {
            var id = $(this).data("id");
            var token = $("meta[name='csrf-token']").attr("content");

            $.ajax({
                url: "delete-out/" + id,
                type: 'DELETE',
                data: {
                    "id": id,
                    "_token": token,
                },
                success: function() {
                    alert('تم الحذف');
                    location.reload();
                }
            });

        });
        $(".delete2").click(function() {
            var id = $(this).data("id");
            var token = $("meta[name='csrf-token']").attr("content");

            $.ajax({
                url: "delete-inside/" + id,
                type: 'DELETE',
                data: {
                    "id": id,
                    "_token": token,
                },
                success: function() {
                    alert('تم الحذف');
                    location.reload();
                }
            });

        });

        $(".delete3").click(function() {
            var id = $(this).data("id");
            var token = $("meta[name='csrf-token']").attr("content");

            $.ajax({
                url: "delete-engine/" + id,
                type: 'DELETE',
                data: {
                    "id": id,
                    "_token": token,
                },
                success: function() {
                    alert('تم الحذف');
                    location.reload();
                }
            });

        });

    });
</script>
<script type="text/javascript">
    var $ = jQuery;
    $(document).ready(function() {
        $('#example1').DataTable();
    });
</script>
@endsection