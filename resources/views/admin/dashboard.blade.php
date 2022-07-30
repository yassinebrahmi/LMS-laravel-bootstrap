@extends('layouts.admin')
@section('title', 'Dashboard')
@push('css')
@endpush
@section('contenu')
    <!-- begin:: Content -->

            <!-- Icon Cards-->
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card dashboard text-white bg-primary o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-user"></i>
                            </div>
                            <div class="mr-5"><h5>26 Inscriptions</h5></div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="#">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card dashboard text-white bg-warning o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-save"></i>
                            </div>
                            <div class="mr-5"><h5>11 Demandes</h5></div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="reviews.html">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card dashboard text-white bg-success o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-envelope-open"></i>
                            </div>
                            <div class="mr-5"><h5>150 Messages</h5></div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="bookings.html">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card dashboard text-white bg-danger o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-wechat"></i>
                            </div>
                            <div class="mr-5"><h5>350 News Letter</h5></div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="bookmarks.html">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /cards -->
            <h2></h2>
            <div class="box_general padding_bottom">
                <div class="header_box version_2">
                    <h2><i class="fa fa-bar-chart"></i>Visiteurs du site</h2>
                </div>
                <canvas id="myAreaChart" width="100%" height="30" style="margin:45px 0 15px 0;"></canvas>
            </div>

    <!-- end:: Content -->
@endsection
@push('js')
    <!-- Custom scripts for this page-->
    <script type="text/javascript">
             // Chart.js scripts
        // -- Set new default font family and font color to mimic Bootstrap's default styling
        Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
        Chart.defaults.global.defaultFontColor = '#292b2c';
        // -- Area Chart Example
        var ctx = document.getElementById("myAreaChart");
        var myLineChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels:['01/08/2020', '02/08/2020', '03/08/2020',
                    '04/08/2020',
                    '05/08/2020', '06/08/2020',
                    '07/08/2020', '08/08/2020',
                    '09/08/2020',
                    '10/08/2020',
                    '11/08/2020',
                    '12/08/2020',
                    '13/08/2020',
                    '14/08/2020',
                    '15/08/2020',
                    '16/08/2020',
                    '17/08/2020',
                    '18/08/2020',
                    '19/08/2020', '20/08/2020',
                    '21/08/2020', '22/08/2020',
                    '23/08/2020', '24/08/2020',
                    '25/08/2020', '26/08/2020',
                    '27/08/2020',
                    '28/08/2020',
                    '29/08/2020,', '30/08/2020','31/08/2020'],
                datasets: [{
                    label: "Nombre de visiteur par jour",
                    backgroundColor: "rgb(0,174,172)",
                    borderColor: "rgba(2,117,216,1)",
                    pointBackgroundColor: "rgba(2,117,216,1)",
                    pointBorderColor: "rgba(255,255,255,0.8)",
                    pointHoverBackgroundColor: "rgba(2,117,216,1)",
                    pointHitRadius: 20,
                    data:[35,
                        11,
                        10,
                        13,
                        14,
                        38,
                        16,
                        17,
                        5,
                        19,
                        20,
                        11,
                        24,
                        30,
                        24,
                        25,
                        26,
                        27,
                        28,
                        29,
                        5,
                        31,
                        32,
                        33,
                        14,
                        35,
                        36,
                        37,
                        38,
                        39,
                        18],
                }],
            }

        });



    </script>
@endpush


