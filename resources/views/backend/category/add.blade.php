<?php

use App\Category;

$categories = Category::orderBy('id', 'desc')->get();
?>
@extends('backend.admin.app')
@section('content')
<style>
    .modal-footer {
        justify-content: none !important;
    }
</style>
<div class="m-t-20" >
    <div class="container ">
        <div class="row"  style="background:#f7f7f7">
            <div class="col-md-12 " dir="rtl">

                <div class="card mt-4">
                    <div class="card-header bg-dark text-white text-center ">
                        <p class="h4"><strong>أضف شركة</strong></p>
                    </div>
                    <form action="{{route('store.category')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group  text-right">
                                <label for="exampleInputEmail1">اسم الشركة</label>
                                <input type="text" name="category_name" class="form-control" id="exampleInputEmail1" placeholder="اسم الشركة" required>
                            </div>

                            <div class="form-group text-right">
                                <label for="exampleInputFile ">صورة الشركة</label>
                                <div class="input-group ">
                                    <div class="custom-file">
                                        <input type="file" class="form-control" name="image">
                                    </div>

                                </div>
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-dark ">شركة المتجر</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="row mt-4 "  style="background:#f7f7f7">
            <div class="col-md-12">

                <!-- /.card -->

                <div class="card p-2">

                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-responsive table-striped" dir="rtl">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>اسم الشركة</th>
                                    <th>الصور</th>
                                    <th>عمل</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1
                                ?>
                                @foreach($categories as $category)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$category->category_name}}</td>
                                    <td>
                                        <a href="{{$category->image}}" target="_blank"> <img src="{{asset($category->image)}}" alt="Image" width="30px" height="30px"></a>
                                    </td>
                                    <td>
                                        <a class="text-dark" data-toggle="modal" data-target="#exampleModa{{$category->id}}"><i class="fa fa-edit m-2"></i></a>
                                        <a class="text-danger"><i class="fa fa-trash m-2" data-toggle="modal" data-target="#exampleModal{{$category->id}}"></i></a>

                                        <!-- delete -->
                                        <div class="modal fade" id="exampleModal{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header text-center">
                                                        <h3 class="modal-title " id="exampleModalLabel"><strong>هل أنت متأكد من حذف؟</strong></h3>

                                                    </div>

                                                    <div class="col-md-12 p-2 text-right">
                                                        <form action="{{route('delete.category',$category->id)}}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">لا<strong></strong></button>
                                                            <button type="submit" class="btn btn-primary"><strong>نعم</strong></button>
                                                        </form>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- enddelete -->
                                        <!-- edit -->
                                        <div class="modal fade" id="exampleModa{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body text-right">
                                                        <center>
                                                            <h3>
                                                                تحرير الشركة

                                                            </h3>
                                                        </center>
                                                        <form action="{{route('update.category',$category->id)}}" method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('patch')
                                                            <div class="card-body">
                                                                <div class="form-group  text-right">
                                                                    <label for="exampleInputEmail1">أضف شركة</label>
                                                                    <input type="text" name="category_name" class="form-control" id="exampleInputEmail1" value="{{$category->category_name}}" required>
                                                                </div>

                                                                <div class="form-group text-right">
                                                                    <label for="exampleInputFile ">صورة </label>
                                                                    <div class="input-group ">
                                                                        <div class="custom-file">
                                                                            <input type="file" class="form-control" name="image" value="{{$category->image}}">
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <!-- /.card-body -->

                                                            <div class="card-footer text-center">
                                                                <button type="submit" class="btn btn-dark ">تحديث</button>
                                                            </div>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- endedit -->
                                    </td>

                                </tr>
                                @endforeach

                                <?php
                                $i++
                                ?>

                            </tbody>

                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
    var $ = jQuery;
    $(document).ready(function() {
        $('#example1').DataTable();
    });
</script>
@endsection