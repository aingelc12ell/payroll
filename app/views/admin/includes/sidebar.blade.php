  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
            <img src="{{ URL::to('/') }}/adminlte/img/avatar3.png" class="img-circle" alt="User Image" />
        </div>
        <div class="pull-left info">
            <p>Hello, Jane</p>

            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search..."/>
            <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
            </span>
        </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
        <li class="active">
            <a href="index.html">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </a>
        </li>       
        <li class="treeview">
            <a href="{{ URL::to('admin/pages') }}">
                <i class="fa fa-bar-chart-o"></i>
                <span>Posts</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{ URL::to('admin/page') }}"><i class="fa fa-angle-double-right"></i>All Posts</a></li>
                <li><a href="pages/charts/flot.html"><i class="fa fa-angle-double-right"></i>Add New</a></li>
                <li><a href="pages/charts/inline.html"><i class="fa fa-angle-double-right"></i>Categories</a></li>
                <li><a href="pages/charts/inline.html"><i class="fa fa-angle-double-right"></i>Tags</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Media</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="pages/UI/general.html"><i class="fa fa-angle-double-right"></i>Library</a></li>
                <li><a href="pages/UI/general.html"><i class="fa fa-angle-double-right"></i>Add New</a></li>                
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-edit"></i> <span>Links</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="pages/forms/general.html"><i class="fa fa-angle-double-right"></i>All Links</a></li>
                <li><a href="pages/forms/advanced.html"><i class="fa fa-angle-double-right"></i>Add New</a></li>
                <li><a href="pages/forms/editors.html"><i class="fa fa-angle-double-right"></i>Link Categories</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="{{ URL::to('admin/pages') }}">
                <i class="fa fa-table"></i> <span>Pages</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{ URL::to('admin/page') }}"><i class="fa fa-angle-double-right"></i>All Pages</a></li>
                <li><a href="{{ URL::to('admin/page/create') }}"><i class="fa fa-angle-double-right"></i>Add New</a></li>
            </ul>
        </li>
        <li>
            <a href="pages/calendar.html">
                <i class="fa fa-calendar"></i> <span>Comments</span>
                <small class="badge pull-right bg-red">3</small>
            </a>
        </li>        
        <li class="treeview">
            <a href="#">
                <i class="fa fa-folder"></i> <span>Appearance</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="pages/examples/invoice.html"><i class="fa fa-angle-double-right"></i>Themes</a></li>
                <li><a href="pages/examples/login.html"><i class="fa fa-angle-double-right"></i>Customize</a></li>
                <li><a href="pages/examples/register.html"><i class="fa fa-angle-double-right"></i>Widgets</a></li>
                <li><a href="pages/examples/lockscreen.html"><i class="fa fa-angle-double-right"></i>Menus</a></li>
                <li><a href="pages/examples/404.html"><i class="fa fa-angle-double-right"></i>Social Media Options</a></li>
                <li><a href="pages/examples/500.html"><i class="fa fa-angle-double-right"></i>Background</a></li>
                <li><a href="pages/examples/blank.html"><i class="fa fa-angle-double-right"></i>Editor</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-folder"></i> <span>Plugins</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="pages/examples/invoice.html"><i class="fa fa-angle-double-right"></i>Add New</a></li>               
                <li><a href="pages/examples/blank.html"><i class="fa fa-angle-double-right"></i>Editor</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-folder"></i> <span>Users</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="pages/examples/invoice.html"><i class="fa fa-angle-double-right"></i>All Users</a></li>               
                <li><a href="pages/examples/blank.html"><i class="fa fa-angle-double-right"></i>Add New</a></li>
                <li><a href="pages/examples/blank.html"><i class="fa fa-angle-double-right"></i>Your Profile</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-folder"></i> <span>Tools</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="pages/examples/invoice.html"><i class="fa fa-angle-double-right"></i>Available Tools</a></li>               
                <li><a href="pages/examples/blank.html"><i class="fa fa-angle-double-right"></i>Import</a></li>
                <li><a href="pages/examples/blank.html"><i class="fa fa-angle-double-right"></i>Export</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-folder"></i> <span>Settings</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="pages/examples/invoice.html"><i class="fa fa-angle-double-right"></i>General</a></li>               
                <li><a href="pages/examples/blank.html"><i class="fa fa-angle-double-right"></i>Reading</a></li>
                <li><a href="pages/examples/blank.html"><i class="fa fa-angle-double-right"></i>Writing</a></li>
                <li><a href="pages/examples/blank.html"><i class="fa fa-angle-double-right"></i>Discussion</a></li>
                <li><a href="pages/examples/blank.html"><i class="fa fa-angle-double-right"></i>Permalinks</a></li>
            </ul>
        </li>
    </ul>
</section>