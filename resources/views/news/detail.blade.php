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
                    <h2>Detail Berita</h2>                
                </div>
                <div class="col-md-2">
                    <br>
                    <div style="float: right">
                        <a href="{{ url('/berita') }}" class="btn btn-sm btn-outline btn-primary"> <i
                            class="fa fa-th-large"></i> </a>
                        <td>  </td>
                        <a href="{{ url('/list-berita') }}" class="btn btn-sm btn-outline btn-primary"> <i
                            class="fa fa-bars"></i> </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                    @foreach($detail->galeri_berita as $item)
                    <div class="col-md-3">
                        <div class="ibox">
                            <div class="">
                                {{$item->foto_berita}}
                                <div>
                                    <img src="{{ url('/galeri').'/'.$item->foto_berita }}" width='100%'>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <div class="ibox product-detail col-12">
                        <div class="ibox-content">
                            <div class="row">
                                <div class="col-md-7">
                                    <h3>
                                        <b>{{$detail->judul_berita}}</b>
                                    </h3>
                                    <hr>

                                    <h4>Deskripsi</h4>
                                    <div class="">
                                        {{$detail->deskripsi_berita}}
                                    </div>

                                </div>
                                
                                <div class="col-md-5 mt-1">
                                    <br>
                                    <hr>
                                    <h3>
                                        <i class="fa fa-map-marker"></i> {{$detail->penerbit_berita}}
                                    </h3>
                                    <hr>
                                    <h3>
                                        <i class="fa fa-map-marker"></i> {{$detail->tanggal_berita}}
                                    </h3>
                                    <hr>
                                    
                                    <div> 
                                        <a href="/edit-berita/{{$detail->id}}" class="btn btn-primary btn-sm">Edit Data</a>
                                        <a href="/tambah-galeri-berita/{{$detail->id}}" class="btn btn-primary btn-sm">Tambah Gambar</a>
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