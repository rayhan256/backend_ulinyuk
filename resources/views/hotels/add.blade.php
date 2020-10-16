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
                            <h5>Form Tambah Data Hotel</h5>
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
                                        <input type="text" class="form-control" id="id_hotel">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Nama Hotel</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nama_hotel">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Kategori Hotel</label>
                                    <div class="col-sm-10">
                                        <select class="form-control m-b" id="kategori_hotel">
                                            <option value="Bintang 1">*1</option>
                                            <option value="Bintang 2">*2</option>
                                            <option value="Bintang 3">*3</option>
                                            <option value="Bintang 4">*4</option>
                                            <option value="Bintang 5">*5</option>
                                        </select>
                                    </div>

                                    <label class="col-sm-2 col-form-label">Area Hotel</label>
                                    <div class="col-sm-10">
                                        <select class="form-control m-b">
                                            <option value="Bandung">Bandung</option>
                                            <option value="Banjar">Banjar</option>
                                            <option value="Bekasi">Bekasi</option>
                                            <option value="Bogor">Bogor</option>
                                            <option value="Ciamis">Ciamis</option>
                                            <option value="Cianjur">Cianjur</option>
                                            <option value="Cimahi">Cimahi</option>
                                            <option value="Cirebon">Cirebon</option>
                                            <option value="Depok">Depok</option>
                                            <option value="Garut">Garut</option>
                                            <option value="Indramayu">Indramayu</option>
                                            <option value="Karawang">Karawang</option>
                                            <option value="Kuningan">Kuningan</option>
                                            <option value="Majalengka">Majalengka</option>
                                            <option value="Pangandaran">Pangandaran</option>
                                            <option value="Purwakarta">Purwakarta</option>
                                            <option value="Subang">Subang</option>
                                            <option value="Sukabumi">Sukabumi</option>
                                            <option value="Sumedang">Sumedang</option>
                                            <option value="Tasikmalaya">Tasikmalaya</option>
                                        </select>
                                    </div>

                                    <label class="col-sm-2 col-form-label">Telepon Hotel</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="telepon_hotel">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Alamat Hotel</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="alamat_hotel">
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-white btn-sm" type="reset">Batal</button>
                                        <a href="/tambah-detail-hotel" class="btn btn-primary btn-sm" id="submit_add_resto" type="submit">Selanjutnya</a>
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
    const id_hotel = document.querySelector('#id_hotel').value
    const nama_hotel = document.querySelector('#nama_hotel').value
    //const kategori_hotel = document.querySelector('#kategori_hotel').value
    const kategori_kamar = document.querySelector('#id_kategori_kamar_hotel').value
    const telepon_hotel = document.querySelector('#telepon_hotel').value
    const alamat_hotel = document.querySelector('#alamat_hotel').value
    const btn_submit = document.querySelector('#submit_add_hotel')

    btn_submit.addEventListener('click', () => {
        if (id_hotel == "" && nama_hotel == "" && kategori_kamar == "" && telepon_hotel == "" && alamat_hotel == "") alert("Data Tidak Boleh Kosong!")
    })
</script>

@include('layouts/js')