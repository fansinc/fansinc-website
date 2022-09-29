<!DOCTYPE html>
<html>



    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Fansinc</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <!-- <link href="assets/img/favicon.png" rel="icon"> -->
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="assets/css/style.css" rel="stylesheet">

        <!-- =======================================================
        * Template Name: NewBiz - v4.7.0
        * Template URL: https://bootstrapmade.com/newbiz-bootstrap-business-template/
        * Author: BootstrapMade.com
        * License: https://bootstrapmade.com/license/
        ======================================================== -->
      </head>

<!-- Menu horizontal fixed layout -->




<body>

<div class="loader-bg">
<div class="loader-bar"></div>
</div>

<div id="pcoded" class="pcoded">
<div class="pcoded-overlay-box"></div>
<div class="pcoded-container navbar-wrapper">

<nav class="navbar header-navbar pcoded-header">
<div class="navbar-wrapper">
<div class="navbar-logo">
<a href="#">
<!-- <img class="img-fluid" src="{{ asset('png/logo.png')}}" alt="Theme-Logo" /> -->
<h5>The Textile</h5>
</a>
<a class="mobile-menu" id="mobile-collapse" href="#">
<i class="feather icon-menu icon-toggle-right"></i>
</a>
<a class="mobile-options waves-effect waves-light">
<i class="feather icon-more-horizontal"></i>
</a>
</div>
<div class="navbar-container container-fluid">
<ul class="nav-left " style="width:40%!important;">
    <form action="{{ route('getcompany.ajax') }}" class="swa-confirm" method="post" id="main" enctype="multipart/form-data">
    @csrf


    <div class="form-group row">
    <div class="col-sm-4 mt-3 ">
<?php  $cid =session()->get('company_id');?>
        <select id="coun" class="js-example-basic-single col-sm-12 form-control selectric" name="company_id" placeholder="status" required>
            <option value="" disabled>Select</option>

            @foreach($company as $company)
            {{-- <option value="{{ $company['id'] }}" {{ (old("id") == $company['id'] ? "selected":"") }}>{{ $company['name'] }}</option> --}}

            <option value="{{ $company['id'] }}" {{ ($cid == $company['id']) ? "selected":(old("id") == $company['id'] ? "selected":"") }}>{{ $company['name'] }}</option>
            @endforeach


        </select>
    </div>
    <button type="submit" id="submit" class="btn btn-primary mt-2 ss">Submit</button>
    </div>

    </form>
<li class="header-search" style="display: none;">
<div class="main-search morphsearch-search">
<div class="input-group">
<span class="input-group-prepend search-close">
<i class="feather icon-x input-group-text"></i>
</span>
<input style="display: none;" type="text" class="form-control" placeholder="Enter Keyword">
<span class="input-group-append search-btn">
<!-- <i class="feather icon-search input-group-text"></i> -->
</span>
</div>
</div>
</li>
<li>
<a href="#!"  class="waves-effect waves-light">
<!-- <i class="full-screen feather icon-maximize"></i> -->
</a>
</li>
</ul>
<ul class="nav-right">
<li class="header-notification">
<!-- <div class="dropdown-primary dropdown">
<div class="dropdown-toggle" data-toggle="dropdown">
<i class="feather icon-bell"></i>
<span class="badge bg-c-red">5</span>
</div>
<ul class="show-notification notification-view dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
<li>
<h6>Notifications</h6>
<label class="label label-danger">New</label>
</li>
<li>
<div class="media">
<img class="img-radius" src="{{ asset('jpg/avatar-4.jpg')}}" alt="Generic placeholder image">
<div class="media-body">
<h5 class="notification-user">John Doe</h5>
<p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
<span class="notification-time">30 minutes ago</span>
</div>
</div>
</li>
<li>
<div class="media">
<img class="img-radius" src="{{ asset('jpg/avatar-3.jpg')}}" alt="Generic placeholder image">
<div class="media-body">
<h5 class="notification-user">Joseph William</h5>
<p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
<span class="notification-time">30 minutes ago</span>
</div>
</div>
</li>
<li>
<div class="media">
<img class="img-radius" src="{{ asset('jpg/avatar-4.jpg')}}" alt="Generic placeholder image">
<div class="media-body">
<h5 class="notification-user">Sara Soudein</h5>
<p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
<span class="notification-time">30 minutes ago</span>
</div>
</div>
</li>
</ul>
 </div> -->
</li>
<li class="header-notification">
<!-- <div class="dropdown-primary dropdown">
<div class="displayChatbox dropdown-toggle" data-toggle="dropdown">
<i class="feather icon-message-square"></i>
<span class="badge bg-c-green">3</span>
</div>
</div> -->
</li>
<li class="user-profile header-notification offset-3">
<div class="dropdown-primary dropdown">
<div class="dropdown-toggle" data-toggle="dropdown">
<!-- <img src="{{ asset('jpg/avatar-4.jpg')}}" class="img-radius" alt="User-Profile-Image"> -->
<span>{{  ucfirst(session('username')) }}</span>
<i class="feather icon-chevron-down"></i>
</div>
<ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
<!-- <li>
<a href="#!">
<i class="feather icon-settings"></i> Settings
</a>
</li> -->
<li>
<a href="{{url('show_profile')}}">
<i class="feather icon-user"></i> Profile
</a>
</li>
<!-- <li>
<a href="email-inbox.html">
<i class="feather icon-mail"></i> My Messages
</a>
</li>
<li>
<a href="auth-lock-screen.html">
<i class="feather icon-lock"></i> Lock Screen
</a>
</li> -->
<li>
<a class="dropdown-item {{ (request()->is('logout')) ? 'active' : '' }}" href="{{ route('logout') }}"><i class="feather icon-log-out"></i> Logout</a>
<!-- <a href="auth-sign-in-social.html">
<i class="feather icon-log-out"></i> Logout
</a> -->
</li>
</ul>
</div>
</li>
</ul>
</div>
</div>
</nav>

