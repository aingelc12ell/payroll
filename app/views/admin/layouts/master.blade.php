<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>
        @section('browser_title')
            Dashboard
        @show
        </title>
        @include('admin.includes.headmeta')
        @section('head')
        <!-- page specific head info -->
        @show
    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        @include('admin.includes.headerlogo')
            <!-- Header Navbar: style can be found in header.less -->
             @include('admin.includes.nav')
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                @include('admin.includes.sidebar')
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                @section('content_header')
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Dashboard
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>
                @show

                <!-- Main content -->
                <section class="content">                       
                    @yield('content')
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->
        @include('admin.includes.footer')
        @section('footer')
         <!-- page specific footer scripts -->            
        @show
    </body>
</html>