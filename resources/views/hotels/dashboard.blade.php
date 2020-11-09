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
                    <h2>Dashboard Hotel</h2>                
                </div>
                <div class="col-lg-2">
                    <div style="float: right">
                        <div class="col mt-3">                       
                            <a href="{{ url('/tambah-data-hotel') }}" class="btn btn-sm btn-primary">Tambah Data</a>                        
                        </div>
                        <br>
                        <div style="float: right">
                            <div class="mr-3">
                                <a href="{{ url('/hotel') }}" class="btn btn-sm btn-outline btn-primary"> <i
                                    class="fa fa-th-large"></i> </a>
                                <td>  </td>
                                <a href="{{ url('/list-detail-hotel') }}" class="btn btn-sm btn-outline btn-primary"> <i
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
                @foreach($data_hotel as $hotel)
                    <div class="col-md-3">
                        <div class="ibox">
                            <div class="ibox-content product-box">
    
                                <img src="{{ url('/galeri').'/'.$hotel->galeri_hotel[0]->foto_hotel }}" width="100%">
                                <div class="product-desc">
                                    <span class="product-price">
                                        $5
                                    </span>
                                    <a href="{{ url('/detail-hotel').'/'.$hotel->id }}" class="product-name"> {{$hotel->nama_hotel}}</a>
                                    <div class="small m-t-xs">
                                        {{$hotel->alamat_hotel}}
                                    </div>
                                    <div class="m-t text-righ">    
                                        <a href="{{ url('/detail-hotel').'/'.$hotel->id }}" class="btn btn-xs btn-outline btn-primary">
                                            Detail <i class="fa fa-long-arrow-right"></i>
                                        </a>
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