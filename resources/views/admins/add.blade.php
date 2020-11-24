@include('layouts/css')
    @include('layouts/sidebar')

        @include('layouts/navbar')
        <div class="mt-3">
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Tambah Data Admin</h2>                
                </div>
            </div>
        </div>

        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Form Tambah Admin</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form >
                                @csrf
                                <div class="form-group row">
                                    
                                    <div class="col-sm-12">
                                        <input type="hidden" name="id" id="id" class="form-control">
                                    </div>                                    
                                    <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="nama_admin" id="nama_admin" class="form-control">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-10">
                                        <input type="date" name="tanggal_lahir_admin" id="tanggal_lahir" class="form-control">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-10">
                                        <select class="form-control m-b" name="jenis_kelamin_admin" id="jenis_kelamin" name="jenis_kelamin_admin">
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>

                                    <label class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <input type="text" id="alamat" name="alamat_admin" class="form-control">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Kota</label>
                                    <div class="col-sm-10">
                                        <input type="text" id="kota" name="kota_admin" class="form-control">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Negara</label>
                                    <div class="col-sm-10">
                                        <input type="text" id="negara" name="negara_admin" class="form-control">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Telepon</label>
                                    <div class="col-sm-10">
                                        <input type="text" id="telepon" name="telepon_admin" class="form-control">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="text" id="email" name="email" class="form-control">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Photo</label>
                                    <div class="col-sm-10">
                                        <input id="foto" name="foto_admin" type="file" class="form-control">
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

        <script>
            let id = document.querySelector('#id')
            let nama_admin = document.querySelector('#nama_admin')
            let tanggal_lahir = document.querySelector('#tanggal_lahir')
            let jenis_kelamin = document.querySelector('#jenis_kelamin')
            let alamat = document.querySelector('#alamat')
            let kota = document.querySelector('#kota')
            let negara = document.querySelector('#negara')
            let telepon = document.querySelector('#telepon')
            let email = document.querySelector('#email')
            let form = document.querySelector('form');    

            fetch("{{env('APP_API_URL')}}user", {
                headers: {
                    'Authorization' : `Bearer ${localStorage.getItem('token')}`
                }
            }).then(response => response.json())
            .then(data => {
                id.setAttribute('value', data.id)
                nama_admin.setAttribute('value', data.nama_user)
                tanggal_lahir.setAttribute('value', data.tanggal_lahir_user)
                jenis_kelamin.setAttribute('value', data.jenis_kelamin_user)
                alamat.setAttribute('value', data.alamat_user)
                kota.setAttribute('value', data.kota_user)
                negara.setAttribute('value', data.negara_user)
                telepon.setAttribute('value', data.telepon_user)
                email.setAttribute('value', data.email)
            })

            form.addEventListener('submit', (e) => {
                e.preventDefault()
                let nama_admin = document.querySelector('#nama_admin')
                let tanggal_lahir = document.querySelector('#tanggal_lahir')
                let jenis_kelamin = document.querySelector('#jenis_kelamin')
                let alamat = document.querySelector('#alamat')
                let kota = document.querySelector('#kota')
                let negara = document.querySelector('#negara')
                let telepon = document.querySelector('#telepon')
                let email = document.querySelector('#email')
                let form = document.querySelector('form');  
                
                const data = {
                        nama_user: nama_admin.value,
                        tanggal_lahir_user: tanggal_lahir.value,
                        jenis_kelamin_user: jenis_kelamin.value,
                        alamat_user: alamat.value,
                        kota_user: kota.value,
                        negara_user: negara.value,
                        telepon_user: telepon.value,
                        email : email.value
                }
                fetch(`{{env('APP_API_URL')}}update/${id.value}`, {
                    method: 'PUT',
                    headers: {
                        'Content-Type': 'application/json',
                        'Authorization': `Bearer ${localStorage.getItem('token')}`
                    },
                    body: JSON.stringify(data)
                }).then(response => response.json())
                .then(data => {
                    window.location.replace("{{env('APP_API_BASEURL')}}/profile")
                })
            })
        </script>

        @include('layouts/footer')

    </div>

</div>

@include('layouts/js')