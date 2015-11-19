@extends('layouts.plane')

@section('body')
<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">ACB 121 CMS</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                </li>
                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
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
                <li {{ (Request::is('/') ? 'class="active"' : '') }}>
                    <a href="{{ url ('') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-users fa-fw"></i> Members<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li {{ (Request::is('*addmember') ? 'class="active"' : '') }}>
                            <a href="{{ url ('addmember') }}">Add Member</a>
                        </li>
                        <li {{ (Request::is('*panels') ? 'class="active"' : '') }}>
                            <a href="{{ url ('panels') }}">Search Member</a>
                        </li>
                        <li {{ (Request::is('*panels') ? 'class="active"' : '') }}>
                            <a href="{{ url ('panels') }}">Export Members</a>
                        </li>
                        <li {{ (Request::is('*panels') ? 'class="active"' : '') }}>
                            <a href="{{ url ('panels') }}">Generate Email Lists</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-calendar fa-fw"></i> Fixtures/Events<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li {{ (Request::is('*panels') ? 'class="active"' : '') }}>
                            <a href="{{ url ('panels') }}">View Calendar</a>
                        </li>
                        <li {{ (Request::is('*panels') ? 'class="active"' : '') }}>
                            <a href="{{ url ('panels') }}">View List</a>
                        </li>
                        <li>
                            <a href="#">Fixtures <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li {{ (Request::is('*panels') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('panels') }}">Add Fixture</a>
                                </li>
                                <li {{ (Request::is('*panels') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('panels') }}">Search Fixtures</a>
                                </li>
                                <li {{ (Request::is('*panels') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('panels') }}">Export Fixtures</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Viewing Parties <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li {{ (Request::is('*panels') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('panels') }}">Add Viewing Party</a>
                                </li>
                                <li {{ (Request::is('*panels') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('panels') }}">Add Viewing Party Location</a>
                                </li>
                                <li {{ (Request::is('*panels') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('panels') }}">Search Viewing Party</a>
                                </li>
                                <li {{ (Request::is('*panels') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('panels') }}">Export Viewing Parties</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-tag fa-fw"></i> Merchandise<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">Inventory <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li {{ (Request::is('*panels') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('panels') }}">Add Inventory</a>
                                </li>
                                <li {{ (Request::is('*panels') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('panels') }}">Search Inventory</a>
                                </li>
                                <li {{ (Request::is('*panels') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('panels') }}">Export Inventory</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Orders <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li {{ (Request::is('*panels') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('panels') }}">Add Order</a>
                                </li>
                                <li {{ (Request::is('*panels') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('panels') }}">Search Orders</a>
                                </li>
                                <li {{ (Request::is('*panels') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('panels') }}">Export Orders</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-ticket fa-fw"></i> Tickets<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li {{ (Request::is('*panels') ? 'class="active"' : '') }}>
                            <a href="{{ url ('panels') }}">Add Order</a>
                        </li>
                        <li {{ (Request::is('*panels') ? 'class="active"' : '') }}>
                            <a href="{{ url ('panels') }}">Process Orders</a>
                        </li>
                        <li {{ (Request::is('*panels') ? 'class="active"' : '') }}>
                            <a href="{{ url ('panels') }}">Search Orders</a>
                        </li>
                        <li {{ (Request::is('*panels') ? 'class="active"' : '') }}>
                            <a href="{{ url ('panels') }}">Export Orders</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bullhorn fa-fw"></i> Inventory<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li {{ (Request::is('*panels') ? 'class="active"' : '') }}>
                            <a href="{{ url ('panels') }}">Add Item</a>
                        </li>
                        <li {{ (Request::is('*panels') ? 'class="active"' : '') }}>
                            <a href="{{ url ('panels') }}">Search Inventory</a>
                        </li>
                        <li {{ (Request::is('*panels') ? 'class="active"' : '') }}>
                            <a href="{{ url ('panels') }}">Export Inventory</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-flag-o fa-fw"></i> Tifo<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li {{ (Request::is('*panels') ? 'class="active"' : '') }}>
                            <a href="{{ url ('panels') }}">Add Tifo Event</a>
                        </li>
                        <li {{ (Request::is('*panels') ? 'class="active"' : '') }}>
                            <a href="{{ url ('panels') }}">Search Tifo Events</a>
                        </li>
                        <li {{ (Request::is('*panels') ? 'class="active"' : '') }}>
                            <a href="{{ url ('panels') }}">Add Tifo Location</a>
                        </li>
                        <li {{ (Request::is('*panels') ? 'class="active"' : '') }}>
                            <a href="{{ url ('panels') }}">earch Tifo Location</a>
                        </li>
                        <li {{ (Request::is('*panels') ? 'class="active"' : '') }}>
                            <a href="{{ url ('panels') }}">Log Tifo Hours</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-male fa-fw"></i> Contact<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li {{ (Request::is('*panels') ? 'class="active"' : '') }}>
                            <a href="{{ url ('panels') }}">Add Contact</a>
                        </li>
                        <li {{ (Request::is('*panels') ? 'class="active"' : '') }}>
                            <a href="{{ url ('panels') }}">Search Contacts</a>
                        </li>
                        <li {{ (Request::is('*panels') ? 'class="active"' : '') }}>
                            <a href="{{ url ('panels') }}">View Contacts</a>
                        </li>
                        <li {{ (Request::is('*panels') ? 'class="active"' : '') }}>
                            <a href="{{ url ('panels') }}">Export Contacts</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-user fa-fw"></i> Users Admin<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li {{ (Request::is('*panels') ? 'class="active"' : '') }}>
                            <a href="{{ url ('panels') }}">Add User</a>
                        </li>
                        <li {{ (Request::is('*panels') ? 'class="active"' : '') }}>
                            <a href="{{ url ('panels') }}">Search Users</a>
                        </li>
                    </ul>
                </li>


            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">@yield('page_heading')</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row">
            @yield('section')
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@stop