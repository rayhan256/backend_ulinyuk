<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

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

        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>Dashboard Destinations</h2>                
            </div>
            <div class="col-lg-2">
                <div class="col mt-3">
                    <center>
                    <a href="/destinations" class="btn btn-lg btn-primary">Add <i class="fa fa-plus"></i></a>
                    </center>
                </div>
                <br>
                <center>
                    <a href="/destinations" class="btn btn-sm btn-outline btn-primary"> <i
                        class="fa fa-th-large"></i> </a>
                    <td>  </td>
                    <a href="/destination-list" class="btn btn-sm btn-outline btn-primary"> <i
                        class="fa fa-bars"></i> </a>
                </center>
            </div>
        </div>

        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-md-3">
                    <div class="ibox">
                        <div class="ibox-content product-box">

                            <img src="assets/image/destinations/destination1.jpg" alt="" width='100%'>
                            <div class="product-desc">
                                <span class="product-price">
                                    $10
                                </span>
                                <a href="#" class="product-name"> Destination A</a>
                                <div class="small m-t-xs">
                                    Many desktop publishing packages and web page editors now.
                                </div>
                                <div class="m-t text-righ">

                                    <a href="/destination-detail" class="btn btn-xs btn-outline btn-primary">Info <i
                                            class="fa fa-long-arrow-right"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="ibox">
                        <div class="ibox-content product-box">

                            <img src="assets/image/destinations/destination2.jpg" alt="" width='100%'>
                            <div class="product-desc">
                                <span class="product-price">
                                    $10
                                </span>
                                <a href="#" class="product-name"> Destination B</a>
                                <div class="small m-t-xs">
                                    Many desktop publishing packages and web page editors now.
                                </div>
                                <div class="m-t text-righ">

                                    <a href="/destination-detail" class="btn btn-xs btn-outline btn-primary">Info <i
                                            class="fa fa-long-arrow-right"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="ibox">
                        <div class="ibox-content product-box">

                            <img src="assets/image/destinations/destination3.jpg" alt="" width='100%'>
                            <div class="product-desc">
                                <span class="product-price">
                                    $10
                                </span>
                                <a href="#" class="product-name"> Destination C</a>
                                <div class="small m-t-xs">
                                    Many desktop publishing packages and web page editors now.
                                </div>
                                <div class="m-t text-righ">

                                    <a href="/destination-detail" class="btn btn-xs btn-outline btn-primary">Info <i
                                            class="fa fa-long-arrow-right"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="ibox">
                        <div class="ibox-content product-box">

                            <img src="assets/image/destinations/destination4.jpg" alt="" width='100%'>
                            <div class="product-desc">
                                <span class="product-price">
                                    $10
                                </span>
                                <a href="#" class="product-name"> Destination D</a>
                                <div class="small m-t-xs">
                                    Many desktop publishing packages and web page editors now.
                                </div>
                                <div class="m-t text-righ">

                                    <a href="/destination-detail" class="btn btn-xs btn-outline btn-primary">Info <i
                                            class="fa fa-long-arrow-right"></i> </a>
                                </div>
                            </div>
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