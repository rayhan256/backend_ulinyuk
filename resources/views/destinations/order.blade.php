@include('layouts/css')
    @include('layouts/sidebar')

        @include('layouts/navbar')
        <div class="mt-3">
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Daftar Order Objek Wisata</h2>                
                </div>
                <div class="col-md-2">
                    <br>
                    <div style="float: right">
                        <a href="/destinations" class="btn btn-sm btn-outline btn-primary"> <i
                            class="fa fa-th-large"></i> </a>
                        <td>  </td>
                        <a href="/destination-list" class="btn btn-sm btn-outline btn-primary"> <i
                            class="fa fa-bars"></i> </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="wrapper wrapper-content animated fadeInRight ecommerce">
            <div class="ibox-content m-b-sm border-bottom">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="col-form-label" for="order_id">Order ID</label>
                            <input type="text" id="order_id" name="order_id" value="" placeholder="Order ID" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="col-form-label" for="status">Order status</label>
                            <input type="text" id="status" name="status" value="" placeholder="Status" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="col-form-label" for="customer">Customer</label>
                            <input type="text" id="customer" name="customer" value="" placeholder="Customer" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="col-form-label" for="date_added">Date added</label>
                            <div class="input-group date">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input id="date_added" type="text" class="form-control" value="03/04/2014">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="col-form-label" for="date_modified">Date modified</label>
                            <div class="input-group date">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input id="date_modified" type="text" class="form-control" value="03/06/2014">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="col-form-label" for="amount">Amount</label>
                            <input type="text" id="amount" name="amount" value="" placeholder="Amount" class="form-control">
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-content">

                            <table class="footable table table-stripped toggle-arrow-tiny footable-loaded tablet breakpoint" data-page-size="15">
                                <thead>
                                <tr>

                                    <th class="footable-visible footable-sortable footable-first-column">Order ID<span class="footable-sort-indicator"></span></th>
                                    <th data-hide="phone" class="footable-visible footable-sortable">Customer<span class="footable-sort-indicator"></span></th>
                                    <th data-hide="phone" class="footable-visible footable-sortable">Amount<span class="footable-sort-indicator"></span></th>
                                    <th data-hide="phone" class="footable-visible footable-sortable">Date added<span class="footable-sort-indicator"></span></th>
                                    <th data-hide="phone,tablet" class="footable-sortable" style="display: none;">Date modified<span class="footable-sort-indicator"></span></th>
                                    <th data-hide="phone" class="footable-visible footable-sortable">Status<span class="footable-sort-indicator"></span></th>
                                    <th class="text-right footable-visible footable-sortable footable-last-column">Action<span class="footable-sort-indicator"></span></th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr class="footable-even" style="">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                       3214
                                    </td>
                                    <td class="footable-visible">
                                        Customer example
                                    </td>
                                    <td class="footable-visible">
                                        $500.00
                                    </td>
                                    <td class="footable-visible">
                                        03/04/2015
                                    </td>
                                    <td class="" style="display: none;">
                                        03/05/2015
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-primary">Pending</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="footable-odd" style="">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        324
                                    </td>
                                    <td class="footable-visible">
                                        Customer example
                                    </td>
                                    <td class="footable-visible">
                                        $320.00
                                    </td>
                                    <td class="footable-visible">
                                        12/04/2015
                                    </td>
                                    <td class="" style="display: none;">
                                        21/07/2015
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-primary">Pending</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="footable-even" style="">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        546
                                    </td>
                                    <td class="footable-visible">
                                        Customer example
                                    </td>
                                    <td class="footable-visible">
                                        $2770.00
                                    </td>
                                    <td class="footable-visible">
                                        06/07/2015
                                    </td>
                                    <td class="" style="display: none;">
                                        04/08/2015
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-primary">Pending</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="footable-odd" style="">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        6327
                                    </td>
                                    <td class="footable-visible">
                                        Customer example
                                    </td>
                                    <td class="footable-visible">
                                        $8560.00
                                    </td>
                                    <td class="footable-visible">
                                        01/12/2015
                                    </td>
                                    <td class="" style="display: none;">
                                        05/12/2015
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-primary">Pending</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="footable-even" style="">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        642
                                    </td>
                                    <td class="footable-visible">
                                        Customer example
                                    </td>
                                    <td class="footable-visible">
                                        $6843.00
                                    </td>
                                    <td class="footable-visible">
                                        10/04/2015
                                    </td>
                                    <td class="" style="display: none;">
                                        13/07/2015
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-success">Shipped</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="footable-odd" style="">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        7435
                                    </td>
                                    <td class="footable-visible">
                                        Customer example
                                    </td>
                                    <td class="footable-visible">
                                        $750.00
                                    </td>
                                    <td class="footable-visible">
                                        04/04/2015
                                    </td>
                                    <td class="" style="display: none;">
                                        14/05/2015
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-success">Shipped</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="footable-even" style="">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        3214
                                    </td>
                                    <td class="footable-visible">
                                        Customer example
                                    </td>
                                    <td class="footable-visible">
                                        $500.00
                                    </td>
                                    <td class="footable-visible">
                                        03/04/2015
                                    </td>
                                    <td class="" style="display: none;">
                                        03/05/2015
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-primary">Pending</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="footable-odd" style="">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        324
                                    </td>
                                    <td class="footable-visible">
                                        Customer example
                                    </td>
                                    <td class="footable-visible">
                                        $320.00
                                    </td>
                                    <td class="footable-visible">
                                        12/04/2015
                                    </td>
                                    <td class="" style="display: none;">
                                        21/07/2015
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-primary">Pending</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="footable-even" style="">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        546
                                    </td>
                                    <td class="footable-visible">
                                        Customer example
                                    </td>
                                    <td class="footable-visible">
                                        $2770.00
                                    </td>
                                    <td class="footable-visible">
                                        06/07/2015
                                    </td>
                                    <td class="" style="display: none;">
                                        04/08/2015
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-danger">Canceled</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="footable-odd" style="">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        6327
                                    </td>
                                    <td class="footable-visible">
                                        Customer example
                                    </td>
                                    <td class="footable-visible">
                                        $8560.00
                                    </td>
                                    <td class="footable-visible">
                                        01/12/2015
                                    </td>
                                    <td class="" style="display: none;">
                                        05/12/2015
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-primary">Pending</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="footable-even" style="">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        642
                                    </td>
                                    <td class="footable-visible">
                                        Customer example
                                    </td>
                                    <td class="footable-visible">
                                        $6843.00
                                    </td>
                                    <td class="footable-visible">
                                        10/04/2015
                                    </td>
                                    <td class="" style="display: none;">
                                        13/07/2015
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-success">Shipped</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="footable-odd" style="">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        7435
                                    </td>
                                    <td class="footable-visible">
                                        Customer example
                                    </td>
                                    <td class="footable-visible">
                                        $750.00
                                    </td>
                                    <td class="footable-visible">
                                        04/04/2015
                                    </td>
                                    <td class="" style="display: none;">
                                        14/05/2015
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-primary">Pending</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="footable-even" style="">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        324
                                    </td>
                                    <td class="footable-visible">
                                        Customer example
                                    </td>
                                    <td class="footable-visible">
                                        $320.00
                                    </td>
                                    <td class="footable-visible">
                                        12/04/2015
                                    </td>
                                    <td class="" style="display: none;">
                                        21/07/2015
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-warning">Expired</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="footable-odd" style="">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        546
                                    </td>
                                    <td class="footable-visible">
                                        Customer example
                                    </td>
                                    <td class="footable-visible">
                                        $2770.00
                                    </td>
                                    <td class="footable-visible">
                                        06/07/2015
                                    </td>
                                    <td class="" style="display: none;">
                                        04/08/2015
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-primary">Pending</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="footable-even" style="">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        6327
                                    </td>
                                    <td class="footable-visible">
                                        Customer example
                                    </td>
                                    <td class="footable-visible">
                                        $8560.00
                                    </td>
                                    <td class="footable-visible">
                                        01/12/2015
                                    </td>
                                    <td class="" style="display: none;">
                                        05/12/2015
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-primary">Pending</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="footable-odd" style="display: none;">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        642
                                    </td>
                                    <td class="footable-visible">
                                        Customer example
                                    </td>
                                    <td class="footable-visible">
                                        $6843.00
                                    </td>
                                    <td class="footable-visible">
                                        10/04/2015
                                    </td>
                                    <td class="" style="display: none;">
                                        13/07/2015
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-success">Shipped</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="footable-even" style="display: none;">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        7435
                                    </td>
                                    <td class="footable-visible">
                                        Customer example
                                    </td>
                                    <td class="footable-visible">
                                        $750.00
                                    </td>
                                    <td class="footable-visible">
                                        04/04/2015
                                    </td>
                                    <td class="" style="display: none;">
                                        14/05/2015
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-success">Shipped</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="footable-odd" style="display: none;">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        3214
                                    </td>
                                    <td class="footable-visible">
                                        Customer example
                                    </td>
                                    <td class="footable-visible">
                                        $500.00
                                    </td>
                                    <td class="footable-visible">
                                        03/04/2015
                                    </td>
                                    <td class="" style="display: none;">
                                        03/05/2015
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-primary">Pending</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="footable-even" style="display: none;">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        324
                                    </td>
                                    <td class="footable-visible">
                                        Customer example
                                    </td>
                                    <td class="footable-visible">
                                        $320.00
                                    </td>
                                    <td class="footable-visible">
                                        12/04/2015
                                    </td>
                                    <td class="" style="display: none;">
                                        21/07/2015
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-primary">Pending</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="footable-odd" style="display: none;">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        546
                                    </td>
                                    <td class="footable-visible">
                                        Customer example
                                    </td>
                                    <td class="footable-visible">
                                        $2770.00
                                    </td>
                                    <td class="footable-visible">
                                        06/07/2015
                                    </td>
                                    <td class="" style="display: none;">
                                        04/08/2015
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-primary">Pending</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="footable-even" style="display: none;">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        6327
                                    </td>
                                    <td class="footable-visible">
                                        Customer example
                                    </td>
                                    <td class="footable-visible">
                                        $8560.00
                                    </td>
                                    <td class="footable-visible">
                                        01/12/2015
                                    </td>
                                    <td class="" style="display: none;">
                                        05/12/2015
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-primary">Pending</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="footable-odd" style="display: none;">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        642
                                    </td>
                                    <td class="footable-visible">
                                        Customer example
                                    </td>
                                    <td class="footable-visible">
                                        $6843.00
                                    </td>
                                    <td class="footable-visible">
                                        10/04/2015
                                    </td>
                                    <td class="" style="display: none;">
                                        13/07/2015
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-success">Shipped</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="footable-even" style="display: none;">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        7435
                                    </td>
                                    <td class="footable-visible">
                                        Customer example
                                    </td>
                                    <td class="footable-visible">
                                        $750.00
                                    </td>
                                    <td class="footable-visible">
                                        04/04/2015
                                    </td>
                                    <td class="" style="display: none;">
                                        14/05/2015
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-primary">Pending</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="footable-odd" style="display: none;">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        324
                                    </td>
                                    <td class="footable-visible">
                                        Customer example
                                    </td>
                                    <td class="footable-visible">
                                        $320.00
                                    </td>
                                    <td class="footable-visible">
                                        12/04/2015
                                    </td>
                                    <td class="" style="display: none;">
                                        21/07/2015
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-primary">Pending</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="footable-even" style="display: none;">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        546
                                    </td>
                                    <td class="footable-visible">
                                        Customer example
                                    </td>
                                    <td class="footable-visible">
                                        $2770.00
                                    </td>
                                    <td class="footable-visible">
                                        06/07/2015
                                    </td>
                                    <td class="" style="display: none;">
                                        04/08/2015
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-primary">Pending</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="footable-odd" style="display: none;">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        6327
                                    </td>
                                    <td class="footable-visible">
                                        Customer example
                                    </td>
                                    <td class="footable-visible">
                                        $8560.00
                                    </td>
                                    <td class="footable-visible">
                                        01/12/2015
                                    </td>
                                    <td class="" style="display: none;">
                                        05/12/2015
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-primary">Pending</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="footable-even" style="display: none;">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        642
                                    </td>
                                    <td class="footable-visible">
                                        Customer example
                                    </td>
                                    <td class="footable-visible">
                                        $6843.00
                                    </td>
                                    <td class="footable-visible">
                                        10/04/2015
                                    </td>
                                    <td class="" style="display: none;">
                                        13/07/2015
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-success">Shipped</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="footable-odd" style="display: none;">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        7435
                                    </td>
                                    <td class="footable-visible">
                                        Customer example
                                    </td>
                                    <td class="footable-visible">
                                        $750.00
                                    </td>
                                    <td class="footable-visible">
                                        04/04/2015
                                    </td>
                                    <td class="" style="display: none;">
                                        14/05/2015
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-success">Shipped</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="footable-even" style="display: none;">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        3214
                                    </td>
                                    <td class="footable-visible">
                                        Customer example
                                    </td>
                                    <td class="footable-visible">
                                        $500.00
                                    </td>
                                    <td class="footable-visible">
                                        03/04/2015
                                    </td>
                                    <td class="" style="display: none;">
                                        03/05/2015
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-primary">Pending</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="footable-odd" style="display: none;">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        324
                                    </td>
                                    <td class="footable-visible">
                                        Customer example
                                    </td>
                                    <td class="footable-visible">
                                        $320.00
                                    </td>
                                    <td class="footable-visible">
                                        12/04/2015
                                    </td>
                                    <td class="" style="display: none;">
                                        21/07/2015
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-primary">Pending</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="footable-even" style="display: none;">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        546
                                    </td>
                                    <td class="footable-visible">
                                        Customer example
                                    </td>
                                    <td class="footable-visible">
                                        $2770.00
                                    </td>
                                    <td class="footable-visible">
                                        06/07/2015
                                    </td>
                                    <td class="" style="display: none;">
                                        04/08/2015
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-primary">Pending</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="footable-odd" style="display: none;">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        6327
                                    </td>
                                    <td class="footable-visible">
                                        Customer example
                                    </td>
                                    <td class="footable-visible">
                                        $8560.00
                                    </td>
                                    <td class="footable-visible">
                                        01/12/2015
                                    </td>
                                    <td class="" style="display: none;">
                                        05/12/2015
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-primary">Pending</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="footable-even" style="display: none;">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        642
                                    </td>
                                    <td class="footable-visible">
                                        Customer example
                                    </td>
                                    <td class="footable-visible">
                                        $6843.00
                                    </td>
                                    <td class="footable-visible">
                                        10/04/2015
                                    </td>
                                    <td class="" style="display: none;">
                                        13/07/2015
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-success">Shipped</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="footable-odd" style="display: none;">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        7435
                                    </td>
                                    <td class="footable-visible">
                                        Customer example
                                    </td>
                                    <td class="footable-visible">
                                        $750.00
                                    </td>
                                    <td class="footable-visible">
                                        04/04/2015
                                    </td>
                                    <td class="" style="display: none;">
                                        14/05/2015
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-primary">Pending</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                            <button class="btn-white btn btn-xs">Delete</button>
                                        </div>
                                    </td>
                                </tr>



                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="7" class="footable-visible">
                                        <ul class="pagination float-right"><li class="footable-page-arrow disabled"><a data-page="first" href="#first">«</a></li><li class="footable-page-arrow disabled"><a data-page="prev" href="#prev">‹</a></li><li class="footable-page active"><a data-page="0" href="#">1</a></li><li class="footable-page"><a data-page="1" href="#">2</a></li><li class="footable-page"><a data-page="2" href="#">3</a></li><li class="footable-page-arrow"><a data-page="next" href="#next">›</a></li><li class="footable-page-arrow"><a data-page="last" href="#last">»</a></li></ul>
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