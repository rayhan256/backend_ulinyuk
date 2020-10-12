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
                            <h5>Form Update Profile</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form method="get">
                                <div class="form-group row">
                                    
                                    <div class="col-sm-12">
                                        <input type="hidden" placeholder="Id Admin" class="form-control">
                                    </div>                                    
                                    <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                                    <div class="col-sm-10">
                                        <input type="text" placeholder="Example Admin" class="form-control" id="nama_admin">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-10">
                                        <input type="text" placeholder="1999, July 26" class="form-control" id="tanggal_lahir_admin">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-10">
                                        <select class="form-control m-b">
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>

                                    <label class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <input type="text" placeholder="Arcamanik Permai No. E9" class="form-control" id="alamat_admin">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Kota</label>
                                    <div class="col-sm-10">
                                        <input type="text" placeholder="Bandung" class="form-control" id="kota_admin">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Telepon</label>
                                    <div class="col-sm-10">
                                        <input type="text" placeholder="098765456756" class="form-control" id="telepon_admin">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="text" placeholder="email_example@gmail.com" class="form-control" id="email_admin">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Photo</label>
                                    <div class="col-sm-10">
                                        <div class="custom-file">
                                            <input id="photo" type="file" class="custom-file-input">
                                            <label for="photo" class="custom-file-label">Choose file...</label>
                                        </div> 
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-white btn-sm" type="reset">Batal</button>
                                        <button class="btn btn-sm" style="background-color: #0096C7; color:white" class="btn" id="submit_update_admin" type="submit">Simpan</button>
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
    const nama = document.querySelector('#nama_admin').value 
    const tanggal_lahir = document.querySelector('#tanggal_lahir_admin').value
    const alamat = document.querySelector('#alamat_admin').value
    const kota = document.querySelector('#kota_admin').value
    const telepon = document.querySelector('#telepon_admin').value
    const email = document.querySelector('#email_admin').value
    const photo = document.querySelector('#photo').value
    const btn_submit = document.querySelector('#submit_update_admin')

    btn_submit.addEventListener('click', () => {
        if (nama == "" && tanggal_lahir == "" && alamat == "" && kota == "" && telepon == "" && email == "" && photo == "") alert("Data Tidak Boleh Kosong!")
    })
</script>

@include('layouts/js')