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

        @foreach($data_admin as $admin)
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
                                    <b>{{$admin->nama_admin}}</b>
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
                                {{$admin->tanggal_lahir_admin}}
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <strong>Jenis Kelamin</strong>
                            </td>
                            <td>
                                {{$admin->jenis_kelamin_admin}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Alamat</strong>
                            </td>
                            <td>
                                {{$admin->alamat_admin}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Kota</strong>
                            </td>
                            <td>
                                {{$admin->kota_admin}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Telepon</strong>
                            </td>
                            <td>
                                {{$admin->telepon_admin}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Email</strong>
                            </td>
                            <td>
                                {{$admin->email_admin}}
                            </td>
                        </tr>
                        </tbody>
                        <tr>
                            <td>
                                <a href="/update-profile" class="btn btn-primary">Edit Profile</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>
        @endforeach

        @include('layouts/footer')

    </div>

</div>

@include('layouts/js')