            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-dark.png" alt="" height="17">
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-light.png" alt="" height="17">
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">

                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">
                        <a class="nav-link menu-link" href="{{ route('dashboard') }}"  role="button">
                            <span data-key="t-dashboards">Super Admin Dashboard</span>
                        </a>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                                <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Posts Module</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarDashboards">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item"> 
                                        <a href="{{ route('post.all') }}" 
                                        @if(  Route::currentRouteName() == 'post.all' )
                                            class="nav-link active"
                                        @else
                                            class="nav-link"
                                        @endif data-key="t-analytics"> All Posts </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('post.create.page') }}" @if(  Route::currentRouteName() == 'post.create.page' )
                                        class="nav-link active"
                                    @else
                                        class="nav-link"
                                    @endif data-key="t-crm"> Create Post </a>
                                    </li>
                                </ul>
                            </div>
                        </li> 

                        {{-- products routes starts --}}
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarDashboardsProduct" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                                <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Product Module</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarDashboardsProduct">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item"> 
                                        <a href="{{ route('products.all') }}" 
                                        @if(  Route::currentRouteName() == 'products.all' )
                                            class="nav-link active"
                                        @else
                                            class="nav-link"
                                        @endif data-key="t-analytics"> All Products </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('products.create.page') }}" @if(  Route::currentRouteName() == 'products.create.page' )
                                        class="nav-link active"
                                    @else
                                        class="nav-link"
                                    @endif data-key="t-crm"> Create Post </a>
                                    </li>
                                </ul>
                            </div>
                        </li> 
                        {{-- products routes sends --}} 

                        {{-- sales routes starts --}}
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarDashboardsSales" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                                <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Sales Module</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarDashboardsSales">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item"> 
                                        <a href="{{ route('sales.all') }}" 
                                        @if(  Route::currentRouteName() == 'sales.all' )
                                            class="nav-link active"
                                        @else
                                            class="nav-link"
                                        @endif data-key="t-analytics"> All Sales </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('sales.create.page') }}" @if(  Route::currentRouteName() == 'sales.create.page' )
                                        class="nav-link active"
                                    @else
                                        class="nav-link"
                                    @endif data-key="t-crm"> Generate Sale </a>
                                    </li>
                                </ul>
                            </div>
                        </li> 
                        {{-- sales routes sends --}}                     
                    

                    </ul>
                </div>
               
                <!-- Sidebar -->
                
            </div>
            
            <div class="sidebar-background"></div>