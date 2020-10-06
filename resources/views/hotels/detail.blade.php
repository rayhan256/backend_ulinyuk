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
                <h2>Dashboard Hotels</h2>                
            </div>
            <div class="col-lg-2">
                <div class="col mt-3">
                    <center>
                    <a href="/hotel-add-data" class="btn btn-lg btn-primary">Add <i class="fa fa-plus"></i></a>
                    </center>
                </div>
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
                                    
                                    <h4>Hotel description</h4>

                                    <div class="small text-muted">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat numquam quidem quibusdam nam tenetur, rerum, maxime nostrum, commodi assumenda facere illum quis. Quas pariatur libero tempore molestiae totam beatae? Dolor.
                                        <br>
                                        <br>
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla consectetur nostrum nesciunt est temporibus deleniti quo sit iusto expedita fugit omnis quod, odit suscipit, a aspernatur! Ratione amet incidunt libero..
                                    </div>
                                    <dl class="small m-t-md">
                                        <dt>Description lists</dt>
                                        <dd>A description list is perfect for defining terms.</dd>
                                        <dt>Euismod</dt>
                                        <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                                        <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                                        <dt>Malesuada porta</dt>
                                        <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                                    </dl>

                                </div>
                                        <div class="col-md-4 mt-5">
                                            <hr>
                                            <i class="fa fa-map-marker"></i> Locations
                                            <hr>
                                            <div>
                                                <button class="btn btn-primary float-right">Add to cart</button>
                                                <h1 class="product-main-price">$406,602 <small class="text-muted">Exclude Tax</small> </h1>
                                            </div>
                                            <hr>
                                        </div>
                            </div>

                        </div>
                        <div class="ibox-footer">
                            <span class="float-right">
                                Full stock - <i class="fa fa-clock-o"></i> 14.04.2016 10:04 pm
                            </span>
                            The generated Lorem Ipsum is therefore always free
                        </div>
                    </div>

                </div>
            </div>
        </div>

        @include('layouts/footer')

    </div>

</div>

@include('layouts/js')