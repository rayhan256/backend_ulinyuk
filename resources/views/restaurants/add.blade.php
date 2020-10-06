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
            
        <div class="row wrapper white-bg page-heading">
            <div class="col-lg-12">
                <h2>Add Restaurant Data</h2>                
            </div>
        </div>

        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Form Add Data</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form method="get">
                                <div class="form-group row">                                    
                                    <label class="col-sm-2 col-form-label">Id Restaurant</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Id Restaurant Kategories</label>
                                    <div class="col-sm-10">
                                        <input type="text" placeholder="Resto 101-Best Restaurants" class="form-control">
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    
                                    <label class="col-sm-2 col-form-label">Restaurant Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="hr-line-dashed"></div>


                                    <label class="col-sm-2 col-form-label">Restaurant Area</label>
                                    <div class="col-sm-10">
                                        <select class="form-control m-b" name="account">
                                            <option value="Bandung">Bandung</option>
                                            <option value="Banjar">Banjar</option>
                                            <option value="Bekasi">Bekasi</option>
                                            <option value="Bogor">Bogor</option>
                                            <option value="Ciamis">Ciamis</option>
                                            <option value="Cianjur">Cianjur</option>
                                            <option value="Cimahi">Cimahi</option>
                                            <option value="Cirebon">Cirebon</option>
                                            <option value="Depok">Depok</option>
                                            <option value="Garut">Garut</option>
                                            <option value="Indramayu">Indramayu</option>
                                            <option value="Karawang">Karawang</option>
                                            <option value="Kuningan">Kuningan</option>
                                            <option value="Majalengka">Majalengka</option>
                                            <option value="Pangandaran">Pangandaran</option>
                                            <option value="Purwakarta">Purwakarta</option>
                                            <option value="Subang">Subang</option>
                                            <option value="Sukabumi">Sukabumi</option>
                                            <option value="Sumedang">Sumedang</option>
                                            <option value="Tasikmalaya">Tasikmalaya</option>
                                        </select>
                                    </div>

                                    <label class="col-sm-2 col-form-label">Restaurant Telephone</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Restaurant Address</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Restaurant Schedule</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    
                                    <label class="col-sm-2 col-form-label">Restaurant Review</label>
                                    <div class="col-sm-10">
                                        <textarea name="" cols="119" rows="5"></textarea>
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-white btn-sm" type="reset">Cancel</button>
                                        <button class="btn btn-primary btn-sm" type="submit">Save Changes</button>
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