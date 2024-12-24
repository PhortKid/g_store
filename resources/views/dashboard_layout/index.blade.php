
<!DOCTYPE html>
<html lang="en" contenteditable="true4"> 

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>G store Tower | Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="G store Towe Dashboard">
    <meta name="author" content="G store">
    <meta name="description" content="G store">
    <meta name="keywords" content="G store,G store,G store">
    
    <link rel="stylesheet" href="{{asset('custom.css')}}">
    <link rel="stylesheet" href="{{asset('assets/adminkit/other/index.css')}}" integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q=" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/adminkit/other/overlayscrollbars.min.css')}}" integrity="sha256-dSokZseQNT08wYEWiz5iLI8QPlKxG+TswNRD8k35cpg=" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.min.css" integrity="sha256-Qsx5lrStHZyR9REqhUF8iQt73X06c8LGIUPzpOhwRrI=" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/adminkit/css/adminlte.css')}}">
    <link rel="stylesheet" href="{{asset('assets/adminkit/other/apexcharts.css')}}" integrity="sha256-4MX+61mt9NVvvuPjUWdUdyfZfxSB1/Rf9WtqRHgG5S0=" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/adminkit/other/jsvectormap.min.css')}}" integrity="sha256-+uGLJmmTKOqBr+2E6KDYs/NRsHxSkONXFHUL0fy2O/4=" crossorigin="anonymous">

    <!-- Data Table -->
    <link rel="stylesheet" href="{{ asset('assets/datatable/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/datatables/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/datatables/buttons.bootstrap4.min.css') }}">


    <!-- chosen -->
    <link href="{{asset('chosen/chosen.min.css')}}" rel="stylesheet" />

    <link rel="stylesheet" href="{{asset('fontawesome-free/css/all.min.css')}}">

    <link rel="stylesheet" href="{{ asset('vendor/flasher/toastr.min.css') }}">

    
    <link rel="stylesheet" href="https://printjs-4de6.kxcdn.com/print.min.css">
  
    @if(isset($sb2admin))
    <link rel="stylesheet" href="https://startbootstrap.github.io/startbootstrap-sb-admin-2/css/sb-admin-2.min.css">
    @endif
    

<!-- hii style ni kwaajili ya table ya reservation -->
<style>
 /* Styles for the printable area 
 .printable-area {
        padding: 20px;
        font-family: Arial, sans-serif;
        border: 1px solid #ccc;
        margin-top: 10px;
    }

    .printable-area strong {
        color: #333;
    }

   
    @media print {
        .modal-header, .modal-footer, .btn {
            display: none;
        }
        .printable-area {
            border: none;
            margin: 0;
            padding: 0;
        }
    }

 end  */

 .printable-area {
        font-family: Arial, sans-serif;
        margin-top: 20px;
    }

    .table {
        width: 100%;
        border: 1px solid #ddd;
        border-collapse: collapse;
    }

    .table th, .table td {
        padding: 10px;
        text-align: left;
        border: 1px solid #ddd;
    }

    .table th {
        background-color: #f4f4f4;
    }

    /* Hide elements that should not be printed */
    @media print {
        .modal-header, .modal-footer, .btn {
            display: none;
        }
        .printable-area {
            border: none;
            margin: 0;
            padding: 0;
        }
        .table th, .table td {
            padding: 12px;
            border: 1px solid #000;
        }
    }
    /*        */
  .table-wrapper {
    max-height: 400px; /* Adjust as needed */
    overflow-y: auto; /* Enable vertical scrolling */
    border: 1px solid #dee2e6;
    border-radius: 0.25rem;
    padding: 10px; /* Add padding around the content */
  }

  .table-container {
    display: block;
    width: 100%;
    margin-bottom: 20px; /* Space between reservations */
    border-bottom: 1px solid #dee2e6; /* Border between reservations */
    padding-bottom: 10px; /* Padding at the bottom */
  }

  .row {
    display: flex;
    border-bottom: 1px solid #dee2e6;
    margin-bottom: 5px; /* Space between rows */
  }

  .name {
    flex: 1;
    padding: 10px;
    font-weight: bold;
    background-color: #f8f9fa;
    border-right: 1px solid #dee2e6;
    margin-right: 10px; /* Add margin to the right of the name column */
  }

  .value {
    flex: 2;
    padding: 10px;
  }

  .row:last-child {
    border-bottom: none;
  }
</style>

<!-- hii style ni kwaajili ya table ya reservation -->
  


