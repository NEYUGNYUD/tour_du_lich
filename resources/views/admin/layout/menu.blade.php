<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">Website du lịch <u>Viettravel</u></a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
        <!-- /.dropdown -->
        @if(isset($loginInfor))
        <li class="dropdown" style="text-align: right;">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <img src='{{$loginInfor->avatar}}' width="5%" height="5%" alt="avatar" class="img-rounded"/>
                        <strong>{{$loginInfor->employee_name}}</strong>
                        <i class="fa fa-caret-down"></i>
                    </a>
            <ul class="dropdown-menu dropdown-user">
                <li style="text-align: center;">
                    @if($loginInfor->level == 1)
                        <i>Administrator</i>
                    @else
                        <i>Employee</i>
                    @endif
                </li>
                <li class="divider"></li>
                <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                </li>
                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li><a href="{{asset(route('logoutAdmin'))}}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        @endif
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                    <!-- /input-group -->
                </li>
                <li>
                    <a href="#"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Category<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">List Category</a>
                        </li>
                        <li>
                            <a href="#">Add Category</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>

                <li>
                    <a href="#"><i class="fa fa-cube fa-fw"></i>Phương tiện<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{asset(route('listVehicle'))}}">Danh sách phương tiện</a>
                        </li>
                        <li>
                            <a href="{{asset(route('getAddVehilce'))}}">Thêm phương tiện</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>

                <li>
                    <a href="#"><i class="fa fa-cube fa-fw"></i>Địa danh<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{asset(route('listPlace'))}}">Danh sách địa danh</a>
                        </li>
                        <li>
                            <a href="{{asset(route('getAddPlace'))}}">Thêm địa danh</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>

                <li>
                    <a href="#"><i class="fa fa-cube fa-fw"></i>Dịch vụ<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{asset(route('listService'))}}">Danh sách dịch vụ</a>
                        </li>
                        <li>
                            <a href="{{asset(route('getAddService'))}}">Thêm dịch vụ</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>

                <li>
                    <a href="#"><i class="fa fa-cube fa-fw"></i>Tour du lịch<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{asset(route('listTour'))}}">Danh sách tour du lịch</a>
                        </li>
                        <li>
                            <a href="{{asset(route('getAddTour'))}}">Thêm tour du lịch</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>

                <li>
                    <a href="#"><i class="fa fa-cube fa-fw"></i>Phiếu tour<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{asset(route('listTourCoupon'))}}">Danh sách phiếu tour</a>
                        </li>
                        <li>
                            <a href="{{asset(route('getAddTourCoupon'))}}">Thêm phiếu tour</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>

                <li>
                    <a href="#"><i class="fa fa-users fa-fw"></i> User<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">List User</a>
                        </li>
                        <li>
                            <a href="#">Add User</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>
