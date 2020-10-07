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
                <h2>Hotel Detail</h2>                
            </div>
            <div class="col-lg-2">
                <br>
                <center>
                    <a href="/hotels" class="btn btn-sm btn-outline btn-primary"> <i
                        class="fa fa-th-large"></i> </a>
                    <td>  </td>
                    <a href="/hotel-list" class="btn btn-sm btn-outline btn-primary"> <i
                        class="fa fa-bars"></i> </a>
                </center>
            </div>
        </div>

        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">

                    <div class="ibox product-detail">
                        <div class="ibox-content">

                            <div class="row">                                
                                    <center>                                   
                                        <img src="assets/image/hotels/hotel1.jpg" alt="" width="80%">
                                    </center>

                                <div class="col-md-8 mt-3">

                                    <h2 class="font-bold m-b-xs">
                                        Hotel A
                                    </h2>                                
                                    <hr>
                                    
                                    <h4>Hotel Description</h4>

                                    <div class="">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat numquam quidem quibusdam nam tenetur, rerum, maxime nostrum, commodi assumenda facere illum quis. Quas pariatur libero tempore molestiae totam beatae? Dolor.
                                        <br>
                                        <br>
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla consectetur nostrum nesciunt est temporibus deleniti quo sit iusto expedita fugit omnis quod, odit suscipit, a aspernatur! Ratione amet incidunt libero..
                                    </div>
                                    <dl class="m-t-md">
                                        <dt>Featured Aminities</dt>
                                        <div class="Collapse__more__amenities">
                                            <div class="content-amenities">
                                                <ul>
                                                    <li>Free self parking</li>
                                                    <li>Free WiFi</li> 
                                                    <li>Number of restaurants - 5</li> 
                                                    <li>Number of outdoor pools - 3</li> 
                                                    <li>Swimming pool</li> 
                                                    <li>Number of poolside bars - 3</li> <li>Waterslide</li> 
                                                    <li>Bar/lounge</li>
                                                </ul>
                                            </div>                                            
                                        </div>
                                        <dt>Hotel Facility</dt>
                                        <div class="Collapse__more__amenities">
                                            <div class="content-amenities">
                                                <ul>
                                                    <li>Free self parking</li>
                                                    <li>Free WiFi</li> 
                                                    <li>Number of restaurants - 5</li> 
                                                    <li>Number of outdoor pools - 3</li> 
                                                    <li>Swimming pool</li> 
                                                    <li>Number of poolside bars - 3</li> <li>Waterslide</li> 
                                                    <li>Bar/lounge</li>
                                                </ul>
                                            </div>                                            
                                        </div>
                                    </dl>

                                </div>
                                        <div class="col-md-4 mt-5">
                                            <div></div>
                                            <hr>
                                            <i class="fa fa-map-marker"></i> Soekarno Hatta, Bandung
                                            <hr>
                                            <i class="fa fa-phone"></i> 0987654334567
                                            <hr>
                                            <div>                                                
                                                <i class="fa fa-usd"></i> 120.0 <small>/ room / night</small>
                                            </div>
                                            <hr>
                                            <div>                                                
                                                <a href="/hotel-update-data" class="btn btn-primary">Update Data</a>
                                            </div>
                                        </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        @include('layouts/footer')

    </div>

</div>

@include('layouts/js')