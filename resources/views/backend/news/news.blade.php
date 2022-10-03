<?php


use App\News;

$news = News::orderBy('id', 'desc')->get();
?>
@extends('backend.admin.app')
@section('content')



<div class="row">
    <div class="p-4 card">

        <!-- /.card -->

        <div class="">
            <!-- /.card-header -->
            <div class="card-body ">
                <h4 class="text-right m-b-40" title="الأخبار"><a href="" class="btn btn-dark" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-plus "></i></a></h4>


                <!-- add new -->
                <div class="modal fade bd-example-modal-lg des" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content ">
                            <div class="modal-header bg-dark " dir="rtl">
                                <h5 class="modal-title col-md-12 text-right text-white " id="exampleModalLongTitle"><strong>الأخبار</strong></h5>
                                <button type="button" class="close btn-lg text-lef ml-2 text-white" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="m-2" dir="rtl">

                                <div class="col-md-12">
                                    <form action="{{route('store.news')}}" method="POST" enctype="multipart/form-data" name="2">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">

                                                <div class="form-group text-right">
                                                    <label for=""><strong>عنوان الخبر </strong></label>
                                                    <input type="text" class="form-control" name="subject" required>
                                                </div>


                                                <div class="form-group  text-right">
                                                    <label for=""> <strong>تاريخ النشر </strong></label>
                                                    <input type="date" name="date" class="form-control" required>
                                                </div>


                                            </div>
                                            <div class="col-md-6 text-right">
                                                <label for=""> <strong>الملحقات</strong></label>
                                                <div class="input-group control-group increment">
                                                    <div class="input-group-btn">
                                                        <button class="btn btn-success" type="button" style="padding-bottom: 12px;"><i class="fa fa-plus text-white"></i></button>
                                                    </div>
                                                    <input type="file" name="image[]" class="form-control">

                                                </div>
                                                <div class="clone d-none">
                                                    <div class="control-group input-group" style="margin-top:10px">
                                                        <div class="input-group-btn">
                                                            <button class="btn btn-danger bc text-white" type="button" style="padding-bottom: 12px;"><i class="fa fa-trash text-white"></i></button>

                                                        </div>
                                                        <input type="file" name="image[]" class="form-control">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 text-right">
                                                <div class="form-group">
                                                    <label for=""><strong>المحتوى</strong></label>
                                                    <textarea name="content" id="" cols="30" rows="8" class="form-control" required></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12 text-right">
                                                <div class="form-group">
                                                    <label for=""><strong>مدلولات البحث</strong> <br><small class="m-l-20">مثال :- (مرحبًا ، مرحبًا ، جيد)</small></label>
                                                    <textarea name="keyword" id="" cols="30" rows="8" class="form-control" required></textarea>
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

                <div class="col-md-12">
                    <table id="example1" class="table table-responsive table-striped text-right " dir="rtl">
                        <thead class="bg-dark text-white">
                            <tr>
                                <th>#</th>
                                <th>تاريخ</th>
                                <th>صورة</th>
                                <th>موضوعات</th>
                                <th>المحتوى</th>
                                <th>كلمة رئيسية</th>
                                <th>تفاصيل</th>
                                <th>عمل</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $c = 1;
                            ?>
                            @foreach($news as $new)
                            <tr>
                                <td>{{$c++}}</td>
                                <td>{{\Carbon\Carbon::createFromTimestamp(strtotime($new->date))->format('d F Y')}}</td>

                                <td>
                                    @if(!$new->images->isEmpty())
                                    <a href="{{$new->images[0]->image ?? ''}}" target="_blank"> <img src="{{asset($new->images[0]->image) ?? ''}}" alt="image" width="50px" height="50px"></a>
                                    @else
                                    <img src="" alt="Not Added">
                                    @endif

                                </td>

                                <td>{{$new->subject}}</td>
                                <td>{{ Str::limit($new->content, 135) }}</td>
                                <td>{{$new->keyword}}</td>

                                <td class="text-left"> <a href="" data-toggle="modal" data-target="#exampleModa{{$new->id}}"><i class="fa fa-bars text-white mt-2 text-white" aria-hidden="true" style="background-color:black; font-size:20px" title="تفاصيل السيارة"></i></a></td>
                                <td class="text-left">
                                    <a href="" class="m-2 text-danger" data-toggle="modal" data-target="#exampleModal{{$new->id}}"><i class="fa fa-trash mt-2" title="حذف" style="font-size:20px"></i></a>
                                </td>
                                <!-- delete -->
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal{{$new->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-dark">
                                                <h3 class="modal-title text-white" id="exampleModalLabel">هل أنت واثق ؟</h3>
                                                <button type="button" class="close btn-lg text-lef ml-2" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="col-md-12 text-right p-4">
                                                <form action="{{route('delete.new',$new->id)}}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger">حذف</button>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- end delete -->

                                <!-- details -->
                                <div class="modal fade bd-example-modal-lg" id="exampleModa{{$new->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content text-right">
                                            <div class="modal-header bg-dark">
                                                <h3 class="modal-title text-white" id="exampleModalLabel">آخر الأخبار</h3>
                                                <button type="button" class="close btn-lg text-lef ml-2 text-white" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="m-2" dir="rtl">

                                                    <div class="col-md-12">
                                                        <form action="{{route('update.news',$new->id)}}" method="POST" enctype="multipart/form-data" name="3">
                                                            @csrf
                                                            @method('patch')
                                                            <div class="row">
                                                                <div class="col-md-6">

                                                                    <div class="form-group text-right">
                                                                        <label for=""><strong>عنوان الخبر </strong></label>
                                                                        <input type="text" class="form-control" name="subject" value="{{$new->subject}}" required>
                                                                    </div>


                                                                    <div class="form-group  text-right">
                                                                        <label for=""> <strong>تاريخ النشر </strong></label>
                                                                        <input type="date" name="date" class="form-control" value="{{$new->date}}" required>
                                                                    </div>


                                                                </div>
                                                                <div class="col-md-6 text-right">

                                                                    <div class="row">
                                                                <label for="" class="col-md-12"> <strong>الملحقات</strong></label>

                                                                        @foreach($new->images as $image)

                                                                        <div class="col-md-4  p-2">

                                                                            <div class="col-md-12">


                                                                                <a class="btn btn-sm btn-danger delete3 text-white" data-id="{{$image->id}}"><i class="fa fa-trash"></i></a>

                                                                                <a href="{{$image->image}}" target="_blank"><img src="{{asset($image->image)}}" width="80px" height="80px" class=" mt-2 mb-2  " alt=""></a>
                                                                            </div>
                                                                        </div>

                                                                        @endforeach
                                                                    </div>
                                                                    <div class="input-group control-group ">
                                                                        <div class="input-group-btn">
                                                                            <button class="btn btn-success" type="button" style="padding-bottom: 12px;">تحميل الصور</button>
                                                                        </div>
                                                                        <input type="file" name="image[]" class="form-control">

                                                                    </div>
                                                                  
                                                                </div>
                                                                <div class="col-md-12 text-right">
                                                                    <div class="form-group">
                                                                        <label for=""><strong>المحتوى</strong></label>
                                                                        <textarea name="content" id="" cols="30" rows="8" class="form-control" value="{!!$new->content!!}" required>{!!$new->content!!}</textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 text-right">
                                                                    <div class="form-group">
                                                                        <label for=""><strong>مدلولات البحث</strong> <br><small class="m-l-20">مثال :- (مرحبًا ، مرحبًا ، جيد)</small></label>
                                                                        <textarea name="keyword" id="" cols="30" rows="8" class="form-control" value="{!!$new->keyword!!}" required>{!!$new->keyword!!}</textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button type="submit" class=" col-md-12 d-block btn btn-dark text-white">تحديث</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- enddetails -->
                            </tr>
                            @endforeach
                            <?php
                            $c = $c + 1;
                            ?>
                        </tbody>

                    </table>
                </div>
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


        $("body").on("click", ".btn-danger", function() {
            $(this).parents(".control-group").remove();

        });


        
        $(".delete3").click(function() {
            var id = $(this).data("id");
            var token = $("meta[name='csrf-token']").attr("content");

            $.ajax({
                url: "delete-single-image/" + id,
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