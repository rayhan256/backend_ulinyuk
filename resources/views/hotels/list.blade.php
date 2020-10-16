@include('layouts/css')
    @include('layouts/sidebar')

        @include('layouts/navbar')
        <div class="mt-3">
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Daftar Detail Hotel</h2>                
                </div>
                <div class="col-md-2">
                    <br>
                    <div style="float: right">
                        <a href="/hotel" class="btn btn-sm btn-outline btn-primary"> <i
                            class="fa fa-th-large"></i> </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="wrapper wrapper-content animated fadeInRight ecommerce">
            <div class="ibox-content m-b-sm border-bottom">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="col-form-label" for="order_id">Cari Data</label>
                            <input type="text" id="order_id" name="order_id" value="" placeholder="" class="form-control">
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-content">

                            <table class="table table-hover" data-page-size="10">
                                <thead>
                                <tr>

                                    <th class="footable-visible footable-sortable footable-first-column">
                                        ID Hotel
                                        <span class="footable-sort-indicator"></span>
                                    </th>
                                    <th class="footable-visible footable-sortable">
                                        ID Kategori Kamar Hotel
                                        <span class="footable-sort-indicator"></span>
                                    </th>
                                    <th class="footable-visible footable-sortable">
                                        Area Hotel
                                        <span class="footable-sort-indicator"></span>
                                    </th>
                                    <th class="footable-visible footable-sortable">
                                        Telepon Hotel
                                        <span class="footable-sort-indicator"></span>
                                    </th>
                                    <th class="footable-visible footable-sortable">
                                        Alamat Hotel
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
                                        1 - Aston Hotel Pasteur
                                    </td>
                                    <td class="footable-visible">
                                        Bintang 3 - Luxury
                                    </td>
                                    <td class="footable-visible">
                                        Bandung
                                    </td>
                                    <td class="footable-visible">
                                        (022) 82000777
                                    </td>
                                    <td class="footable-visible">
                                        Jl. Dr. Djunjunan No.162, Sukagalih, Kec. Sukajadi, Kota Bandung
                                    </td>
                                    
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <a href="/detail-hotel" class="btn-white btn btn-xs">View</a>
                                            <a href="/edit-data-hotel" class="btn-white btn btn-xs">Edit</a>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="12" class="footable-visible">
                                        <ul class="pagination float-right">
                                            <li class="footable-page-arrow disabled">
                                                <a data-page="first" href="#first">«</a>
                                            </li>
                                            <li class="footable-page-arrow disabled">
                                                <a data-page="prev" href="#prev">‹</a>
                                            </li>
                                            <li class="footable-page active">
                                                <a data-page="0" href="#">1</a>
                                            </li>
                                            <li class="footable-page">
                                                <a data-page="1" href="#">2</a>
                                            </li>
                                            <li class="footable-page">
                                                <a data-page="2" href="#">3</a>
                                            </li>
                                            <li class="footable-page-arrow">
                                                <a data-page="next" href="#next">›</a>
                                            </li>
                                            <li class="footable-page-arrow">
                                                <a data-page="last" href="#last">»</a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>

                        </div>
                    </div>
                </div>
            </div>


        </div>

        @include('layouts/footer')

    </div>

</div>

@include('layouts/js')