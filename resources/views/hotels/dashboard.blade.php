@include('layouts/css')
    @include('layouts/sidebar')

        @include('layouts/navbar')
        <div class="mt-3">
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Dashboard Hotel</h2>                
                </div>
                <div class="col-lg-2">
                    <div style="float: right">
                        <div class="col mt-3">                       
                            <a href="/tambah-data-hotel" class="btn btn-sm btn-primary"><i class="fa fa-plus-square"></i> Tambah Data</a>                        
                        </div>
                        <br>
                        <div style="float: right">
                            <div class="mr-3">
                                <a href="/hotel" class="btn btn-sm btn-outline btn-primary"> <i
                                    class="fa fa-th-large"></i> </a>
                                <td>  </td>
                                <a href="/list-detail-hotel" class="btn btn-sm btn-outline btn-primary"> <i
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
    
                                <img src="assets/image/hotels/hotel2.jpg" alt="" width='100%'>
                                <div class="product-desc">
                                    <span class="product-price">
                                        $50
                                    </span>
                                    <a href="/detail-hotel" class="product-name"> Aston Hotel Pasteur</a>
                                    <div class="small m-t-xs">
                                        Jl. Dr. Djunjunan No.162, Sukagalih, Kec. Sukajadi, Kota Bandung
                                    </div>
                                    <div class="m-t text-righ">
    
                                        <a href="/detail-hotel" class="btn btn-xs btn-outline btn-primary">Info <i
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