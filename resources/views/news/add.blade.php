@include('layouts/css')
    @include('layouts/sidebar')

        @include('layouts/navbar')
        <div class="mt-3">
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Tambah Data Berita</h2>                
                </div>
            </div>
        </div>

        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Form Tambah Data Berita</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form action="{{ url('/tambah') }}" method="post">
                                @csrf
                                <div class="form-group row">    
                                    <label class="col-sm-2 col-form-label">Judul Berita</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="judul_berita" name="judul_berita">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Tanggal Berita</label>
                                    <div class="col-sm-10 mb-2">
                                        <input type="date" class="form-control" id="tanggal_berita" name="tanggal_berita">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Penerbit Berita</label>
                                    <div class="col-sm-10 mb-2">
                                        <input type="text" class="form-control" id="penerbit_berita" name="penerbit_berita">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Deskripsi Berita</label>
                                    <div class="col-sm-10">
                                        <textarea name="deskripsi_berita" id="deskripsi_berita" class="form-control"></textarea>
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