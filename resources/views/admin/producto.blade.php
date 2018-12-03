
<!DOCTYPE html>
<html lang="en">

{{-- Include admin Head --}}
@include('partials.admin._adminHead')

<body>
    <div class="wrapper">
        <!-- Main Container -->
        <div id="main-wrapper" class="menu-fixed page-hdr-fixed">
            <!-- Menu Wrapper -->
            <div class="menu-wrapper">
                <div class="menu">
                    <!-- Menu Container -->
                    <ul>
                        <li class="menu-title">Admin Panel</li>
                        <li class="has-sub">
                            <a><i class="icon-screen-desktop"></i><span>Dashboard</span><i class="arrow"></i></a></i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="/adm/consultas"><span>Consultas</span></a>
                                </li>
                                <li>
                                    <a href="/adm/productos/new"><span>Nuevo Producto</span></a>
                                </li>
                                <li>
                                    <a href="/adm/productos/"><span>Productos</span></a>
                                </li>
                                {{-- <li>
                                    <a href="dashboard-crm.html"><span>CRM</span></a>
                                </li>
                                <li>
                                    <a href="dashboard-analytics.html"><span>Analytics</span></a>
                                </li> --}}
                            </ul>
                        </li>
                        {{-- <li class="has-sub">
                            <a><i class="cc BTC"></i><span>Cryptocoin</span><i class="arrow"></i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="trading.html"><span>Trading</span></a>
                                </li>
                                <li>
                                    <a href="market-capitalizations.html"><span>Market Capitalizations</span></a>
                                </li>
                                <li>
                                    <a href="top-gainers-losers.html"><span>Top Gainers Losers</span></a>
                                </li>
                                <li>
                                    <a href="buy-and-sell.html"><span>Buy &#38; Sell</span></a>
                                </li>
                                <li>
                                    <a href="ico-calendar.html"><span>Ico Calendar</span></a>
                                </li>
                                <li>
                                    <a href="tickers.html"><span>Tickers</span></a>
                                </li>
                                <li>
                                    <a href="my-watchlist.html"><span>My Watchlist</span></a>
                                </li>
                                <li>
                                    <a href="my-wallet.html"><span>My Wallet</span></a>
                                </li>
                                <li>
                                    <a href="my-portfolio.html"><span>My Portfolio</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-title">Components</li>
                        <li class="has-sub">
                            <a><i class="icon-layers"></i><span>UI Elements</span><i class="arrow"></i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="colors.html"><span>Colors</span></a>
                                </li>
                                <li>
                                    <a href="alerts.html"><span>Alerts</span></a>
                                </li>
                                <li>
                                    <a href="block-ui.html"><span>Block UI</span></a>
                                </li>
                                <li>
                                    <a href="modals.html"><span>Modals</span></a>
                                </li>
                                <li>
                                    <a href="panel.html"><span>Panel</span></a>
                                </li>
                                <li>
                                    <a href="progressbars.html"><span>Progress Bars</span></a>
                                </li>
                                <li>
                                    <a href="portlet.html"><span>Portlets</span></a>
                                </li>
                                <li>
                                    <a href="scrollable.html"><span>Scrollable</span></a>
                                </li>
                                <li>
                                    <a href="session-timeout.html"><span>Session Timeout</span></a>
                                </li>
                                <li>
                                    <a href="spinners.html"><span>Spinners</span></a>
                                </li>
                                <li>
                                    <a href="sweet-alerts.html"><span>Sweet Alerts</span></a>
                                </li>
                                <li>
                                    <a href="switches.html"><span>Switches</span></a>
                                </li>
                                <li>
                                    <a href="tabs.html"><span>Tabs</span></a>
                                </li>
                                <li>
                                    <a href="tickers.html"><span>Tickers</span></a>
                                </li>
                                <li>
                                    <a href="toastr.html"><span>Toastr</span></a>
                                </li>
                                <li>
                                    <a href="tooltip.html"><span>Tooltips</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a><i class="icon-note"></i><span>Forms</span><i class="arrow"></i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="form-basic.html"><span>Basic Form</span></a>
                                </li>
                                <li>
                                    <a href="form-layout.html"><span>Form Layout</span></a>
                                </li>
                                <li>
                                    <a href="form-mask.html"><span>Form Mask</span></a>
                                </li>
                                <li>
                                    <a href="date-time-picker.html"><span>Date Picker</span></a>
                                </li>
                                <li>
                                    <a href="file-upload.html"><span>File Upload</span></a>
                                </li>
                                <li>
                                    <a href="form-summernote.html"><span>SummerNote Editor</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a><i class="icon-cloud-download"></i><span>Buttons</span><i class="arrow"></i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="button-bootstrap.html"><span>Bootstrap Buttons</span></a>
                                </li>
                                <li>
                                    <a href="button-material.html"><span>Material Buttons</span></a>
                                </li>
                                <li>
                                    <a href="button-air.html"><span>Air Buttons</span></a>
                                </li>

                            </ul>
                        </li>
                        <li class="has-sub">
                            <a><i class="icon-screen-tablet"></i><span>Tables</span><i class="arrow"></i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="tables.html"><span>Basic Tables</span></a>
                                </li>
                                <li>
                                    <a href="datatables-basic.html"><span> Datatables Basic</span></a>
                                </li>
                                <li>
                                    <a href="datatables-advanced.html"><span> Datatables Advanced</span></a>
                                </li>
                                <li>
                                    <a href="datatables-datasource.html"><span> Datatables Datasource</span></a>
                                </li>
                                <li>
                                    <a href="datatables-api.html"><span> Datatables Api</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a><i class="icon-flag"></i><span>Icons</span><i class="arrow"></i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="icon-fontawesome.html"><span>Font Awesome Icons</span></a>
                                </li>
                                <li>
                                    <a href="icon-themify.html"><span> Themify Icons</span></a>
                                </li>
                                <li>
                                    <a href="icon-simplelineicons.html"><span> Simple Line Icons</span></a>
                                </li>
                                <li>
                                    <a href="icon-weather.html"><span> Weather Icons</span></a>
                                </li>
                                <li>
                                    <a href="icon-cryptocoins.html"><span> Cryptocoins Icons</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a><i class="icon-puzzle"></i><span>Widgets</span><i class="arrow"></i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="widget-general.html"><span>General Widgets</span></a>
                                </li>
                                <li>
                                    <a href="widget-chart.html"><span>Chart Widgets</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a><i class="icon-calendar"></i><span>Calendar</span><i class="arrow"></i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="calendar-1.html"><span>Basic Calendar</span></a>
                                </li>
                                <li>
                                    <a href="calendar-2.html"><span>List View Calendar</span></a>
                                </li>
                                <li>
                                    <a href="calendar-3.html"><span>External Event Calendar</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a><i class="icon-chart"></i><span>Charts</span><i class="arrow"></i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="charts-amcharts.html"><span>Am Stock Charts</span></a>
                                </li>
                                <li>
                                    <a href="charts-chartjs.html"><span>Chartjs Charts</span></a>
                                </li>
                                <li>
                                    <a href="charts-flot.html"><span>Flot Charts</span></a>
                                </li>
                                <li>
                                    <a href="charts-morris.html"><span>Morris Charts</span></a>
                                </li>
                                <li>
                                    <a href="charts-sparkline.html"><span>Sparkline Charts</span></a>
                                </li>
                                <li>
                                    <a href="charts-knob.html"><span>knob Charts</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a><i class="icon-compass"></i><span>Menu Level</span><i class="arrow"></i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a><span>Second Level</span></a>
                                </li>
                                <li class="has-sub">
                                    <a><span>Second Level Child</span><i class="arrow"></i></a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a><span>Third Level</span></a>
                                        </li>
                                        <li>
                                            <a><span>Third Level</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-sub">
                                    <a><span>Second Level Child</span><i class="arrow"></i></a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a><span>Third Level</span></a>
                                        </li>
                                        <li>
                                            <a><span>Third Level</span></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-title">Pages</li>
                        <li class="has-sub active">
                            <a><i class="icon-frame"></i><span>Chat App</span><i class="arrow rotate"></i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="chat-app.html"><span>Chat App</span></a>
                                </li>
                                <li>
                                    <a href="tickets-main.html"><span>Support Ticket</span></a>
                                </li>
                                <li>
                                    <a href="ticket-detail.html"><span>Ticket Detail</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a><i class="icon-envelope-letter"></i><span>Mail Box</span><i class="arrow"></i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="mailbox-main.html"><span>Mail Box</span></a>
                                </li>
                                <li>
                                    <a href="mailbox-compose.html"><span>Compose Mail</span></a>
                                </li>
                                <li>
                                    <a href="mailbox-details.html"><span>Mail Detail</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a><i class="icon-emotsmile"></i><span>Timeline</span><i class="arrow"></i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="timeline-1.html"><span>Timeline 1</span></a>
                                </li>
                                <li>
                                    <a href="timeline-2.html"><span>Timeline 2</span></a>
                                </li>
                                <li>
                                    <a href="timeline-3.html"><span>Timeline 3</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a><i class="icon-people"></i><span>User</span><i class="arrow"></i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="user-grid.html"><span>Users</span></a>
                                </li>
                                <li>
                                    <a href="user-details.html"><span>User Details</span></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="pricing-table.html"><i class="icon-calculator"></i><span>Pricing Table</span></a>
                        </li>
                        <li>
                            <a href="invoice.html"><i class="icon-wallet"></i><span>Invoice</span></a>
                        </li>
                        <li>
                            <a href="faq.html"><i class="icon-plus"></i><span>Faq</span></a>
                        </li>
                        <li class="has-sub">
                            <a><i class="icon-compass"></i><span>Custom Pages</span><i class="arrow"></i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="login-1.html"><span>Login 1</span></a>
                                </li>
                                <li>
                                    <a href="login-2.html"><span>Login 2</span></a>
                                </li>
                                <li>
                                    <a href="error-403.html"><span>Error 403</span></a>
                                </li>
                                <li>
                                    <a href="error-404.html"><span>Error 404</span></a>
                                </li>
                                <li>
                                    <a href="error-503.html"><span>Error 503</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-title">Layout</li>
                        <li class="has-sub">
                            <a><i class="ti-layout-width-full"></i><span>Layout</span><i class="arrow"></i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="layout-wide.html"><span>Wide Layout</span></a>
                                </li>
                                <li>
                                    <a href="layout-boxed.html"><span>Boxed Layout</span></a>
                                </li>
                                <li>
                                    <a href="layout-static.html"><span>Static Layout</span></a>
                                </li>
                                <li>
                                    <a href="layout-fixed.html"><span>Fixed Layout</span></a>
                                </li>
                                <li>
                                    <a href="layout-collapse.html"><span>Collapsed Menu</span></a>
                                </li>
                                <li>
                                    <a href="layout-light.html"><span>Light Sidebar</span></a>
                                </li>
                                <li>
                                    <a href="layout-dark.html"><span>Dark Sidebar</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a><i class="ti-layout-sidebar-left"></i><span>Header Color</span><i class="arrow"></i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="header-color-with-light-sidebar.html"><span>Wide Light Sidebar</span></a>
                                </li>
                                <li>
                                    <a href="header-color-with-dark-sidebar.html"><span>Wide Dark Sidebar</span></a>
                                </li>
                                <li>
                                    <a href="header-gradient.html"><span>Gradient</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a><i class="ti-layout-media-overlay-alt"></i><span>Footer</span><i class="arrow"></i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="footer-light.html"><span>Light Footer</span></a>
                                </li>
                                <li>
                                    <a href="footer-dark.html"><span>Dark Footer</span></a>
                                </li>
                                <li>
                                    <a href="footer-transparent.html"><span>Footer Transparent</span></a>
                                </li>
                                <li>
                                    <a href="footer-fixed.html"><span>Footer Fixed</span></a>
                                </li>
                                <li>
                                    <a href="footer-components.html"><span>Footer Components</span></a>
                                </li>
                            </ul>
                        </li> --}}
                    </ul>
                </div>
            </div>
            <!-- Page header -->
            <div class="page-hdr">
                <div class="row align-items-center">
                    <div class="col-4 col-md-7 page-hdr-left">
                        <!-- Logo Container -->
                        <div id="logo">
                            <div class="tbl-cell logo-icon">
                                <a href="#"><img src="images/icon.png" alt=""></a>
                            </div>
                            <div class="tbl-cell logo">
                                <a href="#"><img src="images/logo.png"></a>
                            </div>
                        </div>
                        <div class="page-menu menu-icon">
                            <a class="animated menu-close"><i class="far fa-hand-point-left"></i></a>
                        </div>
                        <div class="page-menu page-fullscreen">
                            <a><i class="fas fa-expand"></i></a>
                        </div>
                        <div class="page-search">
                            <input type="text" placeholder="Search your key....">
                        </div>
                    </div>
                    <div class="col-8 col-md-5 page-hdr-right">
                        <div class="page-hdr-desktop">
                            <div class="page-menu menu-dropdown-wrapper menu-user">
                                <a class="user-link">
                                    <span class="tbl-cell user-name pr-3">Hello <span class="pl-2">John Doe</span></span>
                                    <span class="tbl-cell avatar"><img src="uploads/author-4.jpg" alt=""></span>
                                </a>
                                <div class="menu-dropdown menu-dropdown-right menu-dropdown-push-right">
                                    <div class="arrow arrow-right"></div>
                                    <div class="menu-dropdown-inner">
                                        <div class="menu-dropdown-head pb-3">
                                            <div class="tbl-cell">
                                                <img src="uploads/author-1.jpg" alt="">
                                                <!-- <i class="fa fa-user-circle"></i> -->
                                            </div>
                                            <div class="tbl-cell pl-2 text-left">
                                                <p class="m-0 font-18">John Doe</p>
                                                <p class="m-0 font-14">Demonstration</p>
                                            </div>
                                        </div>
                                        <div class="menu-dropdown-body">
                                            <ul class="menu-nav">
                                                <li><a href="#"><i class="icon-event"></i><span>My Events</span></a></li>
                                                <li><a href="#"><i class="icon-notebook"></i><span>My Notes</span></a></li>
                                                <li><a href="#"><i class="icon-user"></i><span>My Profile</span></a></li>
                                                <li><a href="#"><i class="icon-globe-alt"></i><span>Client Portal</span></a></li>
                                            </ul>
                                        </div>
                                        <div class="menu-dropdown-footer text-right">
                                            <a href="#" class="btn btn-outline btn-primary btn-pill btn-outline-2x font-12 btn-sm">Logout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="page-menu menu-dropdown-wrapper menu-notification">
                                <a><i class="icon-bell"></i><span class="notification">20</span></a>
                                <div class="menu-dropdown menu-dropdown-right menu-dropdown-push-right">
                                    <div class="arrow arrow-right"></div>
                                    <div class="menu-dropdown-inner">
                                        <div class="menu-dropdown-head">Notification</div>
                                        <div class="menu-dropdown-body">
                                            <ul class="timeline m-0">
                                                <li>
                                                    <a href="" target="_blank" class="timeline-container">
                                                        <div class="arrow"></div>
                                                        <div class="description">Wallet Adddes </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" target="_blank" class="timeline-container">
                                                        <div class="arrow"></div>
                                                        <div class="description">Coin Transferred from BTC<span class="badge badge-danger badge-pill badge-sm">Unpaid</span></div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" target="_blank" class="timeline-container">
                                                        <div class="arrow"></div>
                                                        <div class="description">BTC bought</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" target="_blank" class="timeline-container">
                                                        <div class="arrow"></div>
                                                        <div class="description">Server Restarted <span class="badge badge-success badge-pill badge-sm">Resolved</span></div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" target="_blank" class="timeline-container">
                                                        <div class="arrow"></div>
                                                        <div class="description">New order received</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="page-menu menu-dropdown-wrapper menu-quick-links">
                                <a><i class="icon-grid"></i></a>
                                <div class="menu-dropdown menu-dropdown-right menu-dropdown-push-right">
                                    <div class="arrow arrow-right"></div>
                                    <div class="menu-dropdown-inner">
                                        <div class="menu-dropdown-head">Quick Links</div>
                                        <div class="menu-dropdown-body p-0">
                                            <div class="row m-0 box">
                                                <div class="col-6 p-0 box">
                                                    <a href="">
                                                        <i class="icon-emotsmile"></i>
                                                        <span>New Contact</span>
                                                    </a>
                                                </div>
                                                <div class="col-6 p-0 box">
                                                    <a href="">
                                                        <i class="icon-docs"></i>
                                                        <span>New Invoice</span>
                                                    </a>
                                                </div>
                                                <div class="col-6 p-0 box">
                                                    <a href="">
                                                        <i class="icon-calculator"></i>
                                                        <span>New Quote</span>
                                                    </a>
                                                </div>
                                                <div class="col-6 p-0 box">
                                                    <a href="">
                                                        <i class="icon-rocket"></i>
                                                        <span>New Expense</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="page-menu">
                                <a class="open-sidebar-right"><i class="icon-settings"></i><span></span></a>
                            </div>
                        </div>
                        <div class="page-hdr-mobile">
                            <div class="page-menu open-mobile-search">
                                <a href="#"><i class="icon-magnifier"></i></a>
                            </div>
                            <div class="page-menu open-left-menu">
                                <a href="#"><i class="icon-menu"></i></a>
                            </div>
                            <div class="page-menu oepn-page-menu-desktop">
                                <a href="#"><i class="icon-options-vertical"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main Page Wrapper -->
            <div class="page-wrapper">
                <!-- Page Title -->
                <div class="page-title">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <h2 class="page-title-text">Producto {{$producto->producto_nombre}}</h2>
                        </div>
                        <div class="col-sm-6 text-right">
                            <div class="breadcrumbs">
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li>Producto</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page Body -->
                <div class="page-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="panel panel-default">
                                <div class="panel-head">
                                    <h5 class="panel-title">Editar Producto</h5>
                                </div>
                                <div class="panel-body d-flex justify-content-center align-items-center">
                                    <img style="max-width: 100px" src="/storage/productos/{{$producto->producto_foto}}" alt="imagen del producto">
                                    <form class="col-6" enctype="multipart/form-data" method="post" action="{{ route('editProducto', $producto->id) }}">
                                        @csrf
                                        @method('put')

                                        <div class="form-group">
                                            <label for="producto_nombre">Nombre del Producto</label>
                                        <input class="form-control" type="text" name="producto_nombre" value="{{$producto->producto_nombre}}">
                                        </div>

                                        <div class="form-group">
                                            <label for="producto_precio">Precio</label>
                                            <input type="number" class="form-control" name="producto_precio" value="{{$producto->producto_precio}}">
                                        </div>

                                        <div class="form-group">
                                            <label for="producto_stock">Stock</label>
                                            <input type="number" class="from-control" name="producto_stock" value="{{$producto->producto_stock}}">
                                        </div>

                                        <div class="form-group">
                                            <label for="producto_foto">Foto del Producto</label>
                                            <input name="producto_foto" class="form-controll" type="file">
                                        </div>

                                        <div class="form-group">
                                            <label for="destacado">Tipo de Producto</label>
                                            <select class="form-control" name="destacado">
                                                @if($producto->destacado == 0){
                                                    <option value="0" selected>Normal</option>
                                                    <option value="1">Destacado</option>
                                                }
                                                @else{
                                                    <option value="1" selected>Destacado</option>
                                                    <option value="0">Normal</option>
                                                }
                                                @endif
                                            </select>
                                        </div>

                                        <button class="btn btn-primary" type="submit">Cargar Producto</button>
                                    </form>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <form action="{{ url('/adm/productos/'. $producto->id .'/delete')}}" method="post" name="" enctype="multipart/form-data">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Footer -->
            <div class="page-ftr">
                <div>© 2018. Created by Nicolás Mosi</div>
            </div>
        </div>
        <!-- Sidebar Section -->
        <div class="sidebar sidebar-right">
            <div class="sidebar-close"><i class="icon-close"></i></div>
            <div class="content">
                <ul class="nav nav-tabs nav-tabs-line nav-tabs-line-primary">
                    <li class="nav-item">
                        <a class="nav-link active" href="#sidebar-member" data-toggle="tab">Member</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sidebar-setting" data-toggle="tab">Settings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sidebar-log" data-toggle="tab">Logs</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="sidebar-member">
                        <div class="pl-2 pr-2">
                            <div class="box-title pb-3">Premium Member</div>
                            <div class="user-list br-bottom-1x pb-4">
                                <ul>
                                    <li>
                                        <div class="tbl-cell image">
                                            <img src="uploads/team-1.jpg" alt="">
                                        </div>
                                        <div class="tbl-cell content">
                                            <a>Steve Soren</a>
                                            <p>Lead Developer at Ipos.</p>
                                        </div>
                                        <div class="tbl-cell follow">
                                            <a href="#" class="btn btn-outline btn-info btn-pill btn-outline-1x btn-sm">Follow</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tbl-cell image">
                                            <img src="uploads/team-2.jpg" alt="">
                                        </div>
                                        <div class="tbl-cell content">
                                            <a>Cheri Aria</a>
                                            <p>Photographer and Lead Designer.</p>
                                        </div>
                                        <div class="tbl-cell follow">
                                            <a href="#" class="btn btn-info btn-pill btn-sm">Following</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tbl-cell image">
                                            <img src="uploads/team-3.jpg" alt="">
                                        </div>
                                        <div class="tbl-cell content">
                                            <a>Daniel Barnes</a>
                                            <p>Manager at IT park.</p>
                                        </div>
                                        <div class="tbl-cell follow">
                                            <a href="#" class="btn btn-outline btn-info btn-pill btn-outline-1x btn-sm">Follow</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tbl-cell image">
                                            <img src="uploads/team-4.jpg" alt="">
                                        </div>
                                        <div class="tbl-cell content">
                                            <a>Janet Collins</a>
                                            <p>Developer at atios.</p>
                                        </div>
                                        <div class="tbl-cell follow">
                                            <a href="#" class="btn btn-outline btn-info btn-pill btn-outline-1x btn-sm">Follow</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="box-title pt-3 pb-3">Users</div>
                            <div class="user-list">
                                <ul>
                                    <li>
                                        <div class="tbl-cell image">
                                            <img src="uploads/team-1.jpg" alt="">
                                        </div>
                                        <div class="tbl-cell content">
                                            <a>Steve Soren</a>
                                            <p>Lead Developer at Ipos.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tbl-cell image">
                                            <img src="uploads/team-2.jpg" alt="">
                                        </div>
                                        <div class="tbl-cell content">
                                            <a>Cheri Aria</a>
                                            <p>Photographer and Lead Designer.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tbl-cell image">
                                            <img src="uploads/team-3.jpg" alt="">
                                        </div>
                                        <div class="tbl-cell content">
                                            <a>Daniel Barnes</a>
                                            <p>Manager at IT park.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tbl-cell image">
                                            <img src="uploads/team-4.jpg" alt="">
                                        </div>
                                        <div class="tbl-cell content">
                                            <a>Janet Collins</a>
                                            <p>Developer at atios.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="sidebar-setting">
                        <div class="pl-2 pr-2">
                            <div class="box-title pb-3">General Setting</div>
                            <div class="setting-list">
                                <ul>
                                    <li class="item">
                                        <div class="label">Email Notifications</div>
                                        <div class="control"><input type="checkbox" checked class="js-switch" data-color="#13dafe" /></div>
                                    </li>
                                    <li class="item">
                                        <div class="label">Comment auto Publish</div>
                                        <div class="control"><input type="checkbox" class="js-switch" data-color="#13dafe" /></div>
                                    </li>
                                    <li class="item">
                                        <div class="label">Review Auto Publish</div>
                                        <div class="control"><input type="checkbox" checked class="js-switch" data-color="#13dafe" /></div>
                                    </li>
                                    <li class="item">
                                        <div class="label">Post Setting</div>
                                        <div class="control"><input type="checkbox" class="js-switch" data-color="#13dafe" /></div>
                                    </li>
                                    <li class="item">
                                        <div class="label">Cron Log</div>
                                        <div class="control"><input type="checkbox" class="js-switch" data-color="#13dafe" /></div>
                                    </li>
                                    <li class="item">
                                        <div class="label">Email Log</div>
                                        <div class="control"><input type="checkbox" checked class="js-switch" data-color="#13dafe" /></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="sidebar-log">
                        <div class="pl-2 pr-2">
                            <div class="box-title pb-3">Server and Application Logs</div>
                            <ul class="timeline">
                                <li>
                                    <div class="time"><small>Just Now</small></div>
                                    <a href="" target="_blank" class="timeline-container">
                                        <div class="arrow"></div>
                                        <div class="description">21 new users registered </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="time"><small>11 mins</small></div>
                                    <a href="" target="_blank" class="timeline-container">
                                        <div class="arrow"></div>
                                        <div class="description">New invoice generated <span class="badge badge-danger badge-pill badge-sm">Unpaid</span></div>
                                    </a>
                                </li>
                                <li>
                                    <div class="time"><small>15 mins</small></div>
                                    <a href="" target="_blank" class="timeline-container">
                                        <div class="arrow"></div>
                                        <div class="description">Cron Job Completed</div>
                                    </a>
                                </li>
                                <li>
                                    <div class="time"><small>20 mins</small></div>
                                    <a href="" target="_blank" class="timeline-container">
                                        <div class="arrow"></div>
                                        <div class="description">Server Restarted <span class="badge badge-success badge-pill badge-sm">Resolved</span></div>
                                    </a>
                                </li>
                                <li>
                                    <div class="time"><small>25 mins</small></div>
                                    <a href="" target="_blank" class="timeline-container">
                                        <div class="arrow"></div>
                                        <div class="description">New order received</div>
                                    </a>
                                </li>
                                <li>
                                    <div class="time"><small>30 mins</small></div>
                                    <a href="" target="_blank" class="timeline-container">
                                        <div class="arrow"></div>
                                        <div class="description">New ticket created <span class="badge badge-warning badge-pill badge-sm">High</span></div>
                                    </a>
                                </li>
                                <li>
                                    <div class="time"><small>35 mins</small></div>
                                    <a href="" target="_blank" class="timeline-container">
                                        <div class="arrow"></div>
                                        <div class="description">Payment Made by client $350.</div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Sidebar Section -->
    </div>


    <!-- Include js files -->
    @include('partials.admin._adminBottomScripts')
</body>
</html>
