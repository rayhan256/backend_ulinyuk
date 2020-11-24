@include('layouts/css')
    @include('layouts/sidebar')

        @include('layouts/navbar')
        <div class="mt-3">
            @if(session('pesan'))
                <div class="alert alert-success" role="alert">
                    {{session('pesan')}}
                </div>
            @endif
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Data Admin</h2>                
                </div>
                <div class="col-lg-2">
                    <div style="float: right">
                        <div class="col mt-3">                       
                        <a href="{{ url('/signup')}}" class="btn btn-sm btn-primary">Tambah Data</a>                        
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="wrapper wrapper-content animated fadeInRight ecommerce">
            <div class="row mb-3 col-lg-12">
                <form class="form-inline my-2  my-lg-0" method="get" action="/destination">
                    <input type="search" name="cari" class="form-control mr-sm-2" placeholder="Search..">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>

            
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-content">

                            <table class="table table-hover" data-page-size="10">
                                <thead>
                                <tr>

                                    <th class="footable-visible footable-sortable footable-first-column">
                                        Nama Admin
                                        <span class="footable-sort-indicator"></span>
                                    </th>
                                    <th class="footable-visible footable-sortable">
                                        Tanggal Lahir
                                        <span class="footable-sort-indicator"></span>
                                    </th>
                                    <th class="footable-visible footable-sortable">
                                        Jenis Kelamin
                                        <span class="footable-sort-indicator"></span>
                                    </th>
                                    <th class="footable-visible footable-sortable">
                                        Alamat
                                        <span class="footable-sort-indicator"></span>
                                    </th>
                                    <th class="footable-visible footable-sortable">
                                        Kota
                                        <span class="footable-sort-indicator"></span>
                                    </th>
                                    <th class="footable-visible footable-sortable">
                                        Negara
                                        <span class="footable-sort-indicator"></span>
                                    </th>
                                    <th class="footable-visible footable-sortable">
                                        Telepon
                                        <span class="footable-sort-indicator"></span>
                                    </th>
                                    <th class="footable-visible footable-sortable">
                                        Email
                                        <span class="footable-sort-indicator"></span>
                                    </th>
                                    <th class="footable-visible footable-sortable">
                                        Role
                                        <span class="footable-sort-indicator"></span>
                                    </th>
                                    <th class="text-right footable-visible footable-sortable footable-last-column">
                                        Action
                                        <span class="footable-sort-indicator"></span>
                                    </th>

                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    
                                    <td class="footable-visible footable-first-column">
                                        <span class="footable-toggle"></span>
                                        <h5 id="nama_admin"></h5>
                                    </td>                                    
                                    <td class="footable-visible">
                                        <h5 id="tanggal_lahir"></h5>
                                    </td>                                    
                                    <td class="footable-visible">
                                        <h5 id="jenis_kelamin"></h5>
                                    </td>
                                    <td class="footable-visible">
                                        <h5 id="alamat"></h5>
                                    </td>
                                    <td class="footable-visible">
                                        <h5 id="kota"></h5>
                                    </td>
                                    <td class="footable-visible">
                                        <h5 id="negara"></h5>
                                    </td>
                                    <td class="footable-visible">
                                        <h5 id="telepon"></h5>
                                    </td>
                                    <td class="footable-visible">
                                        <h5 id="email"></h5>
                                    </td>
                                    <td class="footable-visible">
                                        <h5 id="role"></h5>
                                    </td>

                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <a href="/profile" class="btn-white btn btn-xs">View</a>
                                            <a href="" id="edit_profile" class="btn-white btn btn-xs">Edit</a>
                                            <a href="" class="btn-white btn btn-xs" onclick="return confirm('Hapus Data ini ?')">Hapus</a>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>

                                
                            </table>

                        </div>
                    </div>
                </div>
            </div>
            
            <script>
                const ketua = document.querySelector('#nama_admin')
                const tanggal_lahir = document.querySelector('#tanggal_lahir')
                const jenis_kelamin = document.querySelector('#jenis_kelamin')
                const alamat = document.querySelector('#alamat')
                const kota = document.querySelector('#kota')
                const negara = document.querySelector('#negara')
                const telepon = document.querySelector('#telepon')
                const email = document.querySelector('#email')
                const role = document.querySelector('#role')
                const updateProfile = document.querySelector('#edit_profile');


                fetch("{{env('APP_API_URL')}}user", {
                    headers: {
                        'Authorization' : `Bearer ${localStorage.getItem('token')}`
                    }
                }).then(response => response.json())
                .then(data => {
                    console.log(data.id)
                    ketua.innerHTML = data.nama_user;
                    tanggal_lahir.innerHTML = data.tanggal_lahir_user;
                    jenis_kelamin.innerHTML = data.jenis_kelamin_user;
                    alamat.innerHTML = data.alamat_user;
                    kota.innerHTML = data.kota_user;
                    negara.innerHTML = data.negara_user;
                    telepon.innerHTML = data.telepon_user;
                    email.innerHTML = data.email;
                    role.innerHTML = data.role;
                    updateProfile.addEventListener('click', () => {
                        window.location.replace(`http://192.168.1.8:8000/update-profile/${data.id}`)
                    })
                })

               
            </script>

        </div>

        @include('layouts/footer')

    </div>

</div>

@include('layouts/js')