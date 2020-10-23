@include('layouts/css')
    @include('layouts/sidebar')

        @include('layouts/navbar')
        <div class="mt-3">
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Update Data Restaurant</h2>                
                </div>
            </div>
        </div>

        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Form Update Data Restaurant</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form method="get">
                                <div class="form-group row">
                                    
                                    <label class="col-sm-2 col-form-label">ID Kategori Restaurant</label>
                                    <div class="col-sm-10">
                                        <input type="text" id="id_kategori_restoran" class="form-control">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Telepon Restaurant</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="telepon_restaurant">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Alamat Restaurant</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="alamat_restaurant">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Jadwal Restaurant</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="jadwal_restaurant">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Fasilitas Restaurant</label>
                                    <div class="col-sm-10 mb-2">
                                        <textarea name="fasilitas_restaurant" id="fasilitas_restaurant" class="form-control"></textarea>
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Deskripsi Restaurant</label>
                                    <div class="col-sm-10">
                                        <textarea name="deskripsi_restaurant" id="deskripsi_restaurant" class="form-control"></textarea>
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-white btn-sm" type="reset">Batal</button>
                                        <button class="btn btn-primary btn-sm" id="submit_update_resto" type="submit">Simpan</button>
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
    const kategori_resto = document.querySelector('#id_kategori_restoran').value
    const telepon_resto = document.querySelector('#telepon_restaurant').value
    const alamat_resto = document.querySelector('#alamat_restaurant').value
    const jadwal_resto = document.querySelector('#jadwal_restaurant').value
    const deskripsi_resto = document.querySelector('#deskripsi_restaurant').value
    const btn_submit = document.querySelector('#submit_update_resto')

    button_submit.addEventListener('click', () => {
        if (id_resto == "" && kategori_resto == "" && nama_resto == "" && telepon_resto == "" && alamat_resto == "" && jadwal_resto == "" && deskripsi_resto == "" ) alert("Data Tidak Boleh Kosong!")
    })

</script>

@include('layouts/js')