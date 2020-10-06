<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    @include('layouts/css')

</head>

<body>
    <div id="wrapper">
        <!-- SIDEBAR -->
        @include('layouts/sidebar')
        <!-- END SIDEBAR -->

        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <!-- END NAVBAR -->
                @include('layouts/navbar')
                <!-- END NAVBAR -->

                <!-- CONTENT -->
            </div>
            
        <div class="row wrapper border-bottom white-bg page-heading">            
            <h2>Profile</h2>                            
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
                                    <b> Example Admin </b>
                                </h2>
                                <h4>Administrator Hotel A</h4>
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
                                <strong>Date of Birth</strong>
                            </td>
                            <td>
                                1999, July 26
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <strong>Gender</strong>
                            </td>
                            <td>
                                Male
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Address</strong>
                            </td>
                            <td>
                                Arcamanik Permai No. E9
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>City</strong>
                            </td>
                            <td>
                                Bandung
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Telephone</strong>
                            </td>
                            <td>
                                098765456756
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Email</strong>
                            </td>
                            <td>
                                example_email@gmail.com
                            </td>
                        </tr>
                        </tbody>
                        <tr>
                            <td>
                                <a href="/update-profile" class="btn btn-primary">Update Profile</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>

        @include('layouts/footer')

    </div>

</div>

@include('layouts/js')