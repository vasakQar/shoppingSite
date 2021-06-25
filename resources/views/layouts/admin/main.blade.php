<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.9.2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Apr 2019 08:03:04 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>INSPINIA | Dashboard</title>

    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <!-- Toastr style -->
    <link href="{{ asset('admin/css/plugins/toastr/toastr.min.css') }}" rel="stylesheet">

    <!-- Gritter -->
    <link href="{{ asset('admin/js/plugins/gritter/jquery.gritter.css') }}" rel="stylesheet">

    <link href="{{ asset('admin/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
    {{--//jquery--}}
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    @yield('styles')
    <!-- CSS Style -->
</head>
<body class="">
    <div id="wrapper">

        @include('layouts.admin.sidbar')

        <div id="page-wrapper" class="gray-bg dashbard-1">

            @include('layouts.admin.header')

            @yield('content')

            @include('layouts.admin.footer')
        </div>
    </div>

<script src="{{ asset('admin/js/jquery-3.1.1.min.js')}}"></script>
<script src="{{ asset('admin/js/popper.min.js')}}"></script>
<script src="{{ asset('admin/js/bootstrap.js')}}"></script>
<script src="{{ asset('admin/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
<script src="{{ asset('admin/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

<!-- Flot -->
<script src="{{ asset('admin/js/plugins/flot/jquery.flot.js')}}"></script>
<script src="{{ asset('admin/js/plugins/flot/jquery.flot.tooltip.min.js')}}"></script>
<script src="{{ asset('admin/js/plugins/flot/jquery.flot.spline.js')}}"></script>
<script src="{{ asset('admin/js/plugins/flot/jquery.flot.resize.js')}}"></script>
<script src="{{ asset('admin/js/plugins/flot/jquery.flot.pie.js')}}"></script>

<!-- Peity -->
<script src="{{ asset('admin/js/plugins/peity/jquery.peity.min.js')}}"></script>
<script src="{{ asset('admin/js/demo/peity-demo.js')}}"></script>

<!-- Custom and plugin javascript -->
<script src="{{ asset('admin/js/inspinia.js')}}"></script>
<script src="{{ asset('admin/js/plugins/pace/pace.min.js')}}"></script>

<!-- jQuery UI -->
<script src="{{ asset('admin/js/plugins/jquery-ui/jquery-ui.min.js')}}"></script>

<!-- GITTER -->
<script src="{{ asset('admin/js/plugins/gritter/jquery.gritter.min.js')}}"></script>

<!-- Sparkline -->
<script src="{{ asset('admin/js/plugins/sparkline/jquery.sparkline.min.js')}}"></script>

<!-- Sparkline demo data  -->
<script src="{{ asset('admin/js/demo/sparkline-demo.js')}}"></script>

<!-- ChartJS-->
<script src="{{ asset('admin/js/plugins/chartJs/Chart.min.js')}}"></script>

<!-- Toastr -->
<script src="{{ asset('admin/js/plugins/toastr/toastr.min.js')}}"></script>


<script>
    $(document).ready(function() {
        setTimeout(function() {
            toastr.options = {
                closeButton: true,
                progressBar: true,
                showMethod: 'slideDown',
                timeOut: 4000
            };
            toastr.success('Responsive Admin Theme', 'Welcome to INSPINIA');

        }, 1300);


        var data1 = [
            [0,4],[1,8],[2,5],[3,10],[4,4],[5,16],[6,5],[7,11],[8,6],[9,11],[10,30],[11,10],[12,13],[13,4],[14,3],[15,3],[16,6]
        ];
        var data2 = [
            [0,1],[1,0],[2,2],[3,0],[4,1],[5,3],[6,1],[7,5],[8,2],[9,3],[10,2],[11,1],[12,0],[13,2],[14,8],[15,0],[16,0]
        ];
        $("#flot-dashboard-chart").length && $.plot($("#flot-dashboard-chart"), [
                data1, data2
            ],
            {
                series: {
                    lines: {
                        show: false,
                        fill: true
                    },
                    splines: {
                        show: true,
                        tension: 0.4,
                        lineWidth: 1,
                        fill: 0.4
                    },
                    points: {
                        radius: 0,
                        show: true
                    },
                    shadowSize: 2
                },
                grid: {
                    hoverable: true,
                    clickable: true,
                    tickColor: "#d5d5d5",
                    borderWidth: 1,
                    color: '#d5d5d5'
                },
                colors: ["#1ab394", "#1C84C6"],
                xaxis:{
                },
                yaxis: {
                    ticks: 4
                },
                tooltip: false
            }
        );

        var doughnutData = {
            labels: ["App","Software","Laptop" ],
            datasets: [{
                data: [300,50,100],
                backgroundColor: ["#a3e1d4","#dedede","#9CC3DA"]
            }]
        } ;


        var doughnutOptions = {
            responsive: false,
            legend: {
                display: false
            }
        };


        var ctx4 = document.getElementById("doughnutChart").getContext("2d");
        new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});

        var doughnutData = {
            labels: ["App","Software","Laptop" ],
            datasets: [{
                data: [70,27,85],
                backgroundColor: ["#a3e1d4","#dedede","#9CC3DA"]
            }]
        } ;


        var doughnutOptions = {
            responsive: false,
            legend: {
                display: false
            }
        };


        var ctx4 = document.getElementById("doughnutChart2").getContext("2d");
        new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});

    });
</script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-4625583-2', 'webapplayers.com');
    ga('send', 'pageview');

</script>
</body>

<!-- Mirrored from webapplayers.com/inspinia_admin-v2.9.2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Apr 2019 08:03:53 GMT -->
</html>

