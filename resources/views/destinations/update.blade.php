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
                            <form action="{{url('/edit-data-ow')}}" method="post">
                                @csrf

                                <div class="form-group row">
                                    <input type="hidden" class="form-control" id="id" name="id_objek_wisata" value="{{$detail->id}}">
                                    
                                    
                                    {{-- @foreach($detail->destination_detail as $data)
                                        <input type="hidden" class="form-control" id="id_kategori_objek_wisata" name="id" value="{{$data->id}}">
                                    @endforeach --}}

                                    <input type="hidden" name="id_master" value="{{$detail->id}}">
                                    <label class="col-sm-2 col-form-label">Nama Objek Wisata</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nama_objek_wisata" name="nama_objek_wisata" value="{{$detail->nama_objek_wisata}}">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Alamat Objek Wisata</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="alamat_objek_wisata" name="alamat_objek_wisata" value="{{$detail->alamat_objek_wisata}}">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Telepon Objek Wisata</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="telepon_objek_wisata" name="telepon_objek_wisata" value="{{$detail->telepon_objek_wisata}}">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Kategori Objek Wisata</label>
                                    @foreach($detail->destination_detail as $data)
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="kategori_objek_wisata" name="kategori_objek_wisata" value="{{$data->kategori_objek_wisata}}">
                                    </div>
                                    @endforeach
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Jadwal Objek Wisata</label>
                                    @foreach($detail->destination_detail as $data)
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="jadwal_objek_wisata" name="jadwal_objek_wisata" value="{{$data->jadwal_objek_wisata}}">
                                    </div>
                                    @endforeach
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Wahana Objek Wisata</label>
                                    @foreach($detail->destination_detail as $data)
                                    <div class="col-sm-10 mb-2">
                                        <textarea name="wahana_objek_wisata" id="wahana_objek_wisata" class="form-control">{{$data->wahana_objek_wisata}}</textarea>
                                    </div>
                                    @endforeach
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Fasilitas Objek Wisata</label>
                                    @foreach($detail->destination_detail as $data)
                                    <div class="col-sm-10 mb-2">
                                        <textarea name="fasilitas_objek_wisata" id="fasilitas_objek_wisata" class="form-control">{{$data->fasilitas_objek_wisata}}</textarea>
                                    </div>
                                    @endforeach
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Deskripsi Objek Wisata</label>
                                    @foreach($detail->destination_detail as $data)
                                    <div class="col-sm-10 mb-2">
                                        <textarea name="deskripsi_objek_wisata" id="deskripsi_objek_wisata" class="form-control">{{$data->deskripsi_objek_wisata}}</textarea>
                                    </div>
                                    @endforeach
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Harga Tiket</label>
                                    @foreach($detail->destination_detail as $data)
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="harga_tiket" name="harga_tiket" value="{{$data->harga_tiket}}">
                                    </div>
                                    @endforeach
                                    <div class="hr-line-dashed"></div>

                                    
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-white btn-sm" type="reset">Batal</button>
                                        <button class="btn btn-primary btn-sm" id="btn_submit" type="submit">Simpan</button>
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