<div id="sidebar" class="users p-chat-user showChat">
<div class="had-container">
<div class="p-fixed users-main">
<div class="user-box">
<div class="chat-search-box">
<a class="back_friendlist">
<i class="feather icon-x"></i>
</a>
<div class="right-icon-control">
<div class="input-group input-group-button">
<input type="text" id="search-friends" name="footer-email" class="form-control" placeholder="Search Friend">
<div class="input-group-append">
<button class="btn btn-primary waves-effect waves-light" type="button"><i class="feather icon-search"></i></button>
</div>
 </div>
</div>
</div>
<div class="main-friend-list">
<div class="media userlist-box waves-effect waves-light" data-id="1" data-status="online" data-username="Josephin Doe">
<a class="media-left" href="#!">
<img class="media-object img-radius img-radius" src="jpg/avatar-3.jpg" alt="Generic placeholder image ">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="chat-header">Josephin Doe</div>
</div>
</div>
<div class="media userlist-box waves-effect waves-light" data-id="2" data-status="online" data-username="Lary Doe">
<a class="media-left" href="#!">
<img class="media-object img-radius" src="jpg/avatar-2.jpg" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Lary Doe</div>
</div>
</div>
<div class="media userlist-box waves-effect waves-light" data-id="3" data-status="online" data-username="Alice">
<a class="media-left" href="#!">
<img class="media-object img-radius" src="jpg/avatar-4.jpg" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Alice</div>
</div>
</div>
<div class="media userlist-box waves-effect waves-light" data-id="4" data-status="offline" data-username="Alia">
<a class="media-left" href="#!">
<img class="media-object img-radius" src="jpg/avatar-3.jpg" alt="Generic placeholder image">
<div class="live-status bg-default"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Alia<small class="d-block text-muted">10 min ago</small></div>
</div>
</div>
<div class="media userlist-box waves-effect waves-light" data-id="5" data-status="offline" data-username="Suzen">
<a class="media-left" href="#!">
<img class="media-object img-radius" src="jpg/avatar-2.jpg" alt="Generic placeholder image">
<div class="live-status bg-default"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Suzen<small class="d-block text-muted">15 min ago</small></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="showChat_inner">
<div class="media chat-inner-header">
<a class="back_chatBox">
<i class="feather icon-x"></i> Josephin Doe
</a>
</div>
<div class="main-friend-chat">
<div class="media chat-messages">
<a class="media-left photo-table" href="#!">
<img class="media-object img-radius img-radius m-t-5" src="jpg/avatar-2.jpg" alt="Generic placeholder image">
</a>
<div class="media-body chat-menu-content">
<div class="">
<p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
</div>
<p class="chat-time">8:20 a.m.</p>
</div>
</div>
<div class="media chat-messages">
<div class="media-body chat-menu-reply">
<div class="">
<p class="chat-cont">Ohh! very nice</p>
</div>
<p class="chat-time">8:22 a.m.</p>
</div>
</div>
<div class="media chat-messages">
<a class="media-left photo-table" href="#!">
<img class="media-object img-radius img-radius m-t-5" src="jpg/avatar-2.jpg" alt="Generic placeholder image">
</a>
<div class="media-body chat-menu-content">
<div class="">
<p class="chat-cont">can you come with me?</p>
</div>
<p class="chat-time">8:20 a.m.</p>
</div>
</div>
</div>
<div class="chat-reply-box">
<div class="right-icon-control">
<div class="input-group input-group-button">
<input type="text" class="form-control" placeholder="Write hear . . ">
<div class="input-group-append">
<button class="btn btn-primary waves-effect waves-light" type="button"><i class="feather icon-message-circle"></i></button>
</div>
</div>
</div>
</div>
</div>

<div class="pcoded-main-container">
<div class="pcoded-wrapper">

<nav class="pcoded-navbar">
<div class="pcoded-inner-navbar">
<ul class="pcoded-item">

<li class="pcoded-hasmenu">
<a href="{{url('dashboard')}}" class="waves-effect waves-dark">
<span class="pcoded-micon"><i class="fa fa-tasks"></i></span>
<span class="pcoded-mtext">Dashboard</span>
</a>
</li>








<li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon"><i class="fa fa-envelope"></i></span>
<span class="pcoded-mtext">Master</span>
</a>
<ul class="pcoded-submenu">
<li class=" ">
<a href="{{url('user_list')}}" class="waves-effect waves-dark">
<span class="pcoded-mtext">Stock</span>
</a>
</li>

<li class=" ">
<a href="{{ url('customer_list')}}" class="waves-effect waves-dark">
<span class="pcoded-mtext">Customers</span>
</a>
</li>
<li class=" ">
<a href="{{url('product_list')}}" class="waves-effect waves-dark">
<span class="pcoded-mtext">Products</span>
</a>
</li>

<li class=" ">
<a href="{{url('variant_list')}}" class="waves-effect waves-dark">
<span class="pcoded-mtext">Variants</span>
</a>
</li>
{{-- <li class=" ">
<a href="{{url('permission_list')}}" class="waves-effect waves-dark">
<span class="pcoded-mtext">Weavers</span>
</a>
</li> --}}

<li class="pcoded-hasmenu">
    <a href="javascript:void(0)" class="waves-effect waves-dark">
    <span class="pcoded-mtext">Weavers</span>
    </a>
    <ul class="pcoded-submenu">


    <li class=" ">
    <a href="{{url('weaver_list')}}" class="waves-effect waves-dark">
    <span class="pcoded-mtext">Weaver</span>
    </a>
    </li>
    <li class=" ">
    <a href="{{url('weaver_loom_list')}}" class="waves-effect waves-dark">
    <span class="pcoded-mtext">Weaver Looms</span>
    </a>
    </li>

    <li class=" ">
    <a href="{{url('weaver_holding_list')}}" class="waves-effect waves-dark">
    <span class="pcoded-mtext">Weaver Holdings</span>
    </a>
    </li>
    <li class=" ">
    <a href="{{url('weaver_output_list')}}" class="waves-effect waves-dark">
    <span class="pcoded-mtext">Weaver Output</span>
    </a>
    </li>
    <li class=" ">
        <a href="{{url('wage_tracker_list')}}" class="waves-effect waves-dark">
        <span class="pcoded-mtext">Weaver Wage Tracker</span>
        </a>
        </li>

        <li class=" ">
            <a href="{{url('advance_tracker_list')}}" class="waves-effect waves-dark">
            <span class="pcoded-mtext">Weaver Advance Tracker</span>
            </a>
            </li>


        <li class=" ">
            <a href="{{url('finance_tracker_list')}}" class="waves-effect waves-dark">
            <span class="pcoded-mtext">Weaver Finance Tracker</span>
            </a>
            </li>

    </ul>
    </li>

