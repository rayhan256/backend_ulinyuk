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
                            <form action="{{url('/update')}}" method="post">
                                @csrf
                                <div class="form-group row">
                                    
                                    <div class="col-sm-12">
                                        <input type="hidden" value="{{$admin->id}}" class="form-control">
                                    </div>                                    
                                    <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="{{$admin->nama_admin}}">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" value="{{$admin->tanggal_lahir_admin}}">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-10">
                                        <select class="form-control m-b" name="jenis_kelamin_admin">
                                            <option value="Laki-laki" @if($admin->jenis_kelamin_admin == 'Laki-laki') selected @endif>Laki-laki</option>
                                            <option value="Perempuan" @if($admin->jenis_kelamin_admin == 'Perempuan') selected @endif>Perempuan</option>
                                        </select>
                                    </div>

                                    <label class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="{{$admin->alamat_admin}}">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Kota</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="{{$admin->kota_admin}}">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Negara</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="{{$admin->negara_admin}}">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Telepon</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="{{$admin->telepon_admin}}">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="{{$admin->email}}">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Photo</label>
                                    <div class="col-sm-10">
                                        <input id="gambar" name="foto_admin" type="file" class="form-control" value="{{$admin->foto_admin}}">
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