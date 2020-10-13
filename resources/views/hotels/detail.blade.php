@include('layouts/css')
    @include('layouts/sidebar')

        @include('layouts/navbar')
        <div class="mt-3">
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Detail Hotel</h2>                
                </div>
                <div class="col-md-2">
                    <br>
                    <div style="float: right">
                        <a href="/hotel" class="btn btn-sm btn-outline btn-primary"> <i
                            class="fa fa-th-large"></i> </a>
                        <td>  </td>
                        <a href="/list-detail-hotel" class="btn btn-sm btn-outline btn-primary"> <i
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
                                    <img src="assets/image/hotels/hotel1.jpg" alt="" width='100%'>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="ibox">
                            <div class="">
                                <div>
                                    <img src="assets/image/hotels/hotel2.jpg" alt="" width='100%'>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="ibox">
                            <div class="">
                                <div>
                                    <img src="assets/image/hotels/hotel3.jpg" alt="" width='100%'>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="ibox">
                            <div class="">
                                <div>
                                    <img src="assets/image/hotels/hotel4.jpg" alt="" width='100%'>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ibox product-detail">
                        <div class="ibox-content">
                            <div class="row">
                                <div class="col-md-7">
                                    <h3 class="font-bold">
                                        Hotel A
                                    </h3>
                                    <hr>
                                    <h4>Deskripsi Hotel</h4>
                                    <div class="">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat numquam quidem quibusdam nam tenetur, rerum, maxime nostrum, commodi assumenda facere illum quis. Quas pariatur libero tempore molestiae totam beatae? Dolor.
                                        <br>
                                        <br>
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla consectetur nostrum nesciunt est temporibus deleniti quo sit iusto expedita fugit omnis quod, odit suscipit, a aspernatur! Ratione amet incidunt libero..
                                    </div>

                                    <dl class="m-t-md">
                                        
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
                                
                                <div class="col-md-5 mt-1">
                                    <br>
                                    <hr>
                                    <h3>
                                        <i class="fa fa-map-marker"></i> 
                                        Soekarno Hatta, Bandung
                                    </h3>
                                    <hr>
                                    <h3>
                                        <i class="fa fa-phone"></i> 
                                        0987654334567
                                    </h3>                                   
                                    <hr>
                                    <h3>
                                        <i class="fa fa-usd"></i> 
                                        100 / <small>night</small>
                                    </h3>                                   
                                    <hr>
                                    <div>                                                
                                        <a href="/edit-data-hotel" class="btn btn-primary">Edit Data</a>
                                        <a href="/tambah-galeri-hotel" class="btn btn-primary">Tambah Gambar</a>
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