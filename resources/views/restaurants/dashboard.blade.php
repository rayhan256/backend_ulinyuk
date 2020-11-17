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
                    <h2>Dashboard Restaurant</h2>                
                </div>
                <div class="col-lg-2">
                    <div style="float: right">
                        <div class="col mt-3">                       
                            <a href="{{ url('/tambah-data-restaurant') }}" class="btn btn-sm btn-primary">Tambah Data</a>                        
                        </div>
                        <br>
                        <div style="float: right">
                            <div class="mr-3">
                                <a href="{{ url('/restaurant') }}" class="btn btn-sm btn-outline btn-primary"> <i
                                    class="fa fa-th-large"></i> </a>
                                <td>  </td>
                                <a href="{{ url('/list-detail-restaurant') }}" class="btn btn-sm btn-outline btn-primary"> <i
                                    class="fa fa-bars"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="wrapper wrapper-content">
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                @foreach($data_restaurant as $restaurant)
                    <div class="col-md-3">
                        <div class="ibox">
                            <div class="ibox-content product-box">
    
                                <img src="{{ url('/galeri').'/'.$restaurant->galeri_restaurant[0]->foto_restaurant }}" width="100%">
                                <div class="product-desc">
                                    <a href="{{ url('/detail-restaurant').'/'.$restaurant->id }}" class="product-name"> 
                                        {{$restaurant->nama_restaurant}}
                                    </a>
                                    <div class="small m-t-xs">
                                        {{$restaurant->alamat_restaurant}}
                                    </div>
                                    <div class="m-t text-righ">
    
                                        <a href="{{ url('/detail-restaurant').'/'.$restaurant->id }}" class="btn btn-xs btn-outline btn-primary">Detail <i
                                                class="fa fa-long-arrow-right"></i> </a>
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

    @include('layouts/js')