</head> 
<!-- bg-body-tertiary -->
<body class="layout-fixed sidebar-expand-lg  ">

    <div class="app-wrapper"> <!--begin::Header-->
        <nav class="app-header navbar navbar-expand bg-body " > <!--begin::Container-->
            <div class="container-fluid"> <!--begin::Start Navbar Links-->
                <ul class="navbar-nav">
                    <li class="nav-item"> <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button"> <i class="bi bi-list"></i>  </a> </li>

                </ul> <!--end::Start Navbar Links--> <!--begin::End Navbar Links-->
                <ul class="navbar-nav ms-auto" > <!--begin::Navbar Search-->
                   <?php /* <li class="nav-item dropdown"> <a class="nav-link" data-bs-toggle="dropdown" href="#"> <i class="bi bi-bell-fill"></i> <span class="navbar-badge badge text-bg-warning">--</span> </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end"> <span class="dropdown-item dropdown-header">(--)Notifications</span>
                            <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"> <i class="bi bi-envelope me-2"></i> new Booking
                                <span class="float-end text-secondary fs-7">time</span> </a>
                         
                            <div class="dropdown-divider"></div> <a href="#" class="dropdown-item dropdown-footer">
                                See All Notifications
                            </a>
                        </div>
                    </li> */ ?> <!--end::Notifications Dropdown Menu--> <!--begin::Fullscreen Toggle-->
                    <li class="nav-item"> <a class="nav-link" href="#" data-lte-toggle="fullscreen"> <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i> <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none;"></i> </a> </li> <!--end::Fullscreen Toggle--> <!--begin::User Menu Dropdown-->
                    <li class="nav-item dropdown user-menu"> <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"> <?php /*<img src="/storage/profile_image/{{ Auth::user()->profile_image }}   " class="user-image rounded-circle shadow" alt="<?php /*{{auth()->user()->firstname}}  image"> */ ?> <span class="d-none d-md-inline"> {{ Auth::user()->name }}  </span> </a>
                        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end"> <!--begin::User Image-->
                            <li class="user-header text-bg-primary"> <img src="/logo/logo.jpeg" class="rounded-circle shadow" alt="{{auth()->user()->name}}  image"> 
                                <p>
                                {{ Auth::user()->name }} - {{ Auth::user()->role }}
                                    <small>Created at {{ Auth::user()->created_at }}</small>   
                                </p>
                            </li> <!--end::User Image--> <!--begin::Menu Body-->
                           
                            <li class="user-footer"> <a href="{{route('myprofile.index')}} " class="btn btn-default btn-flat">Profile</a> <!-- <a href="/logout" class="btn btn-default btn-flat float-end">Sign out</a> -->
                        
                            <div class="btn btn-default btn-flat float-end text-dark">
                            <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                            </div>
           
                        
                        </li> <!--end::Menu Footer-->
                        </ul>
                    </li> <!--end::User Menu Dropdown-->
                </ul> <!--end::End Navbar Links-->
            </div> <!--end::Container-->
        </nav> <!--end::Header--> <!--begin::Sidebar-->
        <!-- bg-body-secondary -->


    @include('dashboard_layout.sidebar')


        <main class="app-main"> <!--begin::App Content Header-->
            <div class="app-content-header"> <!--begin::Container-->
                <div class="container-fluid"> <!--begin::Row-->
                    <div class="row">
                        <div class="col-sm-6">
                           <!-- <h3 class="mb-0">Dashboard</h3>-->
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <!--<li class="breadcrumb-item"><a href="#">Home</a></li>-->
                               <!-- <li class="breadcrumb-item active" aria-current="page">
                                    Dashboard
                                </li> -->
                            </ol>
                        </div>
                    </div> <!--end::Row-->
                </div> <!--end::Container-->
            </div> <!--end::App Content Header--> <!--begin::App Content-->
            <div class="app-content"> <!--begin::Container-->
                <div class="container-fluid"> <!--begin::Row-->
                    

                    @include('dashboard_layout.message')
                    @yield('content')


                </div> <!--end::Container-->
            </div> <!--end::App Content-->
        </main> <!--end::App Main--> <!--begin::Footer-->
        <footer class="app-footer" > <!--begin::To the end-->
            <div class="float-end d-none d-sm-inline">By</div> <!--end::To the end--> <!--begin::Copyright--> <strong>
                Copyright &copy; 2024-2025&nbsp;
                <a href="#" class="text-decoration-none">G store </a>.
            </strong>
            All rights reserved.
            <!--end::Copyright-->
        </footer> <!--end::Footer-->
    </div> <!--end::App Wrapper--> <!--begin::Script--> <!--begin::Third Party Plugin(OverlayScrollbars)-->
@include('dashboard_layout.script')
</body><!--end::Body-->


</html>