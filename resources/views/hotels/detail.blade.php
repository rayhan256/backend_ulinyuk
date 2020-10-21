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
                                    <img src="assets/image/hotels/aston1.jpg" alt="" width='100%'>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="ibox">
                            <div class="">
                                <div>
                                    <img src="assets/image/hotels/aston2.jpg" alt="" width='100%'>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="ibox">
                            <div class="">
                                <div>
                                    <img src="assets/image/hotels/aston3.jpg" alt="" width='100%'>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="ibox">
                            <div class="">
                                <div>
                                    <img src="assets/image/hotels/aston4.jpg" alt="" width='100%'>
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
                                        @foreach($detail->hotel as $ho)
                                        <b>{{$ho->nama_hotel}}</b>
                                        @endforeach
                                    </h3>
                                    <hr>
                                    <h4><b>Deskripsi</b></h4>
                                    <div class="">
                                        {{$detail->deskripsi_hotel}}
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <dl class="m-t-md">  
                                                <h4><b>Fasilitas Hotel</b></h4>
                                                <div class="Collapse__more__amenities">
                                                    <div class="content-amenities">
                                                        {{$detail->fasilitas_hotel}}
                                                    </div>                                            
                                                </div>
                                            </dl>
                                        </div>
                                        <div class="col-md-4">
                                            <dl class="m-t-md">  
                                                <h4><b>Fasilitas Kamar Hotel</b></h4>
                                                <div class="Collapse__more__amenities">
                                                    <div class="content-amenities">
                                                        {{$detail->fasilitas_kamar_hotel}}
                                                    </div>                                            
                                                </div>
                                            </dl>
                                        </div>
                                        <div class="col-md-4">
                                            <dl class="m-t-md">  
                                                <h4><b>Fasilitas Publik Hotel</b></h4>
                                                <div class="Collapse__more__amenities">
                                                    <div class="content-amenities">
                                                        {{$detail->fasilitas_publik_hotel}}
                                                    </div>                                            
                                                </div>
                                            </dl>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <dl class="m-t-md">  
                                                <h4><b>Fasilitas Terdekat Hotel</b></h4>
                                                <div class="Collapse__more__amenities">
                                                    <div class="content-amenities">
                                                        {{$detail->fasilitas_terdekat_hotel}}
                                                    </div>                                            
                                                </div>
                                            </dl>
                                        </div>
                                        <div class="col-md-4">
                                            <dl class="m-t-md">  
                                                <h4><b>Fasilitas Transportasi Hotel</b></h4>
                                                <div class="Collapse__more__amenities">
                                                    <div class="content-amenities">
                                                        {{$detail->fasilitas_transportasi_hotel}}
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
                                        @foreach($detail->hotel as $ho)
                                        <i class="fa fa-map-marker"></i> 
                                        {{$ho->alamat_hotel}}
                                        @endforeach
                                    </h3>
                                    <hr>
                                    <h3>
                                        <i class="fa fa-sign-in"></i> 
                                        {{$detail->jadwal_checkin_hotel}}
                                    </h3> 
                                    <hr>                                  
                                    <h3>
                                        <i class="fa fa-sign-out"></i> 
                                        {{$detail->jadwal_checkout_hotel}}
                                    </h3> 
                                    <hr>                                  
                                    <h3>
                                        @foreach($detail->hotel as $ho)
                                        <i class="fa fa-phone"></i> 
                                        {{$ho->telepon_hotel}}
                                        @endforeach
                                    </h3>                                   
                                    <hr>
                                    <h3>
                                        Rp. 
                                        {{$detail->harga_kamar_hotel}} / <small>night</small>
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
                    @endforeach






            </div>
        </div>

        @include('layouts/footer')

    </div>

</div>

@include('layouts/js')