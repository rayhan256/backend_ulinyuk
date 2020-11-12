@include('layouts/css')
    @include('layouts/sidebar')

        @include('layouts/navbar')
        <div class="mt-3">
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Tambah Data Restaurant</h2>                
                </div>
            </div>
        </div>

        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Form Tambah Data Restaurant</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form action="{{ url('/tambah-data-resto') }}" method="post">
                                @csrf
                                <div class="form-group row">    
                                    <label class="col-sm-2 col-form-label">Nama Restaurant</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nama_restaurant" name="nama_restaurant">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Area Restaurant</label>
                                    <div class="col-sm-10">
                                        <select class="form-control m-b" id="area_restaurant" name="area_restaurant">
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

                                    <label class="col-sm-2 col-form-label">Telepon Restaurant</label>
                                    <div class="col-sm-10 mb-2">
                                        <input type="text" class="form-control" id="telepon_restaurant" name="telepon_restaurant">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Alamat Restaurant</label>
                                    <div class="col-sm-10">
                                        <textarea name="alamat_restaurant" id="alamat_restaurant" class="form-control"></textarea>
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-white btn-sm" type="reset">Batal</button>
                                        <button class="btn btn-primary btn-sm" id="btn_submit" type="submit">Simpan</button>
                                        
                                        {{-- <a href="/tambah-detail-restaurant" class="btn btn-primary btn-sm" id="submit_add_resto" type="submit">Selanjutnya</a> --}}
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
    const id_resto = document.querySelector('#id_restaurant').value
    const nama_resto = document.querySelector('#nama_restaurant').value
    const telepon_resto = document.querySelector('#telepon_restaurant').value
    const alamat_resto = document.querySelector('#alamat_restaurant').value
    
</script>

@include('layouts/js')