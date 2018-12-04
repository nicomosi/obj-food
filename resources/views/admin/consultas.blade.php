
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
                        <li class="menu-title">Main</li>
                        <li class="has-sub">
                            <a><i class="icon-screen-desktop"></i><span>Dashboard</span><i class="arrow"></i></a></i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="dashboard-crypto.html"><span>Cryptocoin</span></a>
                                </li>
                                <li>
                                    <a href="dashboard-ecommerce.html"><span>Ecommerce</span></a>
                                </li>
                                <li>
                                    <a href="dashboard-crm.html"><span>CRM</span></a>
                                </li>
                                <li>
                                    <a href="dashboard-analytics.html"><span>Analytics</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
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

                    </ul>
                </div>
            </div>
            <!-- Page header -->
            @include('partials.admin._adminHeader')
            <!-- Main Page Wrapper -->
            <div class="page-wrapper">
                <!-- Page Title -->
                <div class="page-title">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <h2 class="page-title-text">Consultas</h2>
                        </div>
                        <div class="col-sm-6 text-right">
                            <div class="breadcrumbs">
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li>Support Ticket</li>
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
                                    <div class="panel-title">
                                        <span class="panel-title-text">Todas las consultas</span>
                                    </div>
                                </div>
                                <div id="ticket-table">
                                    <table class="ticket-table" style="width: 100%;">
                                        <thead>
                                            <tr><th class="d-none"></th></tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($consultas as $consulta)

                                            <tr>
                                                <td>
                                                    <div class="ticket-block">
                                                        <div class="ticket">
                                                            <div class="row ticket-hdr">
                                                                <div class="col-sm-4 card-left text-left">
                                                                    <span class="text-center">#{{$consulta->id}}</span>
                                                                </div>
                                                                <div class="col-sm-8 text-right ticket-right">
                                                                    <span>{{$consulta->created_at}}</span>
                                                                </div>
                                                            </div>
                                                            <div class="row ticket-bdy">
                                                                <div class="col-sm-6 col-md-5 text-left">
                                                                    <div class="ticket-img">
                                                                        <i class="icon-user"></i>
                                                                    </div>
                                                                    <div class="ticket-info">
                                                                        <a class="ticket-name" target="_blank">{{$consulta->nombre}}</a>
                                                                        <div class="ticket-text">{{$consulta->email}}</div>
                                                                        <div class="ticket-text">{{$consulta->celular}}</div>
                                                                        <div class="ticket-text">Deparmtent - Support</div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6 col-md-7 ticket-subject">
                                                                    <span>Asunto</span>
                                                                    <p>Theme is not installing</p>
                                                                </div>
                                                            </div>
                                                            <div class="row ticket-ftr align-items-center">
                                                                <div class="col-sm-8 text-left">
                                                                    <span class="badge badge-light badge-pill badge-sm">Se actualizó: {{$consulta->updated_at}}</span>
                                                                    <span class="badge badge-default badge-pill badge-sm">Open</span>
                                                                    <span class="badge badge-primary badge-pill badge-sm">New</span>

                                                                </div>
                                                                <div class="col-sm-4 text-right ticket-action">
                                                                    <a href="#" class="btn btn-primary btn-circle m-1 m-1"><i class="icon-pencil"></i></a>
                                                                    <a class="btn btn-danger btn-circle m-1" href=""><i class="icon-trash"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach


                                            <tr>
                                                <td>
                                                    <div class="ticket-block">
                                                        <div class="ticket">
                                                            <div class="row ticket-hdr">
                                                                <div class="col-sm-4 card-left text-left">
                                                                    <span class="text-center">#2</span>
                                                                </div>
                                                                <div class="col-sm-8 text-right ticket-right">
                                                                    <span>Created Date - 11 March 2018</span>
                                                                </div>
                                                            </div>
                                                            <div class="row ticket-bdy">
                                                                <div class="col-sm-6 col-md-5 text-left">
                                                                    <div class="ticket-img">
                                                                        <i class="icon-user"></i>
                                                                    </div>
                                                                    <div class="ticket-info">
                                                                        <a class="ticket-name" target="_blank">Antheny</a>
                                                                        <div class="ticket-text">Deparmtent - Support</div>
                                                                        <div class="ticket-text">Priority - <span class="badge badge-danger badge-pill badge-sm">High</span></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6 col-md-7 ticket-subject">
                                                                    <span>Subject</span>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor vel quisquam temporibus incidunt.</p>
                                                                </div>
                                                            </div>
                                                            <div class="row ticket-ftr align-items-center">
                                                                <div class="col-sm-8 text-left">
                                                                    <span class="badge badge-light badge-pill badge-sm">Last updated -  11 March 2018</span>
                                                                    <span class="badge badge-default badge-pill badge-sm">Open</span>
                                                                    <span class="badge badge-warning badge-pill badge-sm">Wating for Reply</span>

                                                                </div>
                                                                <div class="col-sm-4 text-right ticket-action">
                                                                    <a href="#" class="btn btn-primary btn-circle m-1 m-1"><i class="icon-pencil"></i></a>
                                                                    <a class="btn btn-danger btn-circle m-1"><i class="icon-trash"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
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
