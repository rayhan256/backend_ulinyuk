@include('layouts/css')
    @include('layouts/sidebar')

        @include('layouts/navbar')
        <div class="mt-3">
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Profile Admin</h2>                
                </div>
            </div>
        </div>

        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row m-b-lg m-t-lg">
                <div class="col-md-6">

                    <div class="profile-image">
                        <img src="assets/img/profile_small.jpg" class="rounded-circle circle-border m-b-md" alt="profile">
                    </div>
                    <div class="profile-info">
                        <div class="">
                            <div>
                                <h2 class="no-margins">
                                    <b id="nama_admin"></b>
                                </h2>
                                <h4>Administrator</h4>
                                <small>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam adipisci ut facere iure quaerat excepturi magni, cupiditate veritatis, eius aperiam consectetur nemo fugiat facilis, tempora architecto laboriosam dicta et nesciunt.
                                </small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <table class="table m-b-xs">
                        <tbody>
                        <tr>
                            <td>
                                <strong>Tanggal Lahir</strong>
                            </td>
                            <td>
                                <h5 id="tanggal_lahir"></h5>
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <strong>Jenis Kelamin</strong>
                            </td>
                            <td>
                                <h5 id="jenis_kelamin"></h5>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Alamat</strong>
                            </td>
                            <td>
                                <h5 id="alamat"></h5>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Kota</strong>
                            </td>
                            <td>
                                <h5 id="kota"></h5>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Negara</strong>
                            </td>
                            <td>
                                <h5 id="negara"></h5>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Telepon</strong>
                            </td>
                            <td>
                                <h5 id="telepon"></h5>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Email</strong>
                            </td>
                            <td>
                                <h5 id="email"></h5>
                            </td>
                        </tr>
                        </tbody>
                        <tr>
                            <td>
                                <button class="btn btn-primary" id="edit_profile">Edit Profile</button>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <script>
                const admin = document.querySelector('#nama_admin')
                const tanggal_lahir = document.querySelector('#tanggal_lahir')
                const jenis_kelamin = document.querySelector('#jenis_kelamin')
                const alamat = document.querySelector('#alamat')
                const kota = document.querySelector('#kota')
                const negara = document.querySelector('#negara')
                const telepon = document.querySelector('#telepon')
                const email = document.querySelector('#email')
                const updateProfile = document.querySelector('#edit_profile');


                fetch("{{env('APP_API_URL')}}user", {
                    headers: {
                        'Authorization' : `Bearer ${localStorage.getItem('token')}`
                    }
                }).then(response => response.json())
                .then(data => {
                    console.log(data.id)
                    admin.innerHTML = data.nama_user;
                    tanggal_lahir.innerHTML = data.tanggal_lahir_user;
                    jenis_kelamin.innerHTML = data.jenis_kelamin_user;
                    alamat.innerHTML = data.alamat_user;
                    kota.innerHTML = data.kota_user;
                    negara.innerHTML = data.negara_user;
                    telepon.innerHTML = data.telepon_user;
                    email.innerHTML = data.email;
                    updateProfile.addEventListener('click', () => {
                        window.location.replace(`{{env('APP_API_BASEURL')}}/update-profile/${data.id}`)
                    })
                })

               
            </script>
        </div>

        @include('layouts/footer')

    </div>

</div>

@include('layouts/js')