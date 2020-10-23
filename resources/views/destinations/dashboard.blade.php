@include('layouts/css')
    @include('layouts/sidebar')

        @include('layouts/navbar')
        <div class="mt-3">
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Dashboard Objek Wisata</h2>                
                </div>
                <div class="col-lg-2">
                    <div style="float: right">
                        <div class="col mt-3">                       
                        <a href="{{ url('/tambah-data-objek-wisata')}}" class="btn btn-sm btn-primary">Tambah Data</a>                        
                        </div>
                        <br>
                        <div style="float: right">
                            <div class="mr-3">
                                <a href="/objek-wisata" class="btn btn-sm btn-outline btn-primary"> <i
                                    class="fa fa-th-large"></i> </a>
                                <td>  </td>
                                <a href="/list-detail-objek-wisata" class="btn btn-sm btn-outline btn-primary"> <i
                                    class="fa fa-bars"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @foreach($data_destination as $destination)
        <div class="wrapper wrapper-content">
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-md-3">
                        <div class="ibox">
                            <div class="ibox-content product-box">
    
                                <img src="assets/image/destinations/orchid2.png" alt="" width='100%'>
                                <div class="product-desc">
                                    <span class="product-price">
                                        $4
                                    </span>
                                    <a href="/detail-objek-wisata" class="product-name"> {{$destination->nama_objek_wisata}}</a>
                                    <div class="small m-t-xs">
                                        {{$destination->alamat_objek_wisata}}
                                    </div>
                                    <div class="m-t text-righ">
    
                                        <a href="/detail-objek-wisata" class="btn btn-xs btn-outline btn-primary">Info <i
                                                class="fa fa-long-arrow-right"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('layouts/footer')
        </div>
        @endforeach

    @include('layouts/js')