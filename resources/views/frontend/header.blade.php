<header class="header  bg-white" dir="rtl">
    <div class="header__top">
        <div class="container">

        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row mt-4 text-right">
                    <a href="/Latest-Cars" class="text-right" style="width:42%;float:left;margin: 0 3%"><img src="{{asset('assets/images/xs/22.jpg')}}" alt="" width="120" height="60" class="img-fluid"></a>
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
                                <form action="{{route('filtter')}}" method="get">
                                    @csrf
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
                                            <label for=""><strong>سعر</strong></label>
                                            <input type="text" name="price" id="" class="form-control">
                                        </div>
                                    </div>

                             

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for=""><strong>سنة الصنع </strong></label>
                                            <input type="text" name="modal" class="form-control">
                                        </div>
                                    </div>
                            


                             
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for=""> <strong>سعة المحرك</strong></label>
                                            <input type="text" name="capacity" id="" class="form-control" placeholder="EX. 2000cc">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-dark d-block w-100">ابحث عن سيارة</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- modal -->
            </div>

            <!-- <div class="col-lg-12 mt-2 mb-2 d-block ">
                <form action="{{route('search')}}" method="get">
                    @csrf
                    <div class="input-group mb-4">
                        <div class="input-group-append">
                            <button id="button-addon5" type="submit" style="border:none;padding:0 20px"> <i class="fa fa-search"> </i> </button>
                        </div>
                        <input type="text"  name="search" placeholder="ابحث عن سيارة.." aria-describedby="button-addon5" class="form-control">

                    </div>

                </form>
            </div> -->
        </div>


    </div>
</header>