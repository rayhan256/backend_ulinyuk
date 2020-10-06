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
            <div class="col-lg-10">
                <h2>Dashboard Hotels</h2>                
            </div>
            <div class="col-lg-2">
                <div class="col mt-3">
                    <center>
                    <a href="/hotel-add-data" class="btn btn-lg btn-primary">Add <i class="fa fa-plus"></i></a>
                    </center>
                </div>
                <br>
                <center>
                    <a href="/hotels" class="btn btn-sm btn-outline btn-primary"> <i
                        class="fa fa-th-large"></i> </a>
                    <td>  </td>
                    <a href="/list" class="btn btn-sm btn-outline btn-primary"> <i
                        class="fa fa-bars"></i> </a>
                </center>
            </div>
        </div>

        <div class="wrapper wrapper-content animated fadeInRight ecommerce">


            <div class="ibox-content m-b-sm border-bottom">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="col-form-label" for="product_name">Product Name</label>
                            <input type="text" id="product_name" name="product_name" value="" placeholder="Product Name" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label class="col-form-label" for="price">Price</label>
                            <input type="text" id="price" name="price" value="" placeholder="Price" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label class="col-form-label" for="quantity">Quantity</label>
                            <input type="text" id="quantity" name="quantity" value="" placeholder="Quantity" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="col-form-label" for="status">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="1" selected="">Enabled</option>
                                <option value="0">Disabled</option>
                            </select>
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

                                    <th data-toggle="true" class="footable-visible footable-sortable footable-first-column">Product Name<span class="footable-sort-indicator"></span></th>
                                    <th data-hide="phone" class="footable-visible footable-sortable">Model<span class="footable-sort-indicator"></span></th>
                                    <th data-hide="all" class="footable-sortable" style="display: none;">Description<span class="footable-sort-indicator"></span></th>
                                    <th data-hide="phone" class="footable-visible footable-sortable">Price<span class="footable-sort-indicator"></span></th>
                                    <th data-hide="phone,tablet" class="footable-sortable" style="display: none;">Quantity<span class="footable-sort-indicator"></span></th>
                                    <th data-hide="phone" class="footable-visible footable-sortable">Status<span class="footable-sort-indicator"></span></th>
                                    <th class="text-right footable-visible footable-last-column" data-sort-ignore="true">Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr class="footable-even" style="">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                       Example product 1
                                    </td>
                                    <td class="footable-visible">
                                        Model 1
                                    </td>
                                    <td style="display: none;">
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal distribution of letters, as opposed to using
                                        'Content here, content here', making it look like readable English.
                                    </td>
                                    <td class="footable-visible">
                                        $50.00
                                    </td>
                                    <td class="" style="display: none;">
                                        1000
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-primary">Enable</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="footable-odd" style="">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        Example product 2
                                    </td>
                                    <td class="footable-visible">
                                        Model 2
                                    </td>
                                    <td style="display: none;">
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal distribution of letters, as opposed to using
                                        'Content here, content here', making it look like readable English.
                                    </td>
                                    <td class="footable-visible">
                                        $40.00
                                    </td>
                                    <td class="" style="display: none;">
                                        4300
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-primary">Enable</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="footable-even" style="">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        Example product 3
                                    </td>
                                    <td class="footable-visible">
                                        Model 3
                                    </td>
                                    <td style="display: none;">
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal distribution of letters, as opposed to using
                                        'Content here, content here', making it look like readable English.
                                    </td>
                                    <td class="footable-visible">
                                        $22.00
                                    </td>
                                    <td class="" style="display: none;">
                                        300
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-danger">Disabled</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="footable-odd" style="">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        Example product 4
                                    </td>
                                    <td class="footable-visible">
                                        Model 4
                                    </td>
                                    <td style="display: none;">
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal distribution of letters, as opposed to using
                                        'Content here, content here', making it look like readable English.
                                    </td>
                                    <td class="footable-visible">
                                        $67.00
                                    </td>
                                    <td class="" style="display: none;">
                                        2300
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-primary">Enable</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="footable-even" style="">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        Example product 5
                                    </td>
                                    <td class="footable-visible">
                                        Model 5
                                    </td>
                                    <td style="display: none;">
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal distribution of letters, as opposed to using
                                        'Content here, content here', making it look like readable English.
                                    </td>
                                    <td class="footable-visible">
                                        $76.00
                                    </td>
                                    <td class="" style="display: none;">
                                        800
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-warning">Low stock</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="footable-odd" style="">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        Example product 6
                                    </td>
                                    <td class="footable-visible">
                                        Model 6
                                    </td>
                                    <td style="display: none;">
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal distribution of letters, as opposed to using
                                        'Content here, content here', making it look like readable English.
                                    </td>
                                    <td class="footable-visible">
                                        $60.00
                                    </td>
                                    <td class="" style="display: none;">
                                        6000
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-danger">Disabled</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="footable-even" style="">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        Example product 7
                                    </td>
                                    <td class="footable-visible">
                                        Model 7
                                    </td>
                                    <td style="display: none;">
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal distribution of letters, as opposed to using
                                        'Content here, content here', making it look like readable English.
                                    </td>
                                    <td class="footable-visible">
                                        $32.00
                                    </td>
                                    <td class="" style="display: none;">
                                        700
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-danger">Disabled</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="footable-odd" style="">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        Example product 8
                                    </td>
                                    <td class="footable-visible">
                                        Model 8
                                    </td>
                                    <td style="display: none;">
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal distribution of letters, as opposed to using
                                        'Content here, content here', making it look like readable English.
                                    </td>
                                    <td class="footable-visible">
                                        $86.00
                                    </td>
                                    <td class="" style="display: none;">
                                        5180
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-primary">Enable</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="footable-even" style="">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        Example product 9
                                    </td>
                                    <td class="footable-visible">
                                        Model 9
                                    </td>
                                    <td style="display: none;">
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal distribution of letters, as opposed to using
                                        'Content here, content here', making it look like readable English.
                                    </td>
                                    <td class="footable-visible">
                                        $97.00
                                    </td>
                                    <td class="" style="display: none;">
                                        450
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-primary">Enable</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="footable-odd" style="">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        Example product 10
                                    </td>
                                    <td class="footable-visible">
                                        Model 10
                                    </td>
                                    <td style="display: none;">
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal distribution of letters, as opposed to using
                                        'Content here, content here', making it look like readable English.
                                    </td>
                                    <td class="footable-visible">
                                        $43.00
                                    </td>
                                    <td class="" style="display: none;">
                                        7600
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-primary">Enable</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="footable-even" style="">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        Example product 1
                                    </td>
                                    <td class="footable-visible">
                                        Model 1
                                    </td>
                                    <td style="display: none;">
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal distribution of letters, as opposed to using
                                        'Content here, content here', making it look like readable English.
                                    </td>
                                    <td class="footable-visible">
                                        $50.00
                                    </td>
                                    <td class="" style="display: none;">
                                        1000
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-primary">Enable</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="footable-odd" style="">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        Example product 2
                                    </td>
                                    <td class="footable-visible">
                                        Model 2
                                    </td>
                                    <td style="display: none;">
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal distribution of letters, as opposed to using
                                        'Content here, content here', making it look like readable English.
                                    </td>
                                    <td class="footable-visible">
                                        $40.00
                                    </td>
                                    <td class="" style="display: none;">
                                        4300
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-primary">Enable</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="footable-even" style="">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        Example product 3
                                    </td>
                                    <td class="footable-visible">
                                        Model 3
                                    </td>
                                    <td style="display: none;">
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal distribution of letters, as opposed to using
                                        'Content here, content here', making it look like readable English.
                                    </td>
                                    <td class="footable-visible">
                                        $22.00
                                    </td>
                                    <td class="" style="display: none;">
                                        300
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-warning">Low stock</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="footable-odd" style="">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        Example product 4
                                    </td>
                                    <td class="footable-visible">
                                        Model 4
                                    </td>
                                    <td style="display: none;">
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal distribution of letters, as opposed to using
                                        'Content here, content here', making it look like readable English.
                                    </td>
                                    <td class="footable-visible">
                                        $67.00
                                    </td>
                                    <td class="" style="display: none;">
                                        2300
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-primary">Enable</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="footable-even" style="">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        Example product 5
                                    </td>
                                    <td class="footable-visible">
                                        Model 5
                                    </td>
                                    <td style="display: none;">
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal distribution of letters, as opposed to using
                                        'Content here, content here', making it look like readable English.
                                    </td>
                                    <td class="footable-visible">
                                        $76.00
                                    </td>
                                    <td class="" style="display: none;">
                                        800
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-primary">Enable</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="footable-odd" style="display: none;">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        Example product 6
                                    </td>
                                    <td class="footable-visible">
                                        Model 6
                                    </td>
                                    <td style="display: none;">
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal distribution of letters, as opposed to using
                                        'Content here, content here', making it look like readable English.
                                    </td>
                                    <td class="footable-visible">
                                        $60.00
                                    </td>
                                    <td class="" style="display: none;">
                                        6000
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-primary">Enable</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="footable-even" style="display: none;">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        Example product 7
                                    </td>
                                    <td class="footable-visible">
                                        Model 7
                                    </td>
                                    <td style="display: none;">
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal distribution of letters, as opposed to using
                                        'Content here, content here', making it look like readable English.
                                    </td>
                                    <td class="footable-visible">
                                        $32.00
                                    </td>
                                    <td class="" style="display: none;">
                                        700
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-primary">Enable</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="footable-odd" style="display: none;">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        Example product 8
                                    </td>
                                    <td class="footable-visible">
                                        Model 8
                                    </td>
                                    <td style="display: none;">
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal distribution of letters, as opposed to using
                                        'Content here, content here', making it look like readable English.
                                    </td>
                                    <td class="footable-visible">
                                        $86.00
                                    </td>
                                    <td class="" style="display: none;">
                                        5180
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-primary">Enable</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="footable-even" style="display: none;">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        Example product 9
                                    </td>
                                    <td class="footable-visible">
                                        Model 9
                                    </td>
                                    <td style="display: none;">
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal distribution of letters, as opposed to using
                                        'Content here, content here', making it look like readable English.
                                    </td>
                                    <td class="footable-visible">
                                        $97.00
                                    </td>
                                    <td class="" style="display: none;">
                                        450
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-primary">Enable</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="footable-odd" style="display: none;">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                        Example product 10
                                    </td>
                                    <td class="footable-visible">
                                        Model 10
                                    </td>
                                    <td style="display: none;">
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal distribution of letters, as opposed to using
                                        'Content here, content here', making it look like readable English.
                                    </td>
                                    <td class="footable-visible">
                                        $43.00
                                    </td>
                                    <td class="" style="display: none;">
                                        7600
                                    </td>
                                    <td class="footable-visible">
                                        <span class="label label-primary">Enable</span>
                                    </td>
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <button class="btn-white btn btn-xs">View</button>
                                            <button class="btn-white btn btn-xs">Edit</button>
                                        </div>
                                    </td>
                                </tr>


                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="6" class="footable-visible">
                                        <ul class="pagination float-right"><li class="footable-page-arrow disabled"><a data-page="first" href="#first">«</a></li><li class="footable-page-arrow disabled"><a data-page="prev" href="#prev">‹</a></li><li class="footable-page active"><a data-page="0" href="#">1</a></li><li class="footable-page"><a data-page="1" href="#">2</a></li><li class="footable-page-arrow"><a data-page="next" href="#next">›</a></li><li class="footable-page-arrow"><a data-page="last" href="#last">»</a></li></ul>
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