@include('layouts/css')
    @include('layouts/sidebar')

        @include('layouts/navbar')
        <div class="mt-3">
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Gallery Restaurant</h2>                
                </div>
                <div class="col-md-2">
                    <br>
                    <div style="float: right">
                        <a href="/restaurant-detail" class="btn btn-sm btn-outline" style="background-color: #0096C7; color:white" class="btn"> <i
                            class="fa fa-chevron-left"></i> </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Form Tambah Gambar Restaurant</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form method="get">
                                <div class="form-group row">

                                    <label class="col-sm-2 col-form-label">ID Galeri Restaurant</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id_galeri_restaurant">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">ID Restaurant</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="id_restaurant">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Gambar Restaurant</label>
                                    <div class="col-sm-10">
                                        <div class="custom-file">
                                            <input id="gambar" type="file" class="custom-file-input">
                                            <label for="gambar" class="custom-file-label">Choose file...</label>
                                        </div> 
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-white btn-sm" type="reset">Batal</button>
                                        <button class="btn btn-sm" style="background-color: #0096C7; color:white" class="btn" id="submit_add_galeri" type="submit">Simpan</button>
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
    const id_galeri = document.querySelector('#id_galeri_restaurant').value 
    const id_resto = document.querySelector('#id_restaurant').value
    const gambar_resto = document.querySelector('#logo').value
    const btn_submit = document.querySelector('#submit_add_galeri')

    btn_submit.addEventListener('click', () => {
        if (id_galeri == "" && id_resto == "" && gambar_resto == "") alert("Data Tidak Boleh Kosong!")
    })
</script>

@include('layouts/js')