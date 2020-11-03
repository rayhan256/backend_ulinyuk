@include('layouts/css')
    @include('layouts/sidebar')

        @include('layouts/navbar')


        <div class="mt-3">
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Tambah Data Objek Wisata</h2>                
                </div>
            </div>
        </div>

        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Form Tambah Detail Objek Wisata</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form action="{{ url('/tambah-detail')}}" method="post">
                                @csrf
                                <div class="form-group row">                                    
                                    <label class="col-sm-2 col-form-label">ID Kategori Objek Wisata</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id_kategori_objek_wisata" name="id_kategori_objek_wisata"/>
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    
                                        <label class="col-sm-2 col-form-label">ID Objek Wisata</label>
                                        <div class="col-sm-10">
                                        <input type="text" name="id_objek_wisata" class="form-control" value="{{$data_detail->id}}"/>
                                        </div>
                                   
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Kategori Objek Wisata</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="kategori_objek_wisata" name="kategori_objek_wisata">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Jadwal Objek Wisata</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="jadwal_objek_wisata" name="jadwal_objek_wisata">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Wahana Objek Wisata</label>
                                    <div class="col-sm-10 mb-2">
                                        <textarea name="wahana_objek_wisata" id="wahana_objek_wisata" class="form-control"></textarea>
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Fasilitas Objek Wisata</label>
                                    <div class="col-sm-10 mb-2">
                                        <textarea name="fasilitas_objek_wisata" id="fasilitas_objek_wisata" class="form-control"></textarea>
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Deskripsi Objek Wisata</label>
                                    <div class="col-sm-10 mb-2">
                                        <textarea name="deskripsi_objek_wisata" id="deskripsi_objek_wisata" class="form-control"></textarea>
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Harga Tiket</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="harga_tiket" name="harga_tiket">
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-white btn-sm" type="reset">Batal</button>
                                        <button class="btn btn-primary btn-sm" id="btn_submit" type="submit">Simpan</button>
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
    const id_kategori_resto = document.querySelector('#id_kategori_restaurant').value
    const id_resto = document.querySelector('#id_restaurant').value
    const kategori_resto = document.querySelector('#kategori_restaurant').value
    const jadwal_resto = document.querySelector('#jadwal_restaurant').value
    const fasilitas_resto = document.querySelector('#fasilitas_restaurant').value
    const deskripsi_resto = document.querySelector('#deskripsi_restaurant').value
    const btn_submit = document.querySelector('#submit_add_resto')

    btn_submit.addEventListener('click', () => {
        if (id_kategori_resto == "" && id_resto == "" && kategori_resto == "" && jadwal_resto == "" && fasilitas_resto == "" && deskripsi_resto == "" ) alert("Data Tidak Boleh Kosong!")
    })
</script>

@include('layouts/js')