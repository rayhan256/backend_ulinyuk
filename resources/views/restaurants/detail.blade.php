@include('layouts/css')
    @include('layouts/sidebar')

        @include('layouts/navbar')
        <div class="mt-3">
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Detail Restaurant</h2>                
                </div>
                <div class="col-md-2">
                    <br>
                    <div style="float: right">
                        <a href="/restaurant" class="btn btn-sm btn-outline btn-primary"> <i
                            class="fa fa-th-large"></i> </a>
                        <td>  </td>
                        <a href="/list-detail-restaurant" class="btn btn-sm btn-outline btn-primary"> <i
                            class="fa fa-bars"></i> </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                    <div class="col-md-3">
                        <div class="ibox">
                            <div class="">
                                <div>
                                    <img src="assets/image/restaurants/lawangwangi3.jpg" alt="" width='100%'>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="ibox">
                            <div class="">
                                <div>
                                    <img src="assets/image/restaurants/lawangwangi1.jpg" alt="" width='100%'>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="ibox">
                            <div class="">
                                <div>
                                    <img src="assets/image/restaurants/lawangwangi2.jpg" alt="" width='100%'>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="ibox">
                            <div class="">
                                <div>
                                    <img src="assets/image/restaurants/lawangwangi4.jpg" alt="" width='100%'>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ibox product-detail">
                        <div class="ibox-content">
                            <div class="row">
                                <div class="col-md-7">
                                    <h3>
                                        <b>Restaurant Lawang Wangi</b>
                                    </h3>
                                    <hr>
                                    <h4>Deskripsi</h4>
                                    <div class="">
                                        Lawang Wangi tidak hanya terkenal di mata seniman, banyak pula foodies yang tertarik kulineran di sini berkat desain restorannya yang modern dan minimalis. Tempatnya artistik sekali, bahkan di beberapa titik, kamu bisa menikmati instalasi-instalasi seni yang sangat artsy. Soal makanan, tak ada yang mengalahkan pedasnya Chicken Lawangwangi yang fenomenal itu. Tersaji dalam balutan sambal merah segar, Ayam Goreng ini terasa makin dahsyat saat disantap bersama nasi hangat, emping, dan sayur lalapan.
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <dl class="m-t-md">  
                                                <h4><b>Fasilitas</b></h4>
                                                <div class="Collapse__more__amenities">
                                                    <div class="content-amenities">
                                                        <ul>
                                                            <li>WiFi</li>
                                                            <li>Area Merokok</li> 
                                                            <li>Outdoor</li>
                                                            <li>Ruangan VIP</li>
                                                            <li>Area Parkir</li>
                                                            <li>Alkohol</li>
                                                        </ul>
                                                    </div>                                            
                                                </div>
                                            </dl>
                                        </div>
                                    </div>

                                </div>
                                
                                <div class="col-md-5 mt-1">
                                    <br>
                                    <hr>
                                    <h3>
                                        <i class="fa fa-map-marker"></i> Jl. Dago Giri No.99, Mekarwangi, Lembang, Kabupaten Bandung Barat, Jawa Barat 40391
                                    </h3>
                                    <hr>
                                    <h3>
                                        <i class="fa fa-clock-o"></i> Setiap Hari, 09.00 - 22.00 WIB
                                    </h3>                                   
                                    <hr>
                                    <h3>
                                        <i class="fa fa-phone"></i> 08156016666
                                    </h3>                                   
                                    <hr>
                                    <div>                                                
                                        <a href="/edit-data-restaurant" class="btn btn-primary">Edit Data</a>
                                        <a href="/tambah-galeri-restaurant" class="btn btn-primary">Tambah Gambar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>






            </div>
        </div>

        @include('layouts/footer')

    </div>

</div>

@include('layouts/js')