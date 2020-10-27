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
                                        <input type="text" class="form-control" placeholder="Example Admin">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="01-09-2020">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-10">
                                        <select class="form-control m-b" name="account">
                                            <option value="Pria">Pria</option>
                                            <option value="Wanita">Wanita</option>
                                        </select>
                                    </div>

                                    <label class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Arcamanik Permai E.9">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Kota</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Bandung">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Telepon</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="08112233456">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="example@gmail.com">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Photo</label>
                                    <div class="col-sm-10">
                                        <div class="custom-file">
                                            <input id="logo" type="file" class="custom-file-input">
                                            <label for="logo" class="custom-file-label">Choose file...</label>
                                        </div> 
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-white btn-sm" type="reset">Batal</button>
                                        <button class="btn btn-primary btn-sm" type="submit">Simpan</button>
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

@include('layouts/js')