<li class=" ">
<a href="{{url('permission_list')}}" class="waves-effect waves-dark">
<span class="pcoded-mtext">Suppliers</span>
</a>
</li>

<li class=" ">
<a href="{{url('permission_list')}}" class="waves-effect waves-dark">
<span class="pcoded-mtext">Processors</span>
</a>
</li>

<li class=" ">
<a href="{{url('permission_list')}}" class="waves-effect waves-dark">
<span class="pcoded-mtext">Banking</span>
</a>
</li>
<li class=" ">
    <a href="{{url('agent_commission_list')}}" class="waves-effect waves-dark">
    <span class="pcoded-mtext">Agent Commission</span>
    </a>
    </li>

<li class=" ">
<a href="{{url('agent_list')}}" class="waves-effect waves-dark">
<span class="pcoded-mtext">Agents</span>
</a>
</li>

</ul>
</li>













<!-- <li class="pcoded-hasmenu">
<a href="{{url('enquiry_list')}}" class="waves-effect waves-dark">
<span class="pcoded-micon"><i class="fa fa-envelope"></i></span>
<span class="pcoded-mtext">Master</span>
</a>
</li> -->

<li class="pcoded-hasmenu">
<a href="{{url('order_list')}}" class="waves-effect waves-dark">
<span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
<span class="pcoded-mtext">Orders
</span>
</a>
</li>


<li class="pcoded-hasmenu">
    <a href="{{url('delivery_list')}}" class="waves-effect waves-dark">
    <span class="pcoded-micon"><i class="fa fa-location-arrow"></i></span>
    <span class="pcoded-mtext">Delivery
    </span>
    </a>
    </li>
{{-- <li class="pcoded-hasmenu">
<a href="{{url('invoice_list')}}" class="waves-effect waves-dark">
<span class="pcoded-micon"><i class="fa fa-location-arrow"></i></span>
<span class="pcoded-mtext">Invoice</span>
</a>
</li> --}}


<li class="pcoded-hasmenu">
    <a href="javascript:void(0)" class="waves-effect waves-dark">
    <span class="pcoded-micon"><i class="fa fa-location-arrow"></i></span>
    <span class="pcoded-mtext">Invoices</span>
    </a>
    <ul class="pcoded-submenu">


    <li class=" ">
    <a href="{{url('invoice_list')}}" class="waves-effect waves-dark">
    <span class="pcoded-mtext">Invoice</span>
    </a>
    </li>
    <li class=" ">
    <a href="{{url('direct_invoice_list')}}" class="waves-effect waves-dark">
    <span class="pcoded-mtext">Direct Invoice</span>
    </a>
    </li>
    </ul>
</li>
<!--
<li class="pcoded-hasmenu">
<a href="{{url('commission_list')}}" class="waves-effect waves-dark">
<span class="pcoded-micon"><i class="fa fa-life-ring"></i></span>
<span class="pcoded-mtext">Reports</span>
</a>
</li> -->

<li class="pcoded-hasmenu">
    <a href="javascript:void(0)" class="waves-effect waves-dark">
    <span class="pcoded-micon"><i class="fa fa-credit-card"></i></span>
    <span class="pcoded-mtext">Payments</span>
    </a>
    <ul class="pcoded-submenu">


    <li class=" ">
    <a href="{{url('customer_payment_list')}}" class="waves-effect waves-dark">
    <span class="pcoded-mtext">Customer Payment</span>
    </a>
    </li>
    <li class=" ">
    <a href="{{url('customer_settlement_list')}}" class="waves-effect waves-dark">
    <span class="pcoded-mtext">Customer Settlement</span>
    </a>
    </li>
    {{-- <li class=" ">
    <a href="{{url('permission_list')}}" class="waves-effect waves-dark">
    <span class="pcoded-mtext">Permission</span>
    </a>
    </li> --}}

    </ul>
    </li>

<li class="pcoded-hasmenu">
<a href="{{url('dashboard')}}" class="waves-effect waves-dark">
<span class="pcoded-micon"><i class="fa fa-line-chart"></i></span>
<span class="pcoded-mtext">Report</span>
</a>
</li>
<!--
<li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon"><i class="feather icon-clipboard"></i></span>
<span class="pcoded-mtext">Config</span>
</a>
<ul class="pcoded-submenu">


<li class=" ">
<a href="{{url('buyer_list')}}" class="waves-effect waves-dark">
<span class="pcoded-mtext">Buyer</span>
</a>
</li>
<li class=" ">
<a href="{{url('seller_list')}}" class="waves-effect waves-dark">
<span class="pcoded-mtext">Seller</span>
</a>
</li>
<li class=" ">
<a href="{{url('status_list')}}" class="waves-effect waves-dark">
<span class="pcoded-mtext">Status</span>
</a>
</li>
<li class=" ">
<a href="{{url('config_order_status_list')}}" class="waves-effect waves-dark">
<span class="pcoded-mtext">Order Status</span>
</a>
</li>
<li class=" ">
<a href="{{url('count_list')}}" class="waves-effect waves-dark">
<span class="pcoded-mtext">Count</span>
</a>
</li>
<li class=" ">
<a href="{{url('rate_unit_list')}}" class="waves-effect waves-dark">
<span class="pcoded-mtext">Rate Per Unit</span>
</a>
</li>

<li class=" ">
<a href="{{url('cofig_quantity_list')}}" class="waves-effect waves-dark">
<span class="pcoded-mtext">Quantity Unit</span>
</a>
</li>

<li class=" ">
<a href="{{url('seller_commission_list')}}" class="waves-effect waves-dark">
<span class="pcoded-mtext">Seller Commission</span>
</a>
</li>

