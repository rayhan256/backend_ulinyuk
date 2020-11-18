@include('layouts/css')
    @include('layouts/sidebar')

        @include('layouts/navbar')
        <div class="mt-3">
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Update Data Profile</h2>                
                </div>
            </div>
        </div>

        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Form Update Berita</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form action="{{url('/edit')}}" method="post">
                                @csrf
                                <div class="form-group row">
                                    
                                    <div class="col-sm-12">
                                        <input type="hidden" value="{{$berita->id}}" class="form-control">
                                    </div>                                    
                                    <label class="col-sm-2 col-form-label">Judul Berita</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="{{$berita->judul_berita}}">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Tanggal Berita</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" value="{{$berita->tanggal_berita}}">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Penerbit Berita</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="{{$berita->penerbit_berita}}">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Deskripsi Berita</label>
                                    <div class="col-sm-10">
                                        <textarea name="deskripsi_berita" id="deskripsi_berita" class="form-control">{{$berita->deskripsi_berita}}</textarea>
                                    </div>
                                    <div class="hr-line-dashed"></div>


                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-white btn-sm" type="reset">Batal</button>
                                        <button class="btn btn-primary btn-sm" type="submit">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts/footer')

    </div>

</div>

@include('layouts/js')