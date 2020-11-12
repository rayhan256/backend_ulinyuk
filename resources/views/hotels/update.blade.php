@include('layouts/css')
    @include('layouts/sidebar')

        @include('layouts/navbar')
        <div class="mt-3">
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Update Data Hotel</h2>                
                </div>
            </div>
        </div>

        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Form Update Data Hotel</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form action="{{ url('/edit-data-ho') }}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <input type="hidden" class="form-control" id="id" name="id_hotel" value="{{$detail->id}}">                                    

                                    <input type="hidden" name="id_master" value="{{$detail->id}}">
                                    
                                    <label class="col-sm-2 col-form-label">Nama Hotel</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nama_hotel" name="nama_hotel" value="{{$detail->nama_hotel}}">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Kategori Hotel</label>
                                    <div class="col-sm-10">
                                        <select class="form-control m-b" name="kategori_hotel">
                                            <option value="1" @if($detail->kategori_hotel == '1') selected @endif>*1</option>
                                            <option value="2" @if($detail->kategori_hotel == '2') selected @endif>*2</option>
                                            <option value="3" @if($detail->kategori_hotel == '3') selected @endif>*3</option>
                                            <option value="4" @if($detail->kategori_hotel == '4') selected @endif>*4</option>
                                            <option value="5" @if($detail->kategori_hotel == '5') selected @endif>*5</option>
                                        </select>
                                    </div>
                                    
                                    <label class="col-sm-2 col-form-label">Telepon Hotel</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="telepon_hotel" name="telepon_hotel" value="{{$detail->telepon_hotel}}">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Alamat Hotel</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="alamat_hotel" name="alamat_hotel" value="{{$detail->alamat_hotel}}">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Harga Kamar Hotel</label>
                                    @foreach($detail->hotel_detail as $data)
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="harga_kamar_hotel" name="harga_kamar_hotel" value="{{$data->harga_kamar_hotel}}">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Jadwal CheckIn</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="jadwal_checkin_hotel" name="jadwal_checkin_hotel" value="{{$data->jadwal_checkin_hotel}}">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Jadwal CheckOut</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="jadwal_checkout_hotel" name="jadwal_checkout_hotel" value="{{$data->jadwal_checkout_hotel}}">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Fasilitas Hotel</label>
                                    <div class="col-sm-10 mb-2">
                                        <textarea name="fasilitas_hotel" id="fasilitas_hotel" class="form-control">{{$data->fasilitas_hotel}}</textarea>
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Fasilitas Kamar</label>
                                    <div class="col-sm-10 mb-2">
                                        <textarea name="fasilitas_kamar_hotel" id="fasilitas_kamar_hotel" class="form-control">{{$data->fasilitas_kamar_hotel}}</textarea>
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Fasilitas Publik</label>
                                    <div class="col-sm-10 mb-2">
                                        <textarea name="fasilitas_publik_hotel" id="fasilitas_publik_hotel" class="form-control">{{$data->fasilitas_publik_hotel}}</textarea>
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Fasilitas Terdekat</label>
                                    <div class="col-sm-10 mb-2">
                                        <textarea name="fasilitas_terdekat_hotel" id="fasilitas_terdekat_hotel" class="form-control">{{$data->fasilitas_terdekat_hotel}}</textarea>
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Fasilitas Transportasi</label>
                                    <div class="col-sm-10 mb-2">
                                        <textarea name="fasilitas_transportasi_hotel" id="fasilitas_transportasi_hotel" class="form-control">{{$data->fasilitas_transportasi_hotel}}</textarea>
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Deskripsi Hotel</label>
                                    <div class="col-sm-10">
                                        <textarea name="deskripsi_hotel" id="deskripsi_hotel" class="form-control">{{$data->deskripsi_hotel}}</textarea>
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
    const id_hotel = document.querySelector('#id_hotel').value 
    const nama_hotel = document.querySelector('#nama_hotel').value
    const kategori_kamar = document.querySelector('#id_kategori_kamar_hotel').value
    const telepon_hotel = document.querySelector('#telepon_hotel').value
    const alamat_hotel = document.querySelector('#alamat_hotel').value
    const btn_submit = document.querySelector('#submit_update_hotel')

    btn_submit.addEventListener('click', () => {
        if (id_hotel == "" && nama_hotel == "" && kategori_kamar == "" && telepon_hotel == "" && alamat_hotel == "") alert("Data Tidak Boleh Kosong!")
    })
</script>

@include('layouts/js')