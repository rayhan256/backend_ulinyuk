@include('layouts/css')
    @include('layouts/sidebar')

        @include('layouts/navbar')
        <div class="mt-3">
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Dashboard Restaurant</h2>                
                </div>
                <div class="col-lg-2">
                    <div style="float: right">
                        <div class="col mt-3">                       
                            <a href="/restaurant-add-data" class="btn btn-sm" style="background-color: #0096C7; color:white" class="btn"><i class="fa fa-plus-square"></i> Tambah Data</a>                        
                        </div>
                        <br>
                        <div style="float: right">
                            <div class="mr-3">
                                <a href="/restaurants" class="btn btn-sm btn-outline" style="background-color: #0096C7; color:white" class="btn"> <i
                                    class="fa fa-th-large"></i> </a>
                                <td>  </td>
                                <a href="/restaurant-list" class="btn btn-sm btn-outline" style="background-color: #0096C7; color:white" class="btn"> <i
                                    class="fa fa-bars"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="wrapper wrapper-content">
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-md-3">
                        <div class="ibox">
                            <div class="ibox-content product-box">
    
                                <img src="assets/image/restaurants/resto1.jpg" alt="" width='100%'>
                                <div class="product-desc">
                                    <span class="product-price">
                                        $10
                                    </span>
                                    <a href="/restaurant-detail" class="product-name"> Restaurant A</a>
                                    <div class="small m-t-xs">
                                        Many desktop publishing packages and web page editors now.
                                    </div>
                                    <div class="m-t text-righ">
    
                                        <a href="/restaurant-detail" class="btn btn-xs" style="background-color: #0096C7; color:white" class="btn">Info <i
                                                class="fa fa-long-arrow-right"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('layouts/footer')
        </div>

    @include('layouts/js')