<li class=" ">
<a href="{{url('buyer_commission_list')}}" class="waves-effect waves-dark">
<span class="pcoded-mtext">Buyer Commission</span>
</a>
</li>
<li class=" ">
<a href="{{url('company_list')}}" class="waves-effect waves-dark">
<span class="pcoded-mtext">Company</span>
</a>
</li>
<li class=" ">
<a href="{{url('payment_mode_list')}}" class="waves-effect waves-dark">
<span class="pcoded-mtext">Payment Mode</span>
</a>
</li>
<li class=" ">
<a href="{{url('payment_status_list')}}" class="waves-effect waves-dark">
<span class="pcoded-mtext">Payment Status</span>
</a>
</li>
<li class=" ">
<a href="{{url('tax_list')}}" class="waves-effect waves-dark">
<span class="pcoded-mtext">Tax</span>
</a>
</li>
<li class=" ">
<a href="{{url('delivery_status_list')}}" class="waves-effect waves-dark">
<span class="pcoded-mtext">Delivery Status</span>
</a>
</li>

</ul>
</li> -->


<li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon"><i class="feather icon-clipboard"></i></span>
<span class="pcoded-mtext">Config</span>
</a>
<ul class="pcoded-submenu">
<li class=" ">
<a href="{{ url('Prodcat_list')}}" class="waves-effect waves-dark">
<span class="pcoded-mtext">Product Category</span>
</a>
</li>
<li class=" ">
<a href="{{ url('subcategory_list')}}" class="waves-effect waves-dark">
<span class="pcoded-mtext">Product Subcategory</span>
</a>
</li>


<li class=" ">
    <a href="{{ url('tax_list')}}" class="waves-effect waves-dark">
    <span class="pcoded-mtext">Tax</span>
    </a>
    </li>

<li class=" ">
    <a href="{{url('company_list')}}" class="waves-effect waves-dark">
    <span class="pcoded-mtext">Company</span>
    </a>
    </li>

    <li class=" ">
        <a href="{{url('color_list')}}" class="waves-effect waves-dark">
        <span class="pcoded-mtext">Color</span>
        </a>
        </li>



        <li class=" ">
            <a href="{{url('size_list')}}" class="waves-effect waves-dark">
            <span class="pcoded-mtext">Size</span>
            </a>
            </li>

<li class=" ">
    <a href="{{url('cofig_quantity_list')}}" class="waves-effect waves-dark">
    <span class="pcoded-mtext">Quantity Unit</span>
    </a>
    </li>

 <li class=" ">
<a href="{{url('delivery_mode_list')}}" class="waves-effect waves-dark">
<span class="pcoded-mtext">Delivery Mode</span>
</a>
</li>
<li class=" ">
    <a href="{{ url('weaver_category_list')}}" class="waves-effect waves-dark">
    <span class="pcoded-mtext">Weaver</span>
    </a>
    </li>




<li class=" ">
<a href="{{ url('payment_mode_list')}}" class="waves-effect waves-dark">
<span class="pcoded-mtext">Payment Mode</span>
</a>
</li>
<!-- <li class=" ">
<a href="{{ url('rate_unit_list')}}" class="waves-effect waves-dark">
<span class="pcoded-mtext">Rate Per Unit</span>
</a>
</li>

<li class=" ">
<a href="{{url('cofig_quantity_list')}}" class="waves-effect waves-dark">
<span class="pcoded-mtext">Quantity Unit</span>
</a>
</li>
<li class=" ">
<a href="{{url('company_list')}}" class="waves-effect waves-dark">
<span class="pcoded-mtext">Company</span>
</a>
</li>
<li class=" ">
<a href="{{url('payment_mode_list')}}" class="waves-effect waves-dark">
<span class="pcoded-mtext">Payment Mode</span>
</a>
</li> -->
<!-- <li class=" ">
<a href="{{url('tax_list')}}" class="waves-effect waves-dark">
<span class="pcoded-mtext">Tax</span>
</a>
</li> -->

<li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-mtext">Status</span>
</a>
<ul class="pcoded-submenu">


<li class=" ">
<a href="{{url('status_list')}}" class="waves-effect waves-dark">
<span class="pcoded-mtext">Status</span>
</a>
</li>
<li class=" ">
<a href="{{url('config_order_status_list')}}" class="waves-effect waves-dark">
<span class="pcoded-mtext">Order Status</span>
</a>
</li>

<li class=" ">
<a href="{{url('payment_status_list')}}" class="waves-effect waves-dark">
<span class="pcoded-mtext">Payment Status</span>
</a>
</li>
<li class=" ">
<a href="{{url('delivery_status_list')}}" class="waves-effect waves-dark">
<span class="pcoded-mtext">Delivery Status</span>
</a>
</li>
</ul>
</li>



<!-- <li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-mtext">Commission</span>
</a>
<ul class="pcoded-submenu">


<li class=" ">
<a href="{{url('buyer_commission_list')}}" class="waves-effect waves-dark">
<span class="pcoded-mtext">Buyer Commission</span>
</a>
</li>

<li class=" ">
<a href="{{url('seller_commission_list')}}" class="waves-effect waves-dark">
<span class="pcoded-mtext">Seller Commission</span>
</a>
</li>


</ul>
</li> -->


</ul>
</li>

<li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon"><i class="fa fa-users"></i></span>
<span class="pcoded-mtext">Users</span>
</a>
<ul class="pcoded-submenu">


<li class=" ">
<a href="{{url('user_list')}}" class="waves-effect waves-dark">
<span class="pcoded-mtext">User</span>
</a>
</li>
<li class=" ">
<a href="{{url('role_list')}}" class="waves-effect waves-dark">
<span class="pcoded-mtext">Role</span>
</a>
</li>
<li class=" ">
<a href="{{url('permission_list')}}" class="waves-effect waves-dark">
<span class="pcoded-mtext">Permission</span>
</a>
</li>

</ul>
</li>
<!-- <li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
<span class="pcoded-mtext">Navigation</span>
</a>
<ul class="pcoded-submenu">
<li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-mtext">Dashboard</span>
</a>
 <ul class="pcoded-submenu">
