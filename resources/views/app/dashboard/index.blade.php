@extends('app.layouts.app')

@section('styles')

@endsection

@section('content')

    <!-- page-header -->
    <div class="page-header">
        <ol class="breadcrumb"><!-- breadcrumb -->
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol><!-- End breadcrumb -->
    </div>
    <!-- End page-header -->

    <div class="card icon-iconfont">
        <div class="row">
            <div class="col border-right border-bottom ml-3">
                <div class="card-body iconfont">
                    <div class="row">
                        <div class="col">
                            <h6 class="text-uppercase">All Vehicles</h6>
                            <h3 class="mt-2 mb-1 text-primary mainvalue font-weight-semibold"><a href="#">459</a></h3>
                        </div>
                        <div class="col col-auto feature">
                            <img src="{{ url('uploads/images/all_vehicles.png') }}" height="60" width="60" alt="All Vehicles">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col border-right border-bottom">
                <div class="card-body iconfont">
                    <div class="row">
                        <div class="col">
                            <h6 class="text-uppercase">New Requested</h6>
                            <h3 class="mt-2 mb-1 text-primary mainvalue font-weight-semibold"><a href="#">0</a></h3>
                        </div>
                        <div class="col col-auto feature">
                            <img src="{{ url('uploads/images/new_requested.png') }}" height="60" width="60" alt="New Requested">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col border-right border-bottom">
                <div class="card-body iconfont">
                    <div class="row">
                        <div class="col">
                            <h6 class="text-uppercase">New Purchase</h6>
                            <h3 class="mt-2 mb-1 text-primary mainvalue font-weight-semibold"><a href="#">0</a></h3>
                        </div>
                        <div class="col col-auto feature">
                            <img src="{{ url('uploads/images/new_purchase.png') }}" height="60" width="60" alt="New Purchase">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col border-right border-bottom">
                <div class="card-body iconfont">
                    <div class="row">
                        <div class="col">
                            <h6 class="text-uppercase">Dispatched</h6>
                            <h3 class="mt-2 mb-1 text-primary mainvalue font-weight-semibold"><a href="#">0</a></h3>
                        </div>
                        <div class="col col-auto feature">
                            <img src="{{ url('uploads/images/dispatched.png') }}" height="59" width="59" alt="Dispatched">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col border-bottom mr-3">
                <div class="card-body iconfont">
                    <div class="row">
                        <div class="col">
                            <h6 class="text-uppercase">On Hand</h6>
                            <h3 class="mt-2 mb-1 text-primary mainvalue font-weight-semibold"><a href="#">0</a></h3>
                        </div>
                        <div class="col col-auto feature">
                            <img src="{{ url('uploads/images/on_hand.png') }}" height="60" width="60" alt="On Hand">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col border-right ml-3">
                <div class="card-body iconfont">
                    <div class="row">
                        <div class="col">
                            <h6 class="text-uppercase">Ready to load</h6>
                            <h3 class="mt-2 mb-1 text-primary mainvalue font-weight-semibold"><a href="#">459</a></h3>
                        </div>
                        <div class="col col-auto feature">
                            <img src="{{ url('uploads/images/ready_for_rent_icon.png') }}" height="60" width="60" alt="Ready to Load">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col border-right">
                <div class="card-body iconfont">
                    <div class="row">
                        <div class="col">
                            <h6 class="text-uppercase">Loaded</h6>
                            <h3 class="mt-2 mb-1 text-primary mainvalue font-weight-semibold"><a href="#">0</a></h3>
                        </div>
                        <div class="col col-auto feature">
                            <img src="{{ url('uploads/images/loaded.png') }}" height="60" width="60" alt="Loaded">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col border-right">
                <div class="card-body iconfont">
                    <div class="row">
                        <div class="col">
                            <h6 class="text-uppercase">Car On The Way</h6>
                            <h3 class="mt-2 mb-1 text-primary mainvalue font-weight-semibold"><a href="#">0</a></h3>
                        </div>
                        <div class="col col-auto feature">
                            <img src="{{ url('uploads/images/on_the_way.png') }}" height="60" width="60" alt="Car On the way">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col border-right">
                <div class="card-body iconfont">
                    <div class="row">
                        <div class="col">
                            <h6 class="text-uppercase">Arrived</h6>
                            <h3 class="mt-2 mb-1 text-primary mainvalue font-weight-semibold"><a href="#">0</a></h3>
                        </div>
                        <div class="col col-auto feature">
                            <img src="{{ url('uploads/images/arrived.png') }}" height="60" width="60" alt="Arrived">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mr-3">
                <div class="card-body iconfont">
                    <div class="row">
                        <div class="col">
                            <h6 class="text-uppercase">Handed Over</h6>
                            <h3 class="mt-2 mb-1 text-primary mainvalue font-weight-semibold"><a href="#">0</a></h3>
                        </div>
                        <div class="col col-auto feature">
                            <img src="{{ url('uploads/images/handed_over.png') }}" height="60" width="60" alt="Handed Over">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xxl-4 col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="mb-5 text-uppercase font-weight-semibold">Vehicle Status</h5>
                    <div class="table-responsive">
                        <table class="table table-sm border table-bordered text-nowrap mb-0">
                            <thead>
                            <tr class="bg-primary">
                                <th colspan="12" class="text-center"><strong>Canada</strong></th>
                            </tr>
                            <tr>
                                <th>LOCATION</th>
                                <th>ALL VEHICLES</th>
                                <th>NEW PURCHASE</th>
                                <th>DISPATCHED</th>
                                <th>ON HAND</th>
                                <th>WITH TITLE</th>
                                <th>WITHOUT TITLE</th>
                                <th>READY TO LOAD</th>
                                <th>LOADED</th>
                                <th>ON THE WAY</th>
                                <th>ARRIVED</th>
                                <th>HANDED OVER</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>TORONTO</td>
                                <td class="text-right"><a href=""><strong>17</strong></a></td>
                                <td class="text-right"><a href=""><strong>0</strong></a></td>
                                <td class="text-right"><a href=""><strong>0</strong></a></td>
                                <td class="text-right"><a href=""><strong>1</strong></a></td>
                                <td class="text-right"><a href=""><strong>10</strong></a></td>
                                <td class="text-right"><a href=""><strong>7</strong></a></td>
                                <td class="text-right"><a href=""><strong>0</strong></a></td>
                                <td class="text-right"><a href=""><strong>0</strong></a></td>
                                <td class="text-right"><a href=""><strong>15</strong></a></td>
                                <td class="text-right"><a href=""><strong>1</strong></a></td>
                                <td class="text-right"><a href=""><strong>0</strong></a></td>
                            </tr>
                            <tr>
                                <td>MONTREAL</td>
                                <td class="text-right"><a href=""><strong>7</strong></a></td>
                                <td class="text-right"><a href=""><strong>0</strong></a></td>
                                <td class="text-right"><a href=""><strong>0</strong></a></td>
                                <td class="text-right"><a href=""><strong>3</strong></a></td>
                                <td class="text-right"><a href=""><strong>4</strong></a></td>
                                <td class="text-right"><a href=""><strong>3</strong></a></td>
                                <td class="text-right"><a href=""><strong>0</strong></a></td>
                                <td class="text-right"><a href=""><strong>0</strong></a></td>
                                <td class="text-right"><a href=""><strong>0</strong></a></td>
                                <td class="text-right"><a href=""><strong>4</strong></a></td>
                                <td class="text-right"><a href=""><strong>0</strong></a></td>
                            </tr>
                            <tr>
                                <td>HALIFAX</td>
                                <td class="text-right"><a href=""><strong>0</strong></a></td>
                                <td class="text-right"><a href=""><strong>0</strong></a></td>
                                <td class="text-right"><a href=""><strong>0</strong></a></td>
                                <td class="text-right"><a href=""><strong>0</strong></a></td>
                                <td class="text-right"><a href=""><strong>0</strong></a></td>
                                <td class="text-right"><a href=""><strong>0</strong></a></td>
                                <td class="text-right"><a href=""><strong>0</strong></a></td>
                                <td class="text-right"><a href=""><strong>0</strong></a></td>
                                <td class="text-right"><a href=""><strong>0</strong></a></td>
                                <td class="text-right"><a href=""><strong>0</strong></a></td>
                                <td class="text-right"><a href=""><strong>0</strong></a></td>
                            </tr>
                            <tr>
                                <td>EDMONTON</td>
                                <td class="text-right"><a href=""><strong>13</strong></a></td>
                                <td class="text-right"><a href=""><strong>0</strong></a></td>
                                <td class="text-right"><a href=""><strong>0</strong></a></td>
                                <td class="text-right"><a href=""><strong>5</strong></a></td>
                                <td class="text-right"><a href=""><strong>9</strong></a></td>
                                <td class="text-right"><a href=""><strong>4</strong></a></td>
                                <td class="text-right"><a href=""><strong>0</strong></a></td>
                                <td class="text-right"><a href=""><strong>0</strong></a></td>
                                <td class="text-right"><a href=""><strong>4</strong></a></td>
                                <td class="text-right"><a href=""><strong>4</strong></a></td>
                                <td class="text-right"><a href=""><strong>0</strong></a></td>
                            </tr>
                            <tr>
                                <td>CALGARY</td>
                                <td class="text-right"><a href=""><strong>0</strong></a></td>
                                <td class="text-right"><a href=""><strong>0</strong></a></td>
                                <td class="text-right"><a href=""><strong>0</strong></a></td>
                                <td class="text-right"><a href=""><strong>0</strong></a></td>
                                <td class="text-right"><a href=""><strong>0</strong></a></td>
                                <td class="text-right"><a href=""><strong>0</strong></a></td>
                                <td class="text-right"><a href=""><strong>0</strong></a></td>
                                <td class="text-right"><a href=""><strong>0</strong></a></td>
                                <td class="text-right"><a href=""><strong>0</strong></a></td>
                                <td class="text-right"><a href=""><strong>0</strong></a></td>
                                <td class="text-right"><a href=""><strong>0</strong></a></td>
                            </tr>
                            <tr>
                                <td>VANCOUVER</td>
                                <td class="text-right"><a href=""><strong>2</strong></a></td>
                                <td class="text-right"><a href=""><strong>0</strong></a></td>
                                <td class="text-right"><a href=""><strong>2</strong></a></td>
                                <td class="text-right"><a href=""><strong>0</strong></a></td>
                                <td class="text-right"><a href=""><strong>0</strong></a></td>
                                <td class="text-right"><a href=""><strong>2</strong></a></td>
                                <td class="text-right"><a href=""><strong>0</strong></a></td>
                                <td class="text-right"><a href=""><strong>0</strong></a></td>
                                <td class="text-right"><a href=""><strong>0</strong></a></td>
                                <td class="text-right"><a href=""><strong>0</strong></a></td>
                                <td class="text-right"><a href=""><strong>0</strong></a></td>
                            </tr>
                            <tr>
                                <td>MANITOBA</td>
                                <td class="text-right"><a href=""><strong>7</strong></a></td>
                                <td class="text-right"><a href=""><strong>0</strong></a></td>
                                <td class="text-right"><a href=""><strong>1</strong></a></td>
                                <td class="text-right"><a href=""><strong>2</strong></a></td>
                                <td class="text-right"><a href=""><strong>4</strong></a></td>
                                <td class="text-right"><a href=""><strong>3</strong></a></td>
                                <td class="text-right"><a href=""><strong>0</strong></a></td>
                                <td class="text-right"><a href=""><strong>0</strong></a></td>
                                <td class="text-right"><a href=""><strong>4</strong></a></td>
                                <td class="text-right"><a href=""><strong>0</strong></a></td>
                                <td class="text-right"><a href=""><strong>0</strong></a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection('content')

@section('scripts')

    <!--Jquery Sparkline js-->
    <script src="{{URL::asset('assets/plugins/vendors/jquery.sparkline.min.js')}}"></script>

    <!-- Chart Circle js-->
    <script src="{{URL::asset('assets/plugins/vendors/circle-progress.min.js')}}"></script>

    <!--Time Counter js-->
    <script src="{{URL::asset('assets/plugins/counters/jquery.missofis-countdown.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/counters/counter.js')}}"></script>

    <!-- ApexChart -->
    <script src="{{URL::asset('assets/plugins/apexcharts/apexcharts.js')}}"></script>

    <!-- Charts js-->
    <script src="{{URL::asset('assets/plugins/chart/chart.bundle.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/chart/utils.js')}}"></script>

    <!--Peitychart js-->
    <script src="{{URL::asset('assets/plugins/peitychart/jquery.peity.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/peitychart/peitychart.init.js')}}"></script>

    <!-- Custom-charts js-->
    <script src="{{URL::asset('assets/js/index1.js')}}"></script>

@endsection

