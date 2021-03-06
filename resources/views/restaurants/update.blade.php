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
                            <form action="{{ url('/edit-data-resto') }}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <input type="hidden" class="form-control" id="id" name="id_restaurant" value="{{$detail->id}}">                                    

                                    <input type="hidden" name="id_master" value="{{$detail->id}}">

                                    <label class="col-sm-2 col-form-label">Nama Restaurant</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nama_restaurant" name="nama_restaurant" value="{{$detail->nama_restaurant}}">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Kategori Restaurant</label>
                                    @foreach($detail->restaurant_detail as $data)
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="kategori_restaurant" name="kategori_restaurant" value="{{$data->kategori_restaurant}}">
                                    </div>
                                    @endforeach
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Telepon Restaurant</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="telepon_restaurant" name="telepon_restaurant" value="{{$detail->telepon_restaurant}}">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Alamat Restaurant</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="alamat_restaurant" name="alamat_restaurant" value="{{$detail->alamat_restaurant}}">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Jadwal Restaurant</label>
                                    @foreach($detail->restaurant_detail as $data)
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="jadwal_restaurant" name="jadwal_restaurant" value="{{$data->jadwal_restaurant}}">
                                    </div>                                    
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Fasilitas Restaurant</label>
                                    <div class="col-sm-10 mb-2">
                                        <textarea name="fasilitas_restaurant" id="fasilitas_restaurant" class="form-control">{{$data->fasilitas_restaurant}}</textarea>
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Deskripsi Restaurant</label>
                                    <div class="col-sm-10">
                                        <textarea name="deskripsi_restaurant" id="deskripsi_restaurant" class="form-control">{{$data->deskripsi_restaurant}}</textarea>
                                    </div>
                                    @endforeach
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