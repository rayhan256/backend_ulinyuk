@include('layouts/css')
    @include('layouts/sidebar')

        @include('layouts/navbar')
        <div class="mt-3">
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Gallery Objek Wisata</h2>                
                </div>
            </div>
        </div>

        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Form Tambah Gambar Objek Wisata</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form method="post" action="{{ url('/tambah-galeri') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    
                                    <label class="col-sm-2 col-form-label">ID Objek Wisata</label>
                                    <div class="col-sm-10">
                                    <input type="text" name="id_objek_wisata" id="id_objek_wisata" class="form-control" value="{{$galeri->id == null ? '' : $galeri->id}}">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Gambar Objek Wisata</label>
                                    <div class="col-sm-10">
                                        <input id="gambar" name="foto_objek_wisata" type="file" class="form-control">
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-white btn-sm" type="reset">Batal</button>
                                        <button class="btn btn-primary btn-sm" id="submit_add_galeri" type="submit">Simpan</button>
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

<script>
    const id_galeri_obwis = document.querySelector('#id_galeri_objek_wisata').value 
    const id_obwis = document.querySelector('#id_objek_wisata').value
    const gambar_obwis = document.querySelector('#gambar').value
    const btn_submit = document.querySelector('#submit_add_galeri')

    btn_submit.addEventListener('click', () => {
        if (id_galeri_obwis == "" && id_obwis == "" && gambar_obwis == "") alert("Data Tidak Boleh Kosong!")
    })
</script>

@include('layouts/js')