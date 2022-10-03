@extends('backend.admin.app')
@section('content')
<div class="row m-4 ">
    <div class="col-md-12">
        <div class="card overflowhidden m-t-20  text-center">
            <div class="profile-header">
                <div class="card" style="width: 20rem;">
                    <div class="image text-center"> <img src="{{asset('assets/images/xs/avatar1.jpg')}}" width="48" height="48" alt="User" /> </div>
                    <div class="card-body">
                        <h5 class="card-title">{{auth()->user()->name}}</h5>
                        <p class="card-text">{{auth()->user()->email}}</p>
                        <a href="#" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">تعديل</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-dark">
                        <h5 class="modal-title text-white" id="exampleModalLabel">تحديث الملف الشخصي</h5>
                        <button type="button " class="close btn-lg text-lef ml-2 text-white" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-right">
                        <form action="{{route('profile.update',auth()->user()->id)}}">
                            @csrf
                            @method('patch')
                            <div class="form-group">
                                <label for="">اسم</label>
                                <div class=" m-2">
                                    <input type="text" name="name" class="form-control" value="{{auth()->user()->name}}">
                                </div>
                                <div class="m-2">
                                    <label for="">البريد الإلكتروني</label>
                                    <input type="email" name="email" class="form-control" value="{{auth()->user()->email}}">
                                </div>
                                <div class="m-2">
                                    <label for=""></label>
                                    <input type="password" name="password" class="form-control" value="{{null}}">
                                </div>
                                <button type="submit" class="btn btn-success">تحديث </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
@endsection