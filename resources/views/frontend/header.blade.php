<header class="header  bg-white" dir="rtl">
    <div class="header__top">
        <div class="container">

        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row mt-4 text-right">
                    <a href="/mobile-view" class="text-right" style="width:42%;float:left;margin: 0 3%"><img src="{{asset('assets/images/xs/22.jpg')}}" alt="" width="120" height="60" class="img-fluid"></a>
                    <a href="" class="text-dark mt-4 text-left " style="width:42%;float:left;margin: 0 3%" data-toggle="modal" data-target="#exampleModal">
                        <i class="fa fa-filter" style="font-size:30px" aria-hidden="true"></i>
                    </a>

                </div>
                <!-- modal -->
                <div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-dark">
                                <button type="button" class="close text-left text-white" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for=""><strong>لشركة المصنعة </strong></label>
                                        <select name="company_name" id="" class="form-control">
                                            <option value="">اختر واحدة</option>
                                            @foreach(App\Category::orderBy('id','desc')->get() as $company)
                                            <option value="{{$company->category_name}}">{{$company->category_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for=""><strong>اسم السيارة</strong></label>
                                        <input type="text" name="car_name" id="" class="form-control">
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="form-group">
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
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group ">
                                        <label for=""> <strong>أبعاد المركبة</strong> </label>
                                        <select name="dimention" id="" class="form-control" required>
                                            <option value="">اختر واحدة</option>
                                            <option value="جيد">جيد</option>
                                            <option value="متوسط">متوسط</option>
                                            <option value="كبير">كبير</option>
                                            <option value="الأسرة">الأسرة</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for=""> <strong>بطاقة الوقود</strong></label>
                                        <select name="fuel_card" id="" class="form-control" required>
                                            <option value="">اختر واحدة</option>
                                            <option value="ممتاز">ممتاز</option>
                                            <option value="جيد">جيد</option>
                                            <option value="معدل">معدل</option>
                                            <option value="رديئة">رديئة</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for=""> <strong>سعة المحرك</strong></label>
                                        <input type="text" name="capacity" id="" class="form-control" placeholder="EX. 2000cc">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-dark d-block w-100">ابحث عن سيارة</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- modal -->
            </div>

            <div class="col-lg-12 mt-2 mb-2 d-block ">
                <form action="{{route('search')}}">
                    <div class="input-group mb-4">
                        <div class="input-group-append">
                            <button id="button-addon5" type="submit" style="border:none;padding:0 20px"> <i class="fa fa-search"> </i> </button>
                        </div>
                        <input type="search" placeholder="ابحث هنا.." aria-describedby="button-addon5" class="form-control">

                    </div>

                </form>
            </div>
        </div>


    </div>
</header>