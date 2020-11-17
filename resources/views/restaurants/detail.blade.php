@include('layouts/css')
    @include('layouts/sidebar')

        @include('layouts/navbar')
        <div class="mt-3">
            @if(session('pesan'))
                <div class="alert alert-success" role="alert">
                    {{session('pesan')}}
                </div>
            @endif
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Detail Restaurant</h2>                
                </div>
                <div class="col-md-2">
                    <br>
                    <div style="float: right">
                        <a href="{{ url('/restaurant') }}" class="btn btn-sm btn-outline btn-primary"> <i
                            class="fa fa-th-large"></i> </a>
                        <td>  </td>
                        <a href="{{ url('/list-detail-restaurant') }}" class="btn btn-sm btn-outline btn-primary"> <i
                            class="fa fa-bars"></i> </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                @foreach($detail->galeri_restaurant as $item)
                    <div class="col-md-3">
                        <div class="ibox">
                            <div class="">
                                <div>
                                    <img src="{{ url('/galeri').'/'.$item->foto_restaurant }}" width='100%'>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{-- <div class="col-md-3">
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
                    </div> --}}

                    <div class="ibox product-detail col-12">
                        <div class="ibox-content">
                            <div class="row">
                                <div class="col-md-7">
                                    <h3>
                                        <b>{{$detail->nama_restaurant}}</b>
                                    </h3>
                                    <hr>
                                    @foreach($detail->restaurant_detail as $data)
                                    <h4>Deskripsi</h4>
                                    <div class="">
                                        {{$data->deskripsi_restaurant}}
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <dl class="m-t-md">  
                                                <h4><b>Fasilitas Restaurant</b></h4>
                                                <div class="Collapse__more__amenities">
                                                    <div class="content-amenities">
                                                        {{$data->fasilitas_restaurant}}
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
                                        <i class="fa fa-map-marker"></i> {{$detail->alamat_restaurant}}
                                    </h3>
                                    <hr>
                                    @foreach($detail->restaurant_detail as $data)
                                    <h3>
                                        <i class="fa fa-clock-o"></i> {{$data->jadwal_restaurant}}
                                    </h3> 
                                    @endforeach                                  
                                    <hr>
                                    <h3>
                                        <i class="fa fa-phone"></i> {{$detail->telepon_restaurant}}
                                    </h3>                                   
                                    <hr>
                                    <div>                                                
                                        @if($detail->restaurant_detail->count() <= 0)                                               
                                        <a href="/tambah-detail-restaurant/{{$detail->id}}" class="btn btn-primary btn-sm">Tambah Detail</a>
                                        @else
                                        <a href="/edit-data-restaurant/{{$detail->id}}" class="btn btn-primary btn-sm">Edit Data</a>
                                        @endif
                                        <a href="/tambah-galeri-restaurant/{{$detail->id}}" class="btn btn-primary btn-sm">Tambah Gambar</a>
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