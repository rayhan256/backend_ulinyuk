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
                        <a href="/restaurant" class="btn btn-sm btn-outline btn-primary"> <i
                            class="fa fa-th-large"></i> </a>
                        <td>  </td>
                        <a href="/list-detail-restaurant" class="btn btn-sm btn-outline btn-primary"> <i
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
                                    <img src="assets/image/restaurants/lawangwangi3.jpg" alt="" width='100%'>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="ibox">
                            <div class="">
                                <div>
                                    <img src="assets/image/restaurants/lawangwangi1.jpg" alt="" width='100%'>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="ibox">
                            <div class="">
                                <div>
                                    <img src="assets/image/restaurants/lawangwangi2.jpg" alt="" width='100%'>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="ibox">
                            <div class="">
                                <div>
                                    <img src="assets/image/restaurants/lawangwangi4.jpg" alt="" width='100%'>
                                </div>
                            </div>
                        </div>
                    </div>

                    @foreach($data_detail as $detail)
                    <div class="ibox product-detail">
                        <div class="ibox-content">
                            <div class="row">
                                <div class="col-md-7">
                                    <h3>
                                        @foreach($detail->restaurant as $resto)
                                        <b>{{$resto->nama_restaurant}}</b>
                                        @endforeach
                                    </h3>
                                    <hr>
                                    <h4>Deskripsi</h4>
                                    <div class="">
                                        {{$detail->deskripsi_restaurant}}
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <dl class="m-t-md">  
                                                <h4><b>Fasilitas Restaurant</b></h4>
                                                <div class="Collapse__more__amenities">
                                                    <div class="content-amenities">
                                                        {{$detail->fasilitas_restaurant}}
                                                    </div>                                            
                                                </div>
                                            </dl>
                                        </div>
                                    </div>

                                </div>
                                
                                <div class="col-md-5 mt-1">
                                    <br>
                                    <hr>
                                    <h3>
                                        @foreach($detail->restaurant as $resto)
                                        <i class="fa fa-map-marker"></i> {{$resto->alamat_restaurant}}
                                        @endforeach
                                    </h3>
                                    <hr>
                                    <h3>
                                        <i class="fa fa-clock-o"></i> {{$detail->jadwal_restaurant}}
                                    </h3>                                   
                                    <hr>
                                    <h3>
                                        @foreach($detail->restaurant as $resto)
                                        <i class="fa fa-phone"></i> {{$resto->telepon_restaurant}}
                                        @endforeach
                                    </h3>                                   
                                    <hr>
                                    <div>                                                
                                        <a href="/edit-data-restaurant" class="btn btn-primary">Edit Data</a>
                                        <a href="/tambah-galeri-restaurant" class="btn btn-primary">Tambah Gambar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach






            </div>
        </div>

        @include('layouts/footer')

    </div>

</div>

@include('layouts/js')