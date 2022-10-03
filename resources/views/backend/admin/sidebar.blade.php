<aside id="leftsidebar" class="sidebar">

    <div class="user-info">
    <img src="{{asset('assets/images/xs/22.jpg')}}"  width="100px" height="48"/>
        <!-- <div class="image"> <img src="{{asset('assets/images/xs/avatar1.jpg')}}" width="48" height="48" alt="User" /> </div> -->
        <div class="info-container">
            <div class="name m-2 text-right" data-toggle="dropdown">{{auth()->user()->name}}</div>
            <!-- <div class="btn-group user-helper-dropdown"> 
            <ul class="dropdown-menu slideUp ">
                <li><a href="profile.html"><i class="material-icons">person</i>Profile</a></li>
               
              
                <li><a href="sign-in.html"><i class="material-icons">input</i>Sign Out</a></li>
            </ul>
        </div> -->
        </div>
    </div>


    <div class="menu">
        <ul class="list">
            <li class="active open"><a href="/" class="menu-toggle"><i class="fa fa-home"></i><span>Dashboard</span></a>
            </li>

            <li><a href="javascript:void(0);" class="menu-toggle"><i class="fa fa-car"></i><span><strong>إدارة السيارة</strong></span> </a>
                <ul class="ml-menu">
                    <li><a href="{{route('add.category')}}"><i class="fa fa-plus"></i><span><strong>شركة السيارات</strong></a></li>
                    <li><a href="/home"><i class="fa fa-car"></i></i><span><strong>جميع السيارات</strong></a></li>

                </ul>
            </li>
            <li    class=""><a href="{{route('add.news')}}" class=""><i class="fa fa-book"></i><span><strong>الملف الشخصي</strong></span></a>   </li>
            <li    class=""><a href="{{route('profile',auth()->user()->id)}}" class=""><i class="fa fa-user"></i><span><strong>الإخبارية</strong></span></a>   </li>
            <li class="">
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="d-block col-12 text-right" style="border: none" >
                        <i class=" nav-icon fas fa-sign-out-alt"></i>
                        <p class="text-dark ">
                            <strong><i class="fa fa-sign-out"></i> خروج</strong>
                        </p>
                    </button>
                </form>
            </li>


        </ul>
    </div>

</aside>