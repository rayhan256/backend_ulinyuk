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
                            <h5>Form Update Data</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form method="get">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Destination ID</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="001">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Destination Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Destination A">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Id Destination Kategories</label>
                                    <div class="col-sm-10">
                                        <input type="text" placeholder="Destination 101-Best Destinations" class="form-control">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Destination Area</label>
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

                                    <label class="col-sm-2 col-form-label">Destination Telephone</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="987654336712">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Destination Address</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Lembang, Bandung">
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <label class="col-sm-2 col-form-label">Destination Schedule</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Open Everyday, 10.00 AM - 10.00 PM">
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    
                                    <label class="col-sm-2 col-form-label">Destination Review</label>
                                    <div class="col-sm-10">
                                        <textarea name="" placeholder="-"></textarea>
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