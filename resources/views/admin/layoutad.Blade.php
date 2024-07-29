<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description"
    content="Sleek Dashboard - Free Bootstrap 4 Admin Dashboard Template and UI Kit. It is very powerful bootstrap admin dashboard, which allows you to build products like admin panels, content management systems and CRMs etc.">

  <title>Table - Sleek Admin Dashboard Template</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500"
    rel="stylesheet" />
  <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />
  <link href="assets/plugins/simplebar/simplebar.css" rel="stylesheet" />
  <link href="assets/plugins/nprogress/nprogress.css" rel="stylesheet" />
  <link href='assets/plugins/daterangepicker/daterangepicker.css' rel='stylesheet'>
  <link id="sleek-css" rel="stylesheet" href=" {{asset('assets/css/sleek.css')}}" />
  <link href="assets/img/favicon.png" rel="shortcut icon" />
  <script src="{{asset('assets/plugins/nprogress/nprogress.js')}}"></script>

</head>

<body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
  <script>
    NProgress.configure({ showSpinner: false });
    NProgress.start();
  </script>

    <aside class="left-sidebar bg-sidebar">
      <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
          <a href="/index.html" title="Sleek Dashboard">
            <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="30"
              height="33" viewBox="0 0 30 33">
              <g fill="none" fill-rule="evenodd">
                <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
              </g>
            </svg>

            <span class="brand-name text-truncate">PNI Dashboard</span>
          </a>
        </div>

        <!-- begin sidebar scrollbar -->
        <div class="" data-simplebar style="height: 100%;">
          <!-- sidebar menu -->
          <ul class="nav sidebar-inner" id="sidebar-menu">
            <li class="has-sub ">
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
                aria-expanded="false" aria-controls="dashboard">
                <i class="mdi mdi-view-dashboard-outline"></i>
                <span class="nav-text">Dashboard</span> <b class="caret"></b>
              </a>

              <ul class="collapse " id="dashboard" data-parent="#sidebar-menu">
                <div class="sub-menu">
                  <li class="">
                    <a class="sidenav-item-link" href="">
                      <span class="nav-text">Ecommerce</span>
                    </a>
                  </li>

                  
                </div>
              </ul>
            </li>

            <li class="has-sub ">
              <a class="sidenav-item-link" href="User/">
                <i class="mdi mdi-pencil-box-multiple"></i>
                <span class="nav-text">User Account</span> <b class="caret"></b>
              </a>

            
            </li>

            <li class="has-sub ">
              <a class="sidenav-item-link" href="products/" >
                <i class="mdi mdi-diamond-stone"></i>
                <span class="nav-text">Products</span> <b class="caret"></b>
                
              </a>

            </li>

     
           
          </ul>
        </div>

        <div class="sidebar-footer">
          <hr class="separator mb-0" />
          <div class="sidebar-footer-content">
            <h6 class="text-uppercase">
              Cpu Uses <span class="float-right">40%</span>
            </h6>

            <div class="progress progress-xs">
              <div class="progress-bar active" style="width: 40%;" role="progressbar"></div>
            </div>

            <h6 class="text-uppercase">
              Memory Uses <span class="float-right">65%</span>
            </h6>

            <div class="progress progress-xs">
              <div class="progress-bar progress-bar-warning" style="width: 65%;" role="progressbar"></div>
            </div>
          </div>
        </div>
      </div>
    </aside>

    @yield('contentad')


  
  <script src=" {{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js ')}}"></script>
  <script src=" {{asset('assets/plugins/simplebar/simplebar.min.js')}}"></script>

  <script src=' {{asset('assets/plugins/daterangepicker/moment.min.js')}}'></script>
  <script src=' {{asset('assets/plugins/daterangepicker/daterangepicker.js')}}'></script>
  <script src=' {{asset('assets/js/date-range.js')}}'></script>



  <script src=" {{asset('assets/js/sleek.js')}}"></script>
  <link href=" {{asset('assets/options/optionswitch.css')}}" rel="stylesheet">
  <script src=" {{asset('assets/options/optionswitcher.js')}}"></script>
  <script src='{{asset('assets/plugins/charts/Chart.min.js')}}'></script>
  <script src='{{asset('assets/js/chart.js')}}'></script>{{asset('')}}

    
    

<script src='{{asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js')}}'></script>
<script src='{{asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill.js')}}'></script>
<script src='{{asset('assets/js/vector-map.js')}}'></script>


</body>

</html>