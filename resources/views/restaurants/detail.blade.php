@include('layouts/css')
    @include('layouts/sidebar')

        @include('layouts/navbar')
        <div class="mt-3">
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Detail Restaurant</h2>                
                </div>
                <div class="col-md-2">
                    <br>
                    <div style="float: right">
                        <a href="/restaurants" class="btn btn-sm btn-outline btn-primary"> <i
                            class="fa fa-th-large"></i> </a>
                        <td>  </td>
                        <a href="/restaurant-list" class="btn btn-sm btn-outline btn-primary"> <i
                            class="fa fa-bars"></i> </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                    <div class="col-md-3">
                        <div class="ibox">
                            <div class="">
                                <div>
                                    <img src="assets/image/restaurants/resto1.jpg" alt="" width='100%'>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="ibox">
                            <div class="">
                                <div>
                                    <img src="assets/image/restaurants/resto2.jpg" alt="" width='100%'>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="ibox">
                            <div class="">
                                <div>
                                    <img src="assets/image/restaurants/resto3.jpg" alt="" width='100%'>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="ibox">
                            <div class="">
                                <div>
                                    <img src="assets/image/restaurants/resto4.jpg" alt="" width='100%'>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ibox product-detail">
                        <div class="ibox-content">
                            <div class="row">
                                <div class="col-md-7">
                                    <h3 class="font-bold">
                                        Restaurant A
                                    </h3>
                                    <hr>
                                    <h4>Restaurant Description</h4>
                                    <div class="">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat numquam quidem quibusdam nam tenetur, rerum, maxime nostrum, commodi assumenda facere illum quis. Quas pariatur libero tempore molestiae totam beatae? Dolor.
                                        <br>
                                        <br>
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla consectetur nostrum nesciunt est temporibus deleniti quo sit iusto expedita fugit omnis quod, odit suscipit, a aspernatur! Ratione amet incidunt libero..
                                    </div>

                                </div>
                                
                                <div class="col-md-5 mt-1">
                                    <br>
                                    <hr>
                                    <h3>
                                        <i class="fa fa-map-marker"></i> Cihampelas, Bandung
                                    </h3>
                                    <hr>
                                    <h3>
                                        <i class="fa fa-clock-o"></i> Open Everyday 10.00 AM - 10.00 PM
                                    </h3>                                   
                                    <hr>
                                    <h3>
                                        <i class="fa fa-phone"></i> 0987654334567
                                    </h3>                                   
                                    <hr>
                                    <div>                                                
                                        <a href="/restaurant-update-data" class="btn btn-primary">Edit Data</a>
                                        <a href="/restaurant-gallery" class="btn btn-primary">Tambah Gambar</a>
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