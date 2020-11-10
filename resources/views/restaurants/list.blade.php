@include('layouts/css')
    @include('layouts/sidebar')

        @include('layouts/navbar')
        <div class="mt-3">
            @if(session('pesan'))
                <div class="alert alert-success" role="alert">
                    {{session('pesan')}}
                </div>
            @endif
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Daftar Detail Restaurant</h2>                
                </div>
                <div class="col-md-2">
                    <br>
                    <div style="float: right">
                        <a href="{{ url('/restaurant') }}" class="btn btn-sm btn-outline btn-primary"> <i
                            class="fa fa-th-large"></i> </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="wrapper wrapper-content animated fadeInRight ecommerce">
            <div class="row mb-3 col-lg-12">
                <form class="form-inline my-2  my-lg-0" method="get" action="/restaurant">
                    <input type="search" name="cari" class="form-control mr-sm-2" placeholder="Search..">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-content">

                            <table class="table table-hover" data-page-size="10">
                                <thead>
                                <tr>

                                    <th class="footable-visible footable-sortable footable-first-column">
                                        ID Restaurant
                                        <span class="footable-sort-indicator"></span>
                                    </th>
                                    <th class="footable-visible footable-sortable">
                                        ID Kategori Restaurant
                                        <span class="footable-sort-indicator"></span>
                                    </th>
                                    <th class="footable-visible footable-sortable">
                                        Area Restaurant
                                        <span class="footable-sort-indicator"></span>
                                    </th>
                                    <th class="footable-visible footable-sortable">
                                        Telepon Restaurant
                                        <span class="footable-sort-indicator"></span>
                                    </th>
                                    <th class="footable-visible footable-sortable">
                                        Alamat Restaurant
                                        <span class="footable-sort-indicator"></span>
                                    </th>
                                    <th class="footable-visible footable-sortable">
                                        Jadwal Restaurant
                                        <span class="footable-sort-indicator"></span>
                                    </th>
                                    <th class="text-right footable-visible footable-sortable footable-last-column">
                                        Action
                                        <span class="footable-sort-indicator"></span>
                                    </th>

                                </tr>
                                </thead>

                                @foreach($data_detail as $detail)
                                <tbody>
                                <tr>
                                    <td class="footable-visible footable-first-column">
                                        <span class="footable-toggle"></span>
                                        {{$detail->id}} - {{$detail->nama_restaurant}}
                                    </td>
                                    
                                    @foreach($detail->restaurant_detail as $det)
                                    <td class="footable-visible">
                                        {{$det->id}} - {{$det->kategori_restaurant}}
                                    </td>
                                    @endforeach

                                    <td class="footable-visible">
                                        {{$detail->area_restaurant}}
                                    </td>

                                    <td class="footable-visible">
                                        {{$detail->telepon_restaurant}}
                                    </td>

                                    <td class="footable-visible">
                                        {{$detail->alamat_restaurant}}
                                    </td>

                                    @foreach($detail->restaurant_detail as $det)
                                    <td class="footable-visible">
                                        {{$det->jadwal_restaurant}}
                                    </td>
                                    @endforeach
                                    
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <a href="{{ url('/detail-restaurant').'/'.$detail->id }}" class="btn-white btn btn-xs">View</a>
                                            <a href="/edit-data-restaurant/{{$detail->id}}" class="btn-white btn btn-xs">Edit</a>
                                            <a href="/hapus-data-restaurant/{{$detail->id}}" class="btn-white btn btn-xs" onclick="return confirm('Hapus Data ini ?')">Hapus</a>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                                @endforeach

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