<li class="">
<a href="index.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Default</span>
</a>
</li>
<li class=" ">
<a href="dashboard-crm.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">CRM</span>
</a>
</li>
<li class=" ">
<a href="dashboard-analytics.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Analytics</span>
<span class="pcoded-badge label label-info ">NEW</span>
</a>
</li>
</ul>
</li>
<li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-mtext">Page layouts</span>
<span class="pcoded-badge label label-warning">NEW</span>
</a>
<ul class="pcoded-submenu">
<li class=" pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-mtext">Vertical</span>
</a>
<ul class="pcoded-submenu">
<li class=" ">
<a href="menu-static.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Static Layout</span>
</a>
</li>
<li class=" ">
<a href="menu-header-fixed.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Header Fixed</span>
</a>
</li>
<li class=" ">
<a href="menu-compact.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Compact</span>
</a>
</li>
<li class=" ">
<a href="menu-sidebar.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Sidebar Fixed</span>
</a>
</li>
 </ul>
</li>
<li class=" pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-mtext">Horizontal</span>
</a>
<ul class="pcoded-submenu">
<li class=" ">
<a href="menu-horizontal-static.html" target="_blank" class="waves-effect waves-dark">
<span class="pcoded-mtext">Static Layout</span>
</a>
</li>
<li class=" ">
<a href="menu-horizontal-fixed.html" target="_blank" class="waves-effect waves-dark">
<span class="pcoded-mtext">Fixed layout</span>
</a>
</li>
<li class=" ">
<a href="menu-horizontal-icon.html" target="_blank" class="waves-effect waves-dark">
<span class="pcoded-mtext">Static With Icon</span>
</a>
</li>
<li class=" ">
<a href="menu-horizontal-icon-fixed.html" target="_blank" class="waves-effect waves-dark">
<span class="pcoded-mtext">Fixed With Icon</span>
</a>
</li>
</ul>
</li>
<li class=" ">
<a href="menu-bottom.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Bottom Menu</span>
</a>
</li>
</ul>
</li>
<li class="">
<a href="navbar-light.html" class="waves-effect waves-dark">
<span class="pcoded-mtext" data-i18n="nav.navigate.main">Navigation</span>
</a>
</li>
<li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-mtext">Widget</span>
<span class="pcoded-badge label label-danger">100+</span>
</a>
<ul class="pcoded-submenu">
<li class="">
<a href="widget-statistic.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Statistic</span>
 </a>
</li>
<li class=" ">
<a href="widget-data.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Data</span>
</a>
</li>
<li class=" ">
<a href="widget-chart.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Chart Widget</span>
</a>
</li>
</ul>
</li>
</ul>
</li> -->
<!-- <li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon"><i class="feather icon-box"></i></span>
<span class="pcoded-mtext">UI Element</span>
</a>
<ul class="pcoded-submenu">
<li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-mtext">Basic Components</span>
</a>
<ul class="pcoded-submenu">
<li class=" ">
<a href="alert.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Alert</span>
</a>
</li>
<li class=" ">
<a href="breadcrumb.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Breadcrumbs</span>
</a>
</li>
<li class=" ">
<a href="button.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Button</span>
</a>
</li>
<li class=" ">
<a href="box-shadow.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Box-Shadow</span>
</a>
</li>
<li class=" ">
<a href="accordion.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Accordion</span>
</a>
</li>
<li class=" ">
<a href="generic-class.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Generic Class</span>
</a>
 </li>
<li class=" ">
<a href="tabs.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Tabs</span>
</a>
</li>
<li class=" ">
<a href="color.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Color</span>
</a>
</li>
<li class=" ">
<a href="label-badge.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Label Badge</span>
</a>
</li>
<li class=" ">
<a href="progress-bar.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Progress Bar</span>
</a>
</li>
<li class=" ">
<a href="list.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">List</span>
</a>
</li>
<li class=" ">
<a href="tooltip.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Tooltip And Popover</span>
</a>
</li>
<li class=" ">
<a href="typography.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Typography</span>
</a>
</li>
<li class=" ">
<a href="other.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Other</span>
</a>
</li>
</ul>
</li>
<li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-mtext">Advance Components</span>
</a>
<ul class="pcoded-submenu">
<li class=" ">
<a href="draggable.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Draggable</span>
</a>
</li>
<li class=" ">
<a href="modal.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Modal</span>
</a>
</li>
<li class=" ">
<a href="notification.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Notifications</span>
</a>
</li>
<li class=" ">
<a href="rating.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Rating</span>
</a>
</li>
<li class=" ">
<a href="range-slider.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Range Slider</span>
</a>
</li>
<li class=" ">
<a href="slider.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Slider</span>
</a>
</li>
<li class=" ">
<a href="syntax-highlighter.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Syntax Highlighter</span>
</a>
</li>
<li class=" ">
<a href="tour.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Tour</span>
</a>
</li>
<li class=" ">
<a href="treeview.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Tree View</span>
</a>
</li>
<li class=" ">
<a href="nestable.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Nestable</span>
</a>
</li>
<li class=" ">
<a href="toolbar.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Toolbar</span>
</a>
</li>
</ul>
</li>
<li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-mtext">Extra Components</span>
</a>
 <ul class="pcoded-submenu">
