<!-- Loader -->
<div id="preloader">
    <div id="status">
        <div class="spinner"></div>
    </div>
</div>

<!-- Begin page -->
<div id="wrapper">

    <!-- ===== Left Sidebar Start ===== -->
    <div class="left side-menu">
        <!-- LOGO -->
        <div class="topbar-left">
            <div class="">
                <!--<a href="index" class="logo text-center">Fonik</a>-->
                <a href="{{ URL::asset('index')}}" class="logo"><img src="{{ URL::asset('assets/images/logo.png')}}"
                        height="40" alt="logo"></a>
            </div>
        </div>

        <div class="sidebar-inner slimscrollleft">
            <div id="sidebar-menu">
                <ul>
                    <!-- <li class="menu-title">Main</li> -->
                    <li>
                        <a href="index" class="waves-effect"><i
                                class="ion-ios7-speedometer-outline"></i><span>Dashboard</span></a>
                    </li>

                    <li>
                        <a href="index" class="waves-effect"><i
                                class="ion-android-system-home"></i><span>Inventory</span></a>
                    </li>

                    <li>
                        <a href="index" class="waves-effect"><i class="ion-ios7-cart"></i><span>Orders</span></a>
                    </li>

                    <li>
                        <a href="index" class="waves-effect"><i class="ion-shuffle"></i><span>Return/Damage
                                Mgt</span></a>
                    </li>

                    <li>
                        <a href="index" class="waves-effect"><i class="ion-social-usd"></i><span>Payments</span></a>
                    </li>
                    <li>
                        <a href="index" class="waves-effect"><i class="ion-clipboard"></i><span>GRN</span></a>
                    </li>
                    <li>
                        <a href="index" class="waves-effect"><i
                                class="ion-android-location"></i><span>Distribution</span></a>
                    </li>

                    <li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="ion-android-social-user"></i><span>
                                User Mgt<span class="pull-right"><i class="mdi mdi-chevron-right"></i></span>
                            </span></a>
                        <ul class="list-unstyled">
                            <li><a href="customers">Customers</a></li>
                            <li><a href="suppliers">Suppliers</a></li>
                            <li><a href="employees">Employees</a></li>
                        </ul>
                    </li>
                    <li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="ion-bag"></i>
                            <span>Product Mgt<span class="pull-right"><i
                                        class="mdi mdi-chevron-right"></i></span></span></a>
                        <ul class="list-unstyled">
                            <li><a href="products">Products</a></li>
                            <li><a href="categories">Categories</a></li>
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="ion-ios7-loop-strong"></i>
                            <span>Reports<span class="pull-right"><i
                                        class="mdi mdi-chevron-right"></i></span></span></a>
                        <ul class="list-unstyled">
                            <li><a href="1">1 </a></li>
                            <li><a href="2"> 2</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div> <!-- end sidebarinner -->
    </div>
    <!-- Left Sidebar End -->