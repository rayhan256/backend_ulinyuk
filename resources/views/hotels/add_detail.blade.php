@include('layouts/css')
    @include('layouts/sidebar')

        @include('layouts/navbar')
        <div class="mt-3">
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Tambah Data Hotel</h2>                
                </div>
            </div>
        </div>

        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Form Tambah Detail Hotel</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form method="get">
                                <div class="form-group row">      
                                    <label class="col-sm-2 col-form-label">ID Hotel</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id_hotel" />
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    
                                    <label class="col-sm-2 col-form-label">Kategori Kamar Hotel</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="kategori_kamar_hotel">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Harga Kamar Hotel</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="harga_kamar_hotel">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Jadwal CheckIn Hotel</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="jadwal_checkin_hotel">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Jadwal CheckOut Hotel</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="jadwal_checkout_hotel">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Fasilitas Hotel</label>
                                    <div class="col-sm-10 mb-2">
                                        <textarea name="fasilitas_hotel" id="fasilitas_hotel" class="form-control"></textarea>
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Fasilitas Kamar</label>
                                    <div class="col-sm-10 mb-2">
                                        <textarea name="fasilitas_kamar_hotel" id="fasilitas_kamar_hotel" class="form-control"></textarea>
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Fasilitas Publik</label>
                                    <div class="col-sm-10 mb-2">
                                        <textarea name="fasilitas_publik_hotel" id="fasilitas_publik_hotel" class="form-control"></textarea>
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Fasilitas Terdekat</label>
                                    <div class="col-sm-10 mb-2">
                                        <textarea name="fasilitas_terdekat_hotel" id="fasilitas_terdekat_hotel" class="form-control"></textarea>
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Fasilitas Transportasi</label>
                                    <div class="col-sm-10 mb-2">
                                        <textarea name="fasilitas_transportasi_hotel" id="fasilitas_transportasi_hotel" class="form-control"></textarea>
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Deskripsi Hotel</label>
                                    <div class="col-sm-10">
                                        <textarea name="deskripsi_hotel" id="deskripsi_hotel" class="form-control"></textarea>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-white btn-sm" type="reset">Batal</button>
                                        <button class="btn btn-primary btn-sm" id="submit_add_resto" type="submit">Simpan</button>
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