<li class=" ">
<a href="session-timeout.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Session Timeout</span>
</a>
</li>
<li class=" ">
<a href="session-idle-timeout.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Session Idle Timeout</span>
</a>
</li>
<li class=" ">
<a href="offline.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Offline</span>
</a>
</li>
</ul>
</li>
<li class=" ">
<a href="animation.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Animations</span>
</a>
</li>
<li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-mtext">Icons</span>
</a>
<ul class="pcoded-submenu">
<li class=" ">
<a href="icon-font-awesome.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Font Awesome</span>
</a>
</li>
<li class=" ">
<a href="icon-themify.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Themify</span>
</a>
</li>
<li class=" ">
<a href="icon-simple-line.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Simple Line Icon</span>
</a>
</li>
</ul>
</li>
</ul>
</li> -->
<!-- <li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon"><i class="feather icon-clipboard"></i></span>
<span class="pcoded-mtext">Forms</span>
</a>
<ul class="pcoded-submenu">
<li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-mtext">Form Components</span>
</a>
<ul class="pcoded-submenu">
<li class=" ">
<a href="form-elements-component.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Form Components</span>
</a>
</li>
<li class=" ">
<a href="form-elements-add-on.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Form-Elements-Add-On</span>
</a>
</li>
<li class=" ">
<a href="form-elements-advance.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Form-Elements-Advance</span>
</a>
</li>
<li class=" ">
<a href="form-validation.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Form Validation</span>
</a>
</li>
</ul>
</li>
<li class=" ">
<a href="form-picker.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Form Picker</span>
<span class="pcoded-badge label label-warning">NEW</span>
</a>
</li>
<li class=" ">
<a href="form-select.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Form Select</span>
</a>
</li>
<li class=" ">
<a href="form-masking.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Form Masking</span>
</a>
</li>
<li class=" ">
<a href="form-wizard.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Form Wizard</span>
</a>
</li>
</ul>
</li> -->
<!-- <li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon"><i class="feather icon-credit-card"></i></span>
<span class="pcoded-mtext">Tables</span>
</a>
<ul class="pcoded-submenu">
<li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-mtext">Bootstrap Table</span>
</a>
<ul class="pcoded-submenu">
<li class=" ">
<a href="bs-basic-table.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Basic Table</span>
</a>
</li>
<li class=" ">
<a href="bs-table-sizing.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Sizing Table</span>
</a>
</li>
<li class=" ">
<a href="bs-table-border.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Border Table</span>
</a>
</li>
<li class=" ">
<a href="bs-table-styling.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Styling Table</span>
</a>
</li>
</ul>
</li>
<li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-mtext">Data Table</span>
</a>
<ul class="pcoded-submenu">
<li class=" ">
<a href="dt-basic.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Basic Initialization</span>
</a>
</li>
<li class=" ">
<a href="dt-advance.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Advance Initialization</span>
</a>
</li>
<li class=" ">
<a href="dt-styling.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Styling</span>
</a>
</li>
<li class=" ">
<a href="dt-api.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">API</span>
</a>
</li>
<li class=" ">
<a href="dt-ajax.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Ajax</span>
</a>
 </li>
<li class=" ">
<a href="dt-server-side.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Server Side</span>
</a>
</li>
<li class=" ">
<a href="dt-plugin.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Plug-In</span>
</a>
</li>
<li class=" ">
<a href="dt-data-sources.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Data Sources</span>
</a>
</li>
</ul>
</li>
<li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-mtext">Dt Extensions</span>
</a>
<ul class="pcoded-submenu">
<li class=" ">
<a href="dt-ext-autofill.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">AutoFill</span>
</a>
</li>
<li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-mtext">Button</span>
</a>
<ul class="pcoded-submenu">
<li class=" ">
<a href="dt-ext-basic-buttons.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Basic Button</span>
</a>
</li>
<li class=" ">
<a href="dt-ext-buttons-html-5-data-export.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Html-5 Data Export</span>
</a>
</li>
</ul>
</li>
<li class=" ">
<a href="dt-ext-col-reorder.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Col Reorder</span>
</a>
</li>
<li class=" ">
<a href="dt-ext-fixed-columns.html" class="waves-effect waves-dark">
 <span class="pcoded-mtext">Fixed Columns</span>
</a>
</li>
<li class=" ">
<a href="dt-ext-fixed-header.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Fixed Header</span>
</a>
</li>
<li class=" ">
<a href="dt-ext-key-table.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Key Table</span>
</a>
</li>
<li class=" ">
<a href="dt-ext-responsive.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Responsive</span>
</a>
</li>
<li class=" ">
<a href="dt-ext-row-reorder.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Row Reorder</span>
</a>
</li>
<li class=" ">
<a href="dt-ext-scroller.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Scroller</span>
</a>
</li>
<li class=" ">
<a href="dt-ext-select.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Select Table</span>
</a>
</li>
</ul>
</li>
<li class=" ">
<a href="foo-table.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">FooTable</span>
</a>
</li>
<li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-mtext">Handson Table</span>
</a>
<ul class="pcoded-submenu">
<li class="">
<a href="handson-appearance.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Appearance</span>
</a>
</li>
<li class="">
<a href="handson-data-operation.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Data Operation</span>
</a>
 </li>
<li class="">
<a href="handson-rows-cols.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Rows Columns</span>
</a>
</li>
<li class="">
<a href="handson-columns-only.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Columns Only</span>
</a>
</li>
<li class="">
<a href="handson-cell-features.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Cell Features</span>
</a>
</li>
<li class="">
<a href="handson-cell-types.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Cell Types</span>
</a>
</li>
<li class="">
<a href="handson-integrations.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Integrations</span>
</a>
</li>
<li class="">
<a href="handson-rows-only.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Rows Only</span>
</a>
</li>
<li class="">
<a href="handson-utilities.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Utilities</span>
</a>
</li>
</ul>
</li>
<li class="">
<a href="editable-table.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Editable Table</span>
</a>
</li>
</ul>
</li> -->
<!-- <li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon"><i class="feather icon-pie-chart"></i></span>
<span class="pcoded-mtext">Chart And Maps</span>
</a>
<ul class="pcoded-submenu">
<li class="pcoded-hasmenu ">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-mtext">Charts</span>
</a>
 <ul class="pcoded-submenu">
<li class="">
<a href="chart-google.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Google Chart</span>
</a>
</li>
<li class="">
<a href="chart-chartjs.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">ChartJs</span>
</a>
</li>
<li class="">
<a href="chart-list.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">List Chart</span>
</a>
</li>
<li class="">
<a href="chart-float.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Float Chart</span>
</a>
</li>
<li class="">
<a href="chart-knob.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Knob chart</span>
</a>
</li>
<li class="">
<a href="chart-morris.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Morris Chart</span>
</a>
</li>
<li class="">
<a href="chart-nvd3.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Nvd3 Chart</span>
</a>
</li>
<li class="">
<a href="chart-peity.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Peity Chart</span>
</a>
</li>
<li class="">
<a href="chart-radial.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Radial Chart</span>
</a>
</li>
<li class="">
<a href="chart-rickshaw.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Rickshaw Chart</span>
</a>
</li>
<li class="">
<a href="chart-sparkline.html" class="waves-effect waves-dark">
 <span class="pcoded-mtext">Sparkline Chart</span>
</a>
</li>
<li class="">
<a href="chart-c3.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">C3 Chart</span>
</a>
</li>
</ul>
</li>
<li class="pcoded-hasmenu ">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-mtext">Maps</span>
</a>
<ul class="pcoded-submenu">
<li class="">
<a href="map-google.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Google Maps</span>
</a>
</li>
<li class="">
<a href="map-vector.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Vector Maps</span>
</a>
</li>
<li class="">
<a href="map-api.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Google Map Search API</span>
</a>
</li>
<li class="">
<a href="location.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Location</span>
</a>
</li>
</ul>
</li>
</ul>
</li> -->
<!-- <li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon"><i class="feather icon-unlock"></i></span>
<span class="pcoded-mtext">Pages</span>
</a>
<ul class="pcoded-submenu">
<li class="pcoded-hasmenu ">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-unlock"></i>
</span>
<span class="pcoded-mtext">Authentication</span>
</a>
<ul class="pcoded-submenu">
<li class="">
<a href="auth-sign-in-social.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Login</span>
</a>
 </li>
<li class="">
<a href="auth-sign-up-social.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Registration</span>
</a>
</li>
<li class="">
<a href="auth-reset-password.html" target="_blank" class="waves-effect waves-dark">
<span class="pcoded-mtext">Forgot Password</span>
</a>
</li>
<li class="">
<a href="auth-lock-screen.html" target="_blank" class="waves-effect waves-dark">
<span class="pcoded-mtext">Lock Screen</span>
</a>
</li>
</ul>
</li>
<li class="pcoded-hasmenu ">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-mtext">Maintenance</span>
</a>
<ul class="pcoded-submenu">
<li class="">
<a href="error.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Error</span>
</a>
</li>
<li class="">
<a href="comming-soon.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Comming Soon</span>
</a>
</li>
<li class="">
<a href="offline-ui.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Offline UI</span>
</a>
</li>
</ul>
</li>
<li class="pcoded-hasmenu ">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-mtext">E-Commerce</span>
<span class="pcoded-badge label label-danger">NEW</span>
</a>
<ul class="pcoded-submenu">
<li class="">
<a href="product.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Product</span>
</a>
</li>
<li class="">
<a href="product-list.html" class="waves-effect waves-dark">
 <span class="pcoded-mtext">Product List</span>
</a>
</li>
<li class="">
<a href="product-edit.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Product Edit</span>
</a>
</li>
<li class="">
<a href="product-detail.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Product Detail</span>
</a>
</li>
<li class="">
<a href="product-cart.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Product Card</span>
</a>
</li>
<li class="">
<a href="product-payment.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Credit Card Form</span>
</a>
</li>
</ul>
</li>
<li class="pcoded-hasmenu ">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-mtext">Email</span>
</a>
<ul class="pcoded-submenu">
<li class="">
<a href="email-compose.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Compose Email</span>
</a>
</li>
<li class="">
<a href="email-inbox.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Inbox</span>
</a>
</li>
<li class="">
<a href="email-read.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Read Mail</span>
</a>
</li>
</ul>
</li>
</ul>
</li> -->
<!-- <li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon"><i class="feather icon-award"></i></span>
<span class="pcoded-mtext">App</span>
</a>
<ul class="pcoded-submenu">
<li class="">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-mtext">To-Do</span>
</a>
</li>
<li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-mtext">Extension</span>
</a>
<ul class="pcoded-submenu">
<li class="pcoded-hasmenu ">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-mtext">Editor</span>
</a>
<ul class="pcoded-submenu">
<li class="">
<a href="ck-editor.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">CK-Editor</span>
</a>
</li>
<li class="">
<a href="wysiwyg-editor.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">WYSIWYG Editor</span>
</a>
</li>
</ul>
</li>
<li class="pcoded-hasmenu ">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-mtext">Event Calendar</span>
</a>
<ul class="pcoded-submenu">
<li class="">
<a href="event-full-calender.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Full Calendar</span>
</a>
</li>
<li class="">
<a href="event-clndr.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">CLNDER</span>
<span class="pcoded-badge label label-info">NEW</span>
</a>
</li>
</ul>
</li>
<li class="">
<a href="image-crop.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Image Cropper</span>
</a>
</li>
<li class="">
<a href="file-upload.html" class="waves-effect waves-dark">
 <span class="pcoded-mtext">File Upload</span>
</a>
</li>
<li class="">
<a href="change-loges.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Change Loges</span>
<span class="pcoded-badge label label-warning">1.0</span>
</a>
</li>
</ul>
</li>
</ul>
</li> -->
<!-- <li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon"><i class="feather icon-watch"></i></span>
<span class="pcoded-mtext">Other</span>
</a>
<ul class="pcoded-submenu">
<li class="pcoded-hasmenu ">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-mtext">Menu Levels</span>
</a>
<ul class="pcoded-submenu">
<li class="">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-mtext">Menu Level 2.1</span>
</a>
</li>
<li class="pcoded-hasmenu ">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-mtext">Menu Level 2.2</span>
</a>
<ul class="pcoded-submenu">
<li class="">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-mtext">Menu Level 3.1</span>
</a>
</li>
</ul>
</li>
<li class="">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-mtext">Menu Level 2.3</span>
</a>
</li>
</ul>
</li>
<li class="">
<a href="javascript:void(0)" class="disabled waves-effect waves-dark">
<span class="pcoded-mtext">Disabled Menu</span>
</a>
</li>
<li class="">
<a href="sample-page.html" class="waves-effect waves-dark">
 <span class="pcoded-mtext">Sample Page</span>
</a>
</li>
</ul>
</li> -->
</ul>
</div>
</nav>





@yield('content')




<div id="styleSelector">
</div>

</div>
</div>
</div>
</div>

<script src="https://code.jquery.com/jquery-1.10.2.js"></script>



<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script data-cfasync="false" src="{{asset('js/email-decode.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>

<script src="{{asset('js/waves.min.js')}}" type="text/javascript"></script>

<script type="text/javascript" src="{{asset('js/jquery.slimscroll.js')}}"></script>



<!-- <script type="text/javascript" src="{{asset('js/chart.js')}}"></script>

<script type="text/javascript" src="{{asset('js/chartjs-custom.js')}}"></script> -->


<script src="{{asset('js/jquery.flot.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery.flot.categories.js')}}" type="text/javascript"></script>
<script src="{{asset('js/curvedlines.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery.flot.tooltip.min.js')}}" type="text/javascript"></script>

<script src="{{asset('js/chartist.js')}}" type="text/javascript"></script>

<script src="{{asset('js/amcharts.js')}}" type="text/javascript"></script>
<script src="{{asset('js/serial.js')}}" type="text/javascript"></script>
<script src="{{asset('js/light.js')}}" type="text/javascript"></script>

<script src="{{asset('js/pcoded.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/horizontal-layout.min.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('js/custom-dashboard.min.js') }}"></script>
<script type="text/javascript" src="{{asset('js/script.js')}}"></script>



<script src="{{ asset('js/d3.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/c3.js')}}" type="text/javascript"></script>

<!-- <script src="{{ asset('js/c3-custom-chart.js')}}" type="text/javascript"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.0/chart.min.js"></script>

<script type="text/javascript" src="{{asset('js/modernizr.js')}}"></script>
<script type="text/javascript" src="{{asset('js/css-scrollbars.js')}}"></script>

<script src="{{asset('js/jquery.datatables.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/datatables.buttons.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jszip.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/pdfmake.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/vfs_fonts.js')}}" type="text/javascript"></script>
<script src="{{asset('js/datatables.buttons.min-2.js')}}" type="text/javascript"></script>
<script src="{{asset('js/buttons.flash.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jszip.min-2.js')}}" type="text/javascript"></script>
<script src="{{asset('js/vfs_fonts-2.js')}}" type="text/javascript"></script>
<script src="{{asset('js/buttons.colvis.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/buttons.print.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/buttons.html5.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/datatables.bootstrap4.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/datatables.responsive.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/responsive.bootstrap4.min.js')}}" type="text/javascript"></script>

<script src="{{asset('js/extension-btns-custom.js')}}" type="text/javascript"></script>
<script src="{{asset('js/pcoded.min.js')}}" type="text/javascript"></script>



<script type="text/javascript" src="{{asset('js/select2-custom.js')}}"></script>
<script type="text/javascript" src="{{asset('js/select2.full.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.multi-select.js')}}"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="text/javascript"></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script> -->



<script type="799ddc403e80b1cc26e7d64d-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script src="{{asset('js/rocket-loader.min.js')}}" data-cf-settings="799ddc403e80b1cc26e7d64d-|49" defer=""></script>


<script>



    $(".errorWrap").each(function () {
        swal("Error", "'" + $(this).text() + "'", 'warning');
        $(this).hide();
    });




</script>
<script>
    $(".succWrap").each(function () {

//         swal(
//                {
//                    title: 'Successfully Created!',
//                    text: 'You clicked the button!',
//                    type: 'success',
//                    confirmButtonClass: 'btn btn-confirm mt-2'
//                }
//            );
        swal("Success ", "" + $(this).text() + "", 'success');
        $(this).hide();
    });



</script>
<script>
    $(document).ready(function(){
        $('._delete_data').click(function(e){
            var data_id = $(this).attr('data-id');
           // alert(data_id);
            Swal.fire({
                title: 'Are you sure to Delete?',
               // text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {

                if (result.value) {
                    $(document).find('#delete_from_'+data_id).submit();
                    Swal.fire(
      'Deleted!',
      'Your  Record has been deleted.',
      'success'
    )
                }
                else if (result.dismiss === Swal.DismissReason.cancel) {
    Swal.fire(
      'Cancelled',
      'Your  Record is safe',
      'error'
    )
  }
            })
        });
    });
</script>


<script>


// $('.edit-confirmation').on('click', function (event) {
//     event.preventDefault();
//     const url = $(this).attr('href');
//     swal({
//         title: "Are you sure to edit?",

// type: "warning",
// showCancelButton: true,
// confirmButtonColor: '#DD6B55',
// confirmButtonText: 'Yes, I am sure!',
// cancelButtonText: "No, cancel it!"
//     }).then(function(value) {
//         if (value) {
//             window.location.href = url;
//         }
//     });
// });
$('.edit-confirmation').on('click', function (event) {
    event.preventDefault();
    const url = $(this).attr('href');
    swal({
        title: "Are you sure to edit?",

            type: "warning",
            showCancelButton: true,
            confirmButtonColor: '#DD6B55',
            confirmButtonText: 'Yes, I am sure!',
            cancelButtonText: "No, cancel it!"
    }).then((result) => {

if (result.value) {
    window.location.href = url;

}
else if (result.dismiss === Swal.DismissReason.cancel) {
Swal.fire(
'Cancelled',
'You  Cancelled',
'error'
)
}
})
});



// view script
$('.view-confirmation').on('click', function (event) {
    event.preventDefault();
    const url = $(this).attr('href');
    swal({
        title: "Are you sure to View?",

            type: "warning",
            showCancelButton: true,
            confirmButtonColor: '#DD6B55',
            confirmButtonText: 'Yes, I am sure!',
            cancelButtonText: "No, cancel it!"
    }).then((result) => {

if (result.value) {
    window.location.href = url;

}
else if (result.dismiss === Swal.DismissReason.cancel) {
Swal.fire(
'Cancelled',
'You  Cancelled',
'error'
)
}
})
});

</script>
<script>
// on first focus (bubbles up to document), open the menu
$(document).on('focus', '.select2-selection.select2-selection--single', function (e) {
  $(this).closest(".select2-container").siblings('select:enabled').select2('open');
});

// steal focus during close - only capture once and stop propogation
$('select.select2').on('select2:closing', function (e) {
  $(e.target).data("select2").$selection.one('focus focusin', function (e) {
    e.stopPropagation();
  });
});


var tabindex = 1;

$('input,select').each(function() {
    if (this.type != "hidden") {
        $(this).attr("tabindex", tabindex);
     tabindex++;
 }
});

// https://stackoverflow.com/a/50535297/2782670
$(document).on('focus', '.select2', function (e) {
    if (e.originalEvent) {
        var s2element = $(this).siblings('select');
        s2element.select2('open');
        // Set focus back to select2 element on closing.
        s2element.on('select2:closing', function (e) {
            s2element.select2('focus');
       });
    }
});


    </script>
</body>

<!-- Mirrored from colorlib.com/polygon/admindek/default/menu-horizontal-static.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:08:37 GMT -->
</html>









