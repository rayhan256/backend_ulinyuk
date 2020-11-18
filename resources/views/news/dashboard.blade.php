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
                    <h2>Dashboard Berita</h2>                
                </div>
                <div class="col-lg-2">
                    <div style="float: right">
                        <div class="col mt-3">                       
                            <a href="{{ url('/tambah-berita') }}" class="btn btn-sm btn-primary">Tambah Data</a>                        
                        </div>
                        <br>
                        <div style="float: right">
                            <div class="mr-3">
                                <a href="{{ url('/berita') }}" class="btn btn-sm btn-outline btn-primary"> <i
                                    class="fa fa-th-large"></i> </a>
                                <td>  </td>
                                <a href="{{ url('/list-berita') }}" class="btn btn-sm btn-outline btn-primary"> <i
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
                @foreach($data_berita as $data)
                    <div class="col-md-3">
                        <div class="ibox">
                            <div class="ibox-content product-box">
    
                                <img src="{{ url('/galeri').'/'.$data->galeri_berita[0]->foto_berita }}" width="100%">
                                <div class="product-desc">
                                    <a href="{{ url('/detail-berita').'/'.$data->id }}" class="product-name"> 
                                        {{$data->judul_berita}}
                                    </a>
                                    <div class="m-t text-righ">
    
                                        <a href="{{ url('/detail-berita').'/'.$data->id }}" class="btn btn-xs btn-outline btn-primary">Detail <i
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