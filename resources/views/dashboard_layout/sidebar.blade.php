<aside class="app-sidebar shadow" data-bs-theme="dark" style="background-color:#222e3c">
    <!--begin::Sidebar Brand-->
    <div class="sidebar-brand">
        <!--begin::Brand Link-->
        <a href="#" class="brand-link ">
            <!--begin::Brand Image-->
            <img src="{{asset('logo/logo.jpeg')}}" alt="G Store Logo" class="brand-image opacity-75 shadow rounded-circle ">
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light">G Store</span>
            <!--end::Brand Text-->
        </a>
        <!--end::Brand Link-->
    </div>
    <!--end::Sidebar Brand-->

    <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                
                <li class="nav-header">Dashboard</li>
                <li class="nav-item">
                    <a href="/dash" class="nav-link ">
                        <i class="nav-icon bi bi-speedometer"></i>
                        <p> Dashboard</p>
                    </a>
                </li>

               @if(Auth::user()->role=="SuperAdmin")
                    <li class="nav-header">Users Management</li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">
                            <i class="nav-icon bi bi-people"></i>
                            <p> Users Management <i class="nav-arrow bi bi-chevron-down"></i></p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('users_management.index')}}" class="nav-link ">
                                    <i class="bi bi-chevron-double-right"></i>
                                    <p>Users</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif

                <li class="nav-header">Products</li>
                <li class="nav-item">
                    <a href="#" class="nav-link ">
                        <i class="fas fa-dollar-sign"></i>
                        <p>  Product Management <i class="nav-arrow bi bi-chevron-down"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('product_types.index')}}" class="nav-link ">
                                <i class="bi bi-chevron-double-right"></i>
                                <p>Product categories</p>
                            </a>
                            <a href="{{route('products.index')}}" class="nav-link ">
                                <i class="bi bi-chevron-double-right"></i>
                                <p>Product</p>
                            </a>
                        </li>
                    </ul>
                </li>




                <li class="nav-header">Sales</li>
                <li class="nav-item">
                    <a href="#" class="nav-link ">
                        <i class="fas fa-dollar-sign"></i>
                        <p> Sales <i class="nav-arrow bi bi-chevron-down"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('sales.index')}}" class="nav-link ">
                                <i class="bi bi-chevron-double-right"></i>
                                <p>Manage sales</p>
                            </a>
                         
                        </li>
                    </ul>
                </li>
             
             

          
         
                
            </ul> <!--end::Sidebar Menu-->
        </nav>
    </div> <!--end::Sidebar Wrapper-->
</aside> <!--end::Sidebar-->