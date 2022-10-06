<div class="col-lg-12 mt-2 mb-2 d-block " dir="rtl">
        <form action="{{route('search.news')}}" method="get">
            @csrf
            <div class="input-group mb-4">
                <div class="input-group-append">
                    <button id="button-addon5" type="submit" style="border:none;padding:0 20px"> <i class="fa fa-search"> </i> </button>
                </div>
                <input type="text" name="search" placeholder="البحث عن الأخبار ..." aria-describedby="button-addon5" class="form-control">

            </div>

        </form>
    </div>

    </div>