@include('layouts/css')
    @include('layouts/sidebar')

        @include('layouts/navbar')
        <div class="mt-3">
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Detail Objek Wisata</h2>                
                </div>
                <div class="col-md-2">
                    <br>
                    <div style="float: right">
                        <a href="/objek-wisata" class="btn btn-sm btn-outline btn-primary"> <i
                            class="fa fa-th-large"></i> </a>
                        <td>  </td>
                        <a href="/list-detail-objek-wisata" class="btn btn-sm btn-outline btn-primary"> <i
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
                                    <img src="assets/image/destinations/destination1.jpg" alt="" width='100%'>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="ibox">
                            <div class="">
                                <div>
                                    <img src="assets/image/destinations/destination2.jpg" alt="" width='100%'>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="ibox">
                            <div class="">
                                <div>
                                    <img src="assets/image/destinations/destination3.jpg" alt="" width='100%'>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="ibox">
                            <div class="">
                                <div>
                                    <img src="assets/image/destinations/destination4.jpg" alt="" width='100%'>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ibox product-detail">
                        <div class="ibox-content">
                            <div class="row">
                                <div class="col-md-7">
                                    <h3>
                                        <b>Orchid Forest Cikole</b>
                                    </h3>
                                    <hr>
                                    <h4><b>Deskripsi</b></h4>
                                    <div class="">
                                        Orchid Forest Cikole Lembang baru dibuka sekitar Agustus tahun 2017. Tempat ini merupakan taman anggrek terluas di Indonesia. Berada di tengah kawasan hutan lindung dan terbentang seluas 12 hektar. Tidak kurang ada 157 jenis bunga anggrek beraneka macam dikembangkan disini.
                                        <br>
                                        <br>
                                        Orchid Forest Cikole Bandung memfokuskan diri untuk memperkenalkan dan membudidayakan berbagai tanaman anggrek. Menggunakan metode lokal maupun internasional. Tidak hanya berasal dari Indonesia yang merupakan negara kedua terbanyak varian anggrek. Tanaman anggrek di Orchid Forest juga berasal dari negara lain, seperti Venezuela, Argentina, Filipina, Peru, dan Amerika serikat.
                                        <br>
                                        <br>
                                        Wisatawan bisa menggunakan transportasi pribadi untuk menjangkau tempat ini dengan jarak sekitar 20 kilometer dari Kota Bandung.
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <dl class="m-t-md">  
                                                <h4><b>Jenis Wahana</b></h4>
                                                <div class="Collapse__more__amenities">
                                                    <div class="content-amenities">
                                                        <ul>
                                                            <li>Sky Bridge</li>
                                                            <li>Kegiatan Outbond</li> 
                                                            <li>Spot Foto</li> 
                                                            <li>Camping Ground</li>
                                                        </ul>
                                                    </div>                                            
                                                </div>
                                            </dl>
                                        </div>
                                        <div class="col-md-6">
                                            <dl class="m-t-md">  
                                                <h4><b>Fasilitas</b></h4>
                                                <div class="Collapse__more__amenities">
                                                    <div class="content-amenities">
                                                        <ul>
                                                            <li>Mobil Golf</li>
                                                            <li>Tribun Stage</li> 
                                                            <li>Cafe</li> 
                                                            <li>Camping Ground</li>
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
                                        <i class="fa fa-map-marker"></i> Genteng, Cikole, Lembang, Kabupaten Bandung Barat, Jawa Barat 40391
                                    </h3>
                                    <hr>
                                    <h3>
                                        <i class="fa fa-clock-o"></i> Setiap Hari, 09.00 - 18.00 WIB
                                    </h3>                                   
                                    <hr>
                                    <h3>
                                        <i class="fa fa-phone"></i> 081220003438
                                    </h3>                                   
                                    <hr>
                                    <div>                                                
                                        <a href="/edit-data-objek-wisata" class="btn btn-primary btn-sm">Edit Data</a>
                                        <a href="/tambah-galeri-objek-wisata" class="btn btn-primary btn-sm">Tambah Gambar</a>
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

<script>
    
</script>

@include('layouts/js')