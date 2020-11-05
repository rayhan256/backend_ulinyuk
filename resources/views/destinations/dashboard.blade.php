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
                                <a href="{{ url('/objek-wisata') }}" class="btn btn-sm btn-outline btn-primary"> <i
                                    class="fa fa-th-large"></i> </a>
                                <td>  </td>
                                <a href="{{ url('/list-detail-objek-wisata') }}" class="btn btn-sm btn-outline btn-primary"> <i
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
                @foreach($data_destination as $destination)
                    @foreach ($destination->galeri_destination as $item)
                    <div class="col-md-3">
                        <div class="ibox">
                            <div class="ibox-content product-box">
                                <img src="{{  $item->foto_objek_wisata }}" width="100%">
                                <div class="product-desc">
                                    <span class="product-price">
                                        $4
                                    </span>
                                    <a href="{{ url('/detail-objek-wisata').'/'.$destination->id }}" class="product-name"> {{$destination->nama_objek_wisata}}</a>
                                    <div class="small m-t-xs">
                                        {{$destination->alamat_objek_wisata}}
                                    </div>
                                    <div class="m-t text-righ">
                                        <a href="{{ url('/detail-objek-wisata').'/'.$destination->id }}" class="btn btn-xs btn-outline btn-primary">
                                            Detail <i class="fa fa-long-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endforeach
                </div>
            </div>
            @include('layouts/footer')
        </div>
      

    @include('layouts/js')