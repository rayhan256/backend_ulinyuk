@include('layouts/css')
    @include('layouts/sidebar')

        @include('layouts/navbar')
        <div class="mt-3">
            @if(session('sukses'))
                <div class="alert alert-success" role="alert">
                    {{session('sukses')}}
                </div>
            @endif
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Detail Hotel</h2>                
                </div>
                <div class="col-md-2">
                    <br>
                    <div style="float: right">
                        <a href="{{ url('/hotel') }}" class="btn btn-sm btn-outline btn-primary"> <i
                            class="fa fa-th-large"></i> </a>
                        <td>  </td>
                        <a href="{{ url('/list-detail-hotel') }}" class="btn btn-sm btn-outline btn-primary"> <i
                            class="fa fa-bars"></i> </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                @foreach($detail->galeri_hotel as $item)
                    <div class="col-md-3">
                        <div class="ibox">
                            <div class="">
                                <div>
                                    <img src="{{ url('/galeri').'/'.$item->foto_hotel }}" width='100%'>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                    {{-- <div class="col-md-3">
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
                    </div> --}}

                    <div class="ibox product-detail col-12">
                        <div class="ibox-content">
                            <div class="row">
                                <div class="col-md-7">
                                    <h3>
                                        <b>{{$detail->nama_hotel}}</b>
                                    </h3>
                                    <hr>
                                    @foreach($detail->hotel_detail as $data)
                                    <h4><b>Deskripsi</b></h4>
                                    <div class="">
                                        {{$data->deskripsi_hotel}}
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <dl class="m-t-md">  
                                                <h4><b>Fasilitas Hotel</b></h4>
                                                <div class="Collapse__more__amenities">
                                                    <div class="content-amenities">
                                                        {{$data->fasilitas_hotel}}
                                                    </div>                                            
                                                </div>
                                            </dl>
                                        </div>
                                        <div class="col-md-4">
                                            <dl class="m-t-md">  
                                                <h4><b>Fasilitas Kamar Hotel</b></h4>
                                                <div class="Collapse__more__amenities">
                                                    <div class="content-amenities">
                                                        {{$data->fasilitas_kamar_hotel}}
                                                    </div>                                            
                                                </div>
                                            </dl>
                                        </div>
                                        <div class="col-md-4">
                                            <dl class="m-t-md">  
                                                <h4><b>Fasilitas Publik Hotel</b></h4>
                                                <div class="Collapse__more__amenities">
                                                    <div class="content-amenities">
                                                        {{$data->fasilitas_publik_hotel}}
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
                                                        {{$data->fasilitas_terdekat_hotel}}
                                                    </div>                                            
                                                </div>
                                            </dl>
                                        </div>
                                        <div class="col-md-4">
                                            <dl class="m-t-md">  
                                                <h4><b>Fasilitas Transportasi Hotel</b></h4>
                                                <div class="Collapse__more__amenities">
                                                    <div class="content-amenities">
                                                        {{$data->fasilitas_transportasi_hotel}}
                                                    </div>                                            
                                                </div>
                                            </dl>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                                
                                <div class="col-md-5 mt-1">
                                    <br>
                                    <hr>
                                    <h3>
                                        <i class="fa fa-map-marker"></i> 
                                        {{$detail->alamat_hotel}}
                                    </h3>
                                    <hr>
                                    @foreach($detail->hotel_detail as $data)
                                    <h3>
                                        <i class="fa fa-sign-in"></i> 
                                        {{$data->jadwal_checkin_hotel}}
                                    </h3> 
                                    <hr>                                  
                                    <h3>
                                        <i class="fa fa-sign-out"></i> 
                                        {{$data->jadwal_checkout_hotel}}
                                    </h3> 
                                    @endforeach
                                    <hr>                                  
                                    <h3>
                                        <i class="fa fa-phone"></i> 
                                        {{$detail->telepon_hotel}}
                                    </h3>                                   
                                    <hr>
                                    @foreach($detail->hotel_detail as $data)
                                    <h3>
                                        Rp. 
                                        {{$data->harga_kamar_hotel}} / <small>night</small>
                                    </h3> 
                                    @endforeach                                  
                                    <hr>
                                    <div> 
                                        @if($detail->hotel_detail->count() <= 0)                                               
                                        <a href="/tambah-detail-hotel/{{$detail->id}}" class="btn btn-primary btn-sm">Tambah Detail</a>
                                        @else
                                        <a href="/edit-data-hotel/{{$detail->id}}" class="btn btn-primary btn-sm">Edit Data</a>
                                        @endif
                                        <a href="/tambah-galeri-hotel/{{$detail->id}}" class="btn btn-primary btn-sm">Tambah Gambar</a>
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