<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
  <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
  <meta name="author" content="PIXINVENT">
  <title>@yield('title') || Zapta-Task</title>
  <link rel="apple-touch-icon" href="{{asset('admin-assets/images/ico/apple-icon-120.png')}}">
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('admin-assets/images/ico/favicon.ico')}}">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
  rel="stylesheet">
  <!--{{-- <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
  rel="stylesheet"> --}}-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toast-css/1.1.0/grid.min.css" integrity="sha512-YOGZZn5CgXgAQSCsxTRmV67MmYIxppGYDz3hJWDZW4A/sSOweWFcynv324Y2lJvY5H5PL2xQJu4/e3YoRsnPeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/vendors.css')}}">
  <!-- END VENDOR CSS-->
  <!-- BEGIN MODERN CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/app.css')}}">
  <!-- END MODERN CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/colors/palette-gradient.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/vendors/css/charts/morris.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/fonts/simple-line-icons/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/core/colors/palette-gradient.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/fonts/line-awesome/css/line-awesome.min.css')}}">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/assets/css/style.css')}}">
  <!-- END Custom CSS-->
  @yield('style')
</head>
<body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
  <!-- fixed-top-->
  <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow">
    <div class="navbar-wrapper">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
          <li class="nav-item mr-auto">
            <a class="navbar-brand" href="{{url('/admin-home')}}">
              <img class="brand-logo" alt="modern admin logo" src="{{asset('admin-assets/images/logo/logo.png')}}">
              <h3 class="brand-text">ZaptaTech Admin</h3>
            </a>
          </li>
          <!--{{-- <li class="nav-item d-none d-md-block float-right"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="toggle-icon ft-toggle-right font-medium-3 white" data-ticon="ft-toggle-right"></i></a></li> --}}-->
          <li class="nav-item d-md-none">
            <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile">
                <i class="la la-ellipsis-v"></i>
            </a>
          </li>
        </ul>
      </div>
      <div class="navbar-container content">
        <div class="collapse navbar-collapse" id="navbar-mobile">
          <ul class="nav navbar-nav mr-auto float-left">            
            <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
          </ul>
          <ul class="nav navbar-nav float-right">
            <li class="dropdown dropdown-user nav-item">
              <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                <span class="mr-1">Hello,
                  <span class="text-bold-700">
                    {{Auth::user()->name}}
                  </span>
                </span>
                <span class="avatar avatar-online">
                  <img src="{{asset('admin-assets/images/portrait/small/avatar-s-19.png')}}" alt="avatar"><i></i></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <!--<a class="dropdown-item" href="#"><i class="ft-user"></i> Edit Profile</a>-->
                <!--dropdown-divider-->
                <div class=""></div><a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><i class="ft-power"></i> Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
              </div>
            </li>
            <li class="dropdown dropdown-notification nav-item">
              <a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-bell"></i>
                <span class="badge badge-pill badge-default badge-danger badge-default badge-up badge-glow" id="newusercount"></span>
              </a>
              <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                <li class="dropdown-menu-header">
                  <h6 class="dropdown-header m-0">
                    <span class="grey darken-2">Notifications</span>
                  </h6>
                  <span class="notification-tag badge badge-default badge-danger float-right m-0"><span id="newusercount1"></span> New</span>
                </li>
                <li class="scrollable-container media-list w-100" id="append_here"> 
                  <!--
                  <a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left align-self-center"><i class="ft-alert-triangle icon-bg-circle bg-yellow bg-darken-3"></i></div>
                      <div class="media-body">
                        <h6 class="media-heading yellow darken-3">Warning notifixation</h6>
                        <p class="notification-text font-small-3 text-muted">Vestibulum auctor dapibus neque.</p>
                        <small>
                          <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time>
                        </small>
                      </div>
                    </div>
                  </a>
                  <a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left align-self-center"><i class="ft-check-circle icon-bg-circle bg-cyan"></i></div>
                      <div class="media-body">
                        <h6 class="media-heading">Complete the task</h6>
                        <small>
                          <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last week</time>
                        </small>
                      </div>
                    </div>
                  </a>
                  <a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left align-self-center"><i class="ft-file icon-bg-circle bg-teal"></i></div>
                      <div class="media-body">
                        <h6 class="media-heading">Generate monthly report</h6>
                        <small>
                          <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last month</time>
                        </small>
                      </div>
                    </div>
                  </a> -->
                </li>
                <!--<li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all notifications</a></li>-->
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class=" nav-item"><a href="{{url('/admin-home')}}"><i class="la la-home"></i><span class="menu-title" data-i18n="nav.dash.main">Dashboard</span></a>
        </li>
        <li class=" nav-item"><a href="#"><i class="la la-building"></i><span class="menu-title" data-i18n="nav.menu_levels.main">Department</span></a>
          <ul class="menu-content">
            <li><a class="menu-item" href="{{url('/admin-department/create')}}" data-i18n="nav.menu_levels.second_level">Add Department</a></li>
            <li><a class="menu-item" href="{{url('/admin-department')}}" data-i18n="nav.menu_levels.second_level">View Department</a></li>
          </ul>
        </li>
        <li class=" nav-item"><a href="#"><i class="la la-book"></i><span class="menu-title" data-i18n="nav.menu_levels.main">Subjects</span></a>
          <ul class="menu-content">
            <li><a class="menu-item" href="{{url('/admin-subject/create')}}" data-i18n="nav.menu_levels.second_level">Add Subject</a></li>
            <li><a class="menu-item" href="{{url('/admin-subject')}}" data-i18n="nav.menu_levels.second_level">View Subject</a></li>
          </ul>
        </li>
        <li class=" nav-item"><a href="#"><i class="la la-users"></i><span class="menu-title" data-i18n="nav.menu_levels.main">Student</span></a>
          <ul class="menu-content">
            <li><a class="menu-item" href="{{url('/admin-student/create')}}" data-i18n="nav.menu_levels.second_level">Add Student</a></li>
            <li><a class="menu-item" href="{{url('/admin-student')}}" data-i18n="nav.menu_levels.second_level">View Student</a></li>
          </ul>
        </li>
        <li class=" nav-item"><a href="#"><i class="la la-user-plus"></i><span class="menu-title" data-i18n="nav.menu_levels.main">Teacher</span></a>
          <ul class="menu-content">
            <li><a class="menu-item" href="{{url('/admin-teacher/create')}}" data-i18n="nav.menu_levels.second_level">Add Teacher</a></li>
            <li><a class="menu-item" href="{{url('/admin-teacher')}}" data-i18n="nav.menu_levels.second_level">View Teacher</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
          @yield('main-content')
      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <footer class="footer footer-static footer-light navbar-border navbar-shadow">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
      <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2022 </span>
    </p>
  </footer>
  @if(Auth()->user()->id==1)
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{url('js/app.js')}}"></script>
    <script>
        let channel = Echo.channel('user-registered');
        let channel2 = Echo.channel('user-logged');
        let user_numer = 0;
        channel.listen('NewUserRegisterEvent',function(data)
        {
            user_numer++;
            $('#newusercount').text(user_numer);
            $('#newusercount1').text(user_numer);
            $("#append_here").append('<a href="javascript:void(0)" ><div class="media"><div class="media-left align-self-center"><i class="ft-user icon-bg-circle bg-cyan"></i></div><div class="media-body"><h6 class="media-heading">A new user registered</h6><p class="notification-text font-small-3 text-muted">'+data.user.name+'</p><small><time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00"></time></small></div></div></a>');
        });
        channel2.listen('UserLOggedInEvent',function(data)
        {
         console.log('user logged in');
         user_numer++;
            $('#newusercount').text(user_numer);
            $('#newusercount1').text(user_numer);
            $("#append_here").append('<a href="javascript:void(0)"><div class="media"><div class="media-left align-self-center"><i class="ft-download-cloud icon-bg-circle bg-red bg-darken-1"></i></div><div class="media-body"><h6 class="media-heading red darken-1">User Logged In</h6><p class="notification-text font-small-3 text-muted">'+data.user.name+' </p></div></div></a>');
        });
    </script>
@endif
  <!-- BEGIN VENDOR JS-->
  <script src="{{asset('admin-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="{{asset('admin-assets/vendors/js/charts/chart.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('admin-assets/vendors/js/charts/raphael-min.js')}}" type="text/javascript"></script>
  <script src="{{asset('admin-assets/vendors/js/charts/morris.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('admin-assets/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js')}}"
  type="text/javascript"></script>
  <script src="{{asset('admin-assets/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js')}}"
  type="text/javascript"></script>
  <script src="{{asset('admin-assets/data/jvector/visitor-data.js')}}" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN MODERN JS-->
  <script src="{{asset('admin-assets/js/core/app-menu.js')}}" type="text/javascript"></script>
  <script src="{{asset('admin-assets/js/core/app.js')}}" type="text/javascript"></script>
  <script src="{{asset('admin-assets/js/scripts/customizer.js')}}" type="text/javascript"></script>
  <!-- END MODERN JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="{{asset('admin-assets/js/scripts/pages/dashboard-sales.js')}}" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js" integrity="sha512-lbwH47l/tPXJYG9AcFNoJaTMhGvYWhVM9YI43CT+uteTRRaiLCui8snIgyAN8XWgNjNhCqlAUdzZptso6OCoFQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- END PAGE LEVEL JS-->
  @yield('script')
</body>
</html>