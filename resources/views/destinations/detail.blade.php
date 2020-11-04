@include('layouts/css')
    @include('layouts/sidebar')

        @include('layouts/navbar')
        <div class="mt-3">
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Detail Objek Wisata</h2>                
                </div>
                <div class="col-md-2">
                    <br>
                    <div style="float: right">
                        <a href="{{ url('/objek-wisata') }}" class="btn btn-sm btn-outline btn-primary"> <i
                            class="fa fa-th-large"></i> </a>
                        <td>  </td>
                        <a href="{{ url('/list-detail-objek-wisata') }}" class="btn btn-sm btn-outline btn-primary"> <i
                            class="fa fa-bars"></i> </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                    @foreach ($detail->galeri_destination as $item) 
                    <div class="col-md-3">
                        <div class="ibox">
                            <div class="">
                                <div>
                                    <img src="{{ $item->foto_objek_wisata }}" alt="" width='100%'>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{-- <div class="col-md-3">
                        <div class="ibox">
                            <div class="">
                                <div>
                                    <img src="{{ asset('assets/image/destinations/orchid3.jpg') }}" alt="" width='100%'>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="ibox">
                            <div class="">
                                <div>
                                    <img src="{{ asset('assets/image/destinations/orchid4.jpg') }}" alt="" width='100%'>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="ibox">
                            <div class="">
                                <div>
                                    <img src="{{ asset('assets/image/destinations/orchid5.png') }}" alt="" width='100%'>
                                </div>
                            </div>
                        </div>
                    </div> --> --}}

                    <div class="ibox product-detail">
                        <div class="ibox-content">
                            <div class="row">
                                <div class="col-md-7">
                                    <h3>                                        
                                        <b>{{$detail->nama_objek_wisata}}</b>                                        
                                    </h3>
                                    <hr>
                                    @foreach($detail->destination_detail as $data)
                                    <h4><b>Deskripsi</b></h4>
                                    <div class="">
                                        {{$data->deskripsi_objek_wisata}}
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <dl class="m-t-md">  
                                                <h4><b>Jenis Wahana</b></h4>
                                                <div class="Collapse__more__amenities">
                                                    <div class="content-amenities">
                                                        {{$data->wahana_objek_wisata}}
                                                    </div>                                            
                                                </div>
                                            </dl>
                                        </div>
                                        <div class="col-md-6">
                                            <dl class="m-t-md">  
                                                <h4><b>Fasilitas</b></h4>
                                                <div class="Collapse__more__amenities">
                                                    <div class="content-amenities">
                                                        {{$data->fasilitas_objek_wisata}}
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
                                        {{$detail->alamat_objek_wisata}}
                                        
                                    </h3>
                                    <hr>
                                    @foreach($detail->destination_detail as $data)
                                    <h3>
                                        <i class="fa fa-clock-o"></i> {{$data->jadwal_objek_wisata}}
                                    </h3>  
                                    @endforeach                                 
                                    <hr>
                                    <h3>
                                    
                                        <i class="fa fa-phone"></i> 
                                        {{$detail->telepon_objek_wisata}}
                                    
                                    </h3>                                   
                                    <hr>
                                    <div>                                                
                                        <a href="/edit-data-objek-wisata/{{$detail->id}}" class="btn btn-primary btn-sm">Edit Data</a>
                                        <a href="/tambah-galeri-objek-wisata/{{$detail->id}}" class="btn btn-primary btn-sm">Tambah Gambar</a>
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

<script>
    
</script>

@include('layouts/js')