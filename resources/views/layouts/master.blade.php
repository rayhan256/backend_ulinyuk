@include('layouts/css')
    @include('layouts/sidebar')

        @include('layouts/navbar')
        <div class="wrapper wrapper-content">
            <div class="row">
                        <div class="col-lg-3">
                            <div class="ibox ">
                                <div class="ibox-title">
                                    <div class="ibox-tools">
                                        <span class="label label-success float-right">Monthly</span>
                                    </div>
                                    <h5>Income</h5>
                                </div>
                                <div class="ibox-content">
                                    <h1 class="no-margins">40 886,200</h1>
                                    <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                                    <small>Total income</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="ibox ">
                                <div class="ibox-title">
                                    <div class="ibox-tools">
                                        <span class="label label-info float-right">Annual</span>
                                    </div>
                                    <h5>Orders</h5>
                                </div>
                                <div class="ibox-content">
                                    <h1 class="no-margins">275,800</h1>
                                    <div class="stat-percent font-bold text-info">20% <i class="fa fa-level-up"></i></div>
                                    <small>New orders</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="ibox ">
                                <div class="ibox-title">
                                    <div class="ibox-tools">
                                        <span class="label label-primary float-right">Today</span>
                                    </div>
                                    <h5>visits</h5>
                                </div>
                                <div class="ibox-content">
                                    <h1 class="no-margins">106,120</h1>
                                    <div class="stat-percent font-bold text-navy">44% <i class="fa fa-level-up"></i></div>
                                    <small>New visits</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="ibox ">
                                <div class="ibox-title">
                                    <div class="ibox-tools">
                                        <span class="label label-danger float-right">Low value</span>
                                    </div>
                                    <h5>User activity</h5>
                                </div>
                                <div class="ibox-content">
                                    <h1 class="no-margins">80,600</h1>
                                    <div class="stat-percent font-bold text-danger">38% <i class="fa fa-level-down"></i></div>
                                    <small>In first month</small>
                                </div>
                            </div>
                </div>
            </div>

            <!--<div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control form-control-sm" placeholder="Search">
                                        <div class="input-group-append">
                                            <button class="btn btn-sm btn-primary" type="button">Go!</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                
                                        <th>#</th>
                                        <th>Project </th>
                                        <th>Name </th>
                                        <th>Phone </th>
                                        <th>Company </th>
                                        <th>Completed </th>
                                        <th>Task</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Project <small>This is example of project</small></td>
                                        <td>Patrick Smith</td>
                                        <td>0800 051213</td>
                                        <td>Inceptos Hymenaeos Ltd</td>
                                        <td><span class="pie" style="display: none;">0.52/1.561</span><svg class="peity" height="16" width="16"><path d="M 8 8 L 8 0 A 8 8 0 0 1 14.933563796318165 11.990700825968545 Z" fill="#1ab394"></path><path d="M 8 8 L 14.933563796318165 11.990700825968545 A 8 8 0 1 1 7.999999999999998 0 Z" fill="#d7d7d7"></path></svg></td>
                                        <td>20%</td>
                                        <td>Jul 14, 2013</td>
                                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Alpha project</td>
                                        <td>Alice Jackson</td>
                                        <td>0500 780909</td>
                                        <td>Nec Euismod In Company</td>
                                        <td><span class="pie" style="display: none;">6,9</span><svg class="peity" height="16" width="16"><path d="M 8 8 L 8 0 A 8 8 0 0 1 12.702282018339785 14.47213595499958 Z" fill="#1ab394"></path><path d="M 8 8 L 12.702282018339785 14.47213595499958 A 8 8 0 1 1 7.999999999999998 0 Z" fill="#d7d7d7"></path></svg></td>
                                        <td>40%</td>
                                        <td>Jul 16, 2013</td>
                                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Betha project</td>
                                        <td>John Smith</td>
                                        <td>0800 1111</td>
                                        <td>Erat Volutpat</td>
                                        <td><span class="pie" style="display: none;">3,1</span><svg class="peity" height="16" width="16"><path d="M 8 8 L 8 0 A 8 8 0 1 1 0 8.000000000000002 Z" fill="#1ab394"></path><path d="M 8 8 L 0 8.000000000000002 A 8 8 0 0 1 7.999999999999998 0 Z" fill="#d7d7d7"></path></svg></td>
                                        <td>75%</td>
                                        <td>Jul 18, 2013</td>
                                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Gamma project</td>
                                        <td>Anna Jordan</td>
                                        <td>(016977) 0648</td>
                                        <td>Tellus Ltd</td>
                                        <td><span class="pie" style="display: none;">4,9</span><svg class="peity" height="16" width="16"><path d="M 8 8 L 8 0 A 8 8 0 0 1 15.48012994148332 10.836839096340286 Z" fill="#1ab394"></path><path d="M 8 8 L 15.48012994148332 10.836839096340286 A 8 8 0 1 1 7.999999999999998 0 Z" fill="#d7d7d7"></path></svg></td>
                                        <td>18%</td>
                                        <td>Jul 22, 2013</td>
                                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Alpha project</td>
                                        <td>Alice Jackson</td>
                                        <td>0500 780909</td>
                                        <td>Nec Euismod In Company</td>
                                        <td><span class="pie" style="display: none;">6,9</span><svg class="peity" height="16" width="16"><path d="M 8 8 L 8 0 A 8 8 0 0 1 12.702282018339785 14.47213595499958 Z" fill="#1ab394"></path><path d="M 8 8 L 12.702282018339785 14.47213595499958 A 8 8 0 1 1 7.999999999999998 0 Z" fill="#d7d7d7"></path></svg></td>
                                        <td>40%</td>
                                        <td>Jul 16, 2013</td>
                                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Project <small>This is example of project</small></td>
                                        <td>Patrick Smith</td>
                                        <td>0800 051213</td>
                                        <td>Inceptos Hymenaeos Ltd</td>
                                        <td><span class="pie" style="display: none;">0.52/1.561</span><svg class="peity" height="16" width="16"><path d="M 8 8 L 8 0 A 8 8 0 0 1 14.933563796318165 11.990700825968545 Z" fill="#1ab394"></path><path d="M 8 8 L 14.933563796318165 11.990700825968545 A 8 8 0 1 1 7.999999999999998 0 Z" fill="#d7d7d7"></path></svg></td>
                                        <td>20%</td>
                                        <td>Jul 14, 2013</td>
                                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Gamma project</td>
                                        <td>Anna Jordan</td>
                                        <td>(016977) 0648</td>
                                        <td>Tellus Ltd</td>
                                        <td><span class="pie" style="display: none;">4,9</span><svg class="peity" height="16" width="16"><path d="M 8 8 L 8 0 A 8 8 0 0 1 15.48012994148332 10.836839096340286 Z" fill="#1ab394"></path><path d="M 8 8 L 15.48012994148332 10.836839096340286 A 8 8 0 1 1 7.999999999999998 0 Z" fill="#d7d7d7"></path></svg></td>
                                        <td>18%</td>
                                        <td>Jul 22, 2013</td>
                                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Project <small>This is example of project</small></td>
                                        <td>Patrick Smith</td>
                                        <td>0800 051213</td>
                                        <td>Inceptos Hymenaeos Ltd</td>
                                        <td><span class="pie" style="display: none;">0.52/1.561</span><svg class="peity" height="16" width="16"><path d="M 8 8 L 8 0 A 8 8 0 0 1 14.933563796318165 11.990700825968545 Z" fill="#1ab394"></path><path d="M 8 8 L 14.933563796318165 11.990700825968545 A 8 8 0 1 1 7.999999999999998 0 Z" fill="#d7d7d7"></path></svg></td>
                                        <td>20%</td>
                                        <td>Jul 14, 2013</td>
                                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Alpha project</td>
                                        <td>Alice Jackson</td>
                                        <td>0500 780909</td>
                                        <td>Nec Euismod In Company</td>
                                        <td><span class="pie" style="display: none;">6,9</span><svg class="peity" height="16" width="16"><path d="M 8 8 L 8 0 A 8 8 0 0 1 12.702282018339785 14.47213595499958 Z" fill="#1ab394"></path><path d="M 8 8 L 12.702282018339785 14.47213595499958 A 8 8 0 1 1 7.999999999999998 0 Z" fill="#d7d7d7"></path></svg></td>
                                        <td>40%</td>
                                        <td>Jul 16, 2013</td>
                                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Betha project</td>
                                        <td>John Smith</td>
                                        <td>0800 1111</td>
                                        <td>Erat Volutpat</td>
                                        <td><span class="pie" style="display: none;">3,1</span><svg class="peity" height="16" width="16"><path d="M 8 8 L 8 0 A 8 8 0 1 1 0 8.000000000000002 Z" fill="#1ab394"></path><path d="M 8 8 L 0 8.000000000000002 A 8 8 0 0 1 7.999999999999998 0 Z" fill="#d7d7d7"></path></svg></td>
                                        <td>75%</td>
                                        <td>Jul 18, 2013</td>
                                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Gamma project</td>
                                        <td>Anna Jordan</td>
                                        <td>(016977) 0648</td>
                                        <td>Tellus Ltd</td>
                                        <td><span class="pie" style="display: none;">4,9</span><svg class="peity" height="16" width="16"><path d="M 8 8 L 8 0 A 8 8 0 0 1 15.48012994148332 10.836839096340286 Z" fill="#1ab394"></path><path d="M 8 8 L 15.48012994148332 10.836839096340286 A 8 8 0 1 1 7.999999999999998 0 Z" fill="#d7d7d7"></path></svg></td>
                                        <td>18%</td>
                                        <td>Jul 22, 2013</td>
                                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Alpha project</td>
                                        <td>Alice Jackson</td>
                                        <td>0500 780909</td>
                                        <td>Nec Euismod In Company</td>
                                        <td><span class="pie" style="display: none;">6,9</span><svg class="peity" height="16" width="16"><path d="M 8 8 L 8 0 A 8 8 0 0 1 12.702282018339785 14.47213595499958 Z" fill="#1ab394"></path><path d="M 8 8 L 12.702282018339785 14.47213595499958 A 8 8 0 1 1 7.999999999999998 0 Z" fill="#d7d7d7"></path></svg></td>
                                        <td>40%</td>
                                        <td>Jul 16, 2013</td>
                                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Project <small>This is example of project</small></td>
                                        <td>Patrick Smith</td>
                                        <td>0800 051213</td>
                                        <td>Inceptos Hymenaeos Ltd</td>
                                        <td><span class="pie" style="display: none;">0.52/1.561</span><svg class="peity" height="16" width="16"><path d="M 8 8 L 8 0 A 8 8 0 0 1 14.933563796318165 11.990700825968545 Z" fill="#1ab394"></path><path d="M 8 8 L 14.933563796318165 11.990700825968545 A 8 8 0 1 1 7.999999999999998 0 Z" fill="#d7d7d7"></path></svg></td>
                                        <td>20%</td>
                                        <td>Jul 14, 2013</td>
                                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Gamma project</td>
                                        <td>Anna Jordan</td>
                                        <td>(016977) 0648</td>
                                        <td>Tellus Ltd</td>
                                        <td><span class="pie" style="display: none;">4,9</span><svg class="peity" height="16" width="16"><path d="M 8 8 L 8 0 A 8 8 0 0 1 15.48012994148332 10.836839096340286 Z" fill="#1ab394"></path><path d="M 8 8 L 15.48012994148332 10.836839096340286 A 8 8 0 1 1 7.999999999999998 0 Z" fill="#d7d7d7"></path></svg></td>
                                        <td>18%</td>
                                        <td>Jul 22, 2013</td>
                                        <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                
                        </div>
                    </div>
                </div>        
            </div>-->

            @include('layouts/footer')
            </div>
        </div>

    @include('layouts/js')