<!--
*
*  INSPINIA - Responsive Admin Theme
*  version 2.9.3
*
-->

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>TRAVELLING | Dashboard</title>

    @include('layouts/css')

</head>

<body>
    <div id="wrapper">
        <!-- SIDEBAR -->
        @include('layouts/sidebar')
        <!-- END SIDEBAR -->

        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <!-- END NAVBAR -->
                @include('layouts/navbar')
                <!-- END NAVBAR -->

                <!-- CONTENT -->
            </div>

            <div class="wrapper wrapper-content">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <div class="ibox-tools">
                                    <span class="label label-success float-right">Monthly</span>
                                </div>
                                <h5>Views</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">386,200</h1>
                                <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                                <small>Total views</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <div class="ibox-tools">
                                    <span class="label label-info float-right">Annual</span>
                                </div>
                                <h5>Orders</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">80,800</h1>
                                <div class="stat-percent font-bold text-info">20% <i class="fa fa-level-up"></i></div>
                                <small>New orders</small>
                            </div>
                        </div>
                    </div>
        
                    <div class="col-lg-3">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <div class="ibox-tools">
                                    <span class="label label-primary float-right">Today</span>
                                </div>
                                <h5>visits</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">106,120</h1>
                                <div class="stat-percent font-bold text-navy">44% <i class="fa fa-level-up"></i></div>
                                <small>New visits</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <div class="ibox-tools">
                                    <span class="label label-danger float-right">Low value</span>
                                </div>
                                <h5>User activity</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">80,600</h1>
                                <div class="stat-percent font-bold text-danger">38% <i class="fa fa-level-down"></i></div>
                                <small>In first month</small>
                            </div>
                        </div>
            </div>
                </div>
        
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5>User project list</h5>
                                <div class="ibox-tools">
                                    <a class="collapse-link">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="ibox-content table-responsive">
                                <table class="table table-hover no-margins">
                                    <thead>
                                    <tr>
                                        <th>Update</th>
                                        <th>Date</th>
                                        <th>User</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Image Hotel</td>
                                        <td><i class="fa fa-clock-o"></i> 11:20pm</td>
                                        <td>Samantha</td>
                                        <td><span class="label label-primary">Completed</span> </td>
                                    </tr>
                                    <tr>
                                        <td>Price Room</td>
                                        <td><i class="fa fa-clock-o"></i> 10:40am</td>
                                        <td>Monica</td>
                                        <td><span class="label label-primary">Completed</span> </td>
                                    </tr>
                                    <tr>
                                        <td>Hotel Kategories</td>
                                        <td><i class="fa fa-clock-o"></i> 01:30pm</td>
                                        <td>John</td>
                                        <td><span class="label label-primary">Completed</span> </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        
        
                </div>

            <div class="footer">
                <div>
                    <strong>Copyright</strong> Example Company © 2014-2018
                </div>
            </div>

        </div>

    </div>
    
    @include('layouts/js')
</body>

</html>
