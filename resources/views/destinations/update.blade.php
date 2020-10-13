@include('layouts/css')
    @include('layouts/sidebar')

        @include('layouts/navbar')
        <div class="mt-3">
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Update Data Objek Wisata</h2>                
                </div>
            </div>
        </div>

        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Form Update Data Objek Wisata</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form method="get">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">ID Objek Wisata</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id_objek_wisata" placeholder="001">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Kategori Objek Wisata</label>
                                    <div class="col-sm-10">
                                        <input type="text" placeholder="Destination 101-Best Destinations" id="id_kategori_objek_wisata" class="form-control">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Nama Objek Wisata</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nama_objek_wisata" placeholder="Destination A">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Area Objek Wisata</label>
                                    <div class="col-sm-10">
                                        <select class="form-control m-b" id="area_objek_wisata">
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

                                    <label class="col-sm-2 col-form-label">Telepon Objek Wisata</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="telepon_objek_wisata" placeholder="987654336712">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Alamat Objek Wisata</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="alamat_objek_wisata" placeholder="Lembang, Bandung">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Jadwal Objek Wisata</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="jadwal_objek_wisata" placeholder="Open Everyday, 10.00 AM - 10.00 PM">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-white btn-sm" type="reset">Batal</button>
                                        <button class="btn btn-primary btn-sm" id="submit_update_obwis" type="submit">Simpan</button>
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
    const id_obwis = document.querySelector('#id_objek_wisata').value
    const kategori_obwis = document.querySelector('#id_kategori_objek_wisata').value
    const nama_obwis = document.querySelector('#nama_objek_wisata').value
    //const area_obwis = document.querySelector('#area_objek_wisata').value
    const telepon_obwis = document.querySelector('#telepon_objek_wisata').value
    const alamat_obwis = document.querySelector('#alamat_objek_wisata').value
    const jadwal_obwis = document.querySelector('#jadwal_objek_wisata').value
    const btn_submit = document.querySelector('#submit_update_obwis')

    btn_submit.addEventListener('click', () => {
        if (id_obwis == "" && kategori_obwis == "" && nama_obwis == "" && telepon_obwis == "" && alamat_obwis == "" && jadwal_obwis == "" ) alert("Data Tidak Boleh Kosong!")
    })

</script>
@include('layouts/js')

