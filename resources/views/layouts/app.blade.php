<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">
        <link rel="shortcut icon" href="{{ asset('asset') }}/images/favicon_1.ico">
        <title>Pos-Inventory</title>

        <!-- Base Css Files -->
        <link href="{{ asset('asset') }}/css/bootstrap.min.css" rel="stylesheet" />

        <!-- Font Icons -->
        <link href="{{ asset('asset') }}/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="{{ asset('asset') }}/assets/ionicon/css/ionicons.min.css" rel="stylesheet" />
        <link href="{{ asset('asset') }}/css/material-design-iconic-font.min.css" rel="stylesheet">

        <!-- animate css -->
        <link href="{{ asset('asset') }}/css/animate.css" rel="stylesheet" />

        <!-- Waves-effect -->
        <link href="{{ asset('asset') }}/css/waves-effect.css" rel="stylesheet">

        <!-- sweet alerts -->
        <link href="{{ asset('asset') }}/assets/sweet-alert/sweet-alert.min.css" rel="stylesheet">

        <!-- Custom Files -->
        <link href="{{ asset('asset') }}/css/helper.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('asset') }}/css/style.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <!-- DataTables -->
        <link href="{{ asset('asset') }}/assets/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />


        <script src="{{ asset('asset') }}/js/modernizr.min.js"></script>
        
    </head>



    <body class="fixed-left">
        
        <!-- Begin page -->
        <div id="wrapper">
        
            <!-- Top Bar Start -->
            @include('partials.header')
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            @include('partials.sidebar')
            <!-- Left Sidebar End --> 



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                @yield('content')
                <!-- content -->

                @include('partials.footer')

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->

            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->


    
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{ asset('asset') }}/js/jquery.min.js"></script>
        <script src="{{ asset('asset') }}/js/bootstrap.min.js"></script>
        <script src="{{ asset('asset') }}/js/waves.js"></script>
        <script src="{{ asset('asset') }}/js/wow.min.js"></script>
        <script src="{{ asset('asset') }}/js/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="{{ asset('asset') }}/js/jquery.scrollTo.min.js"></script>
        <script src="{{ asset('asset') }}/assets/chat/moment-2.2.1.js"></script>
        <script src="{{ asset('asset') }}/assets/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="{{ asset('asset') }}/assets/jquery-detectmobile/detect.js"></script>
        <script src="{{ asset('asset') }}/assets/fastclick/fastclick.js"></script>
        <script src="{{ asset('asset') }}/assets/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="{{ asset('asset') }}/assets/jquery-blockui/jquery.blockUI.js"></script>

        <!-- sweet alerts -->
        <script src="{{ asset('asset') }}/assets/sweet-alert/sweet-alert.min.js"></script>
        <script src="{{ asset('asset') }}/assets/sweet-alert/sweet-alert.init.js"></script>

        <!-- flot Chart -->
        <script src="{{ asset('asset') }}/assets/flot-chart/jquery.flot.js"></script>
        <script src="{{ asset('asset') }}/assets/flot-chart/jquery.flot.time.js"></script>
        <script src="{{ asset('asset') }}/assets/flot-chart/jquery.flot.tooltip.min.js"></script>
        <script src="{{ asset('asset') }}/assets/flot-chart/jquery.flot.resize.js"></script>
        <script src="{{ asset('asset') }}/assets/flot-chart/jquery.flot.pie.js"></script>
        <script src="{{ asset('asset') }}/assets/flot-chart/jquery.flot.selection.js"></script>
        <script src="{{ asset('asset') }}/assets/flot-chart/jquery.flot.stack.js"></script>
        <script src="{{ asset('asset') }}/assets/flot-chart/jquery.flot.crosshair.js"></script>

        <!-- Counter-up -->
        <script src="{{ asset('asset') }}/assets/counterup/waypoints.min.js" type="text/javascript"></script>
        <script src="{{ asset('asset') }}/assets/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        
        <!-- CUSTOM JS -->
        <script src="{{ asset('asset') }}/js/jquery.app.js"></script>

        <!-- Dashboard -->
        <script src="{{ asset('asset') }}/js/jquery.dashboard.js"></script>

        <!-- Chat -->
        <script src="{{ asset('asset') }}/js/jquery.chat.js"></script>

        <!-- Todo -->
        <script src="{{ asset('asset') }}/js/jquery.todo.js"></script>

        <script src="{{ asset('asset') }}/assets/datatables/jquery.dataTables.min.js"></script>
        <script src="{{ asset('asset') }}/assets/datatables/dataTables.bootstrap.js"></script>


        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').dataTable();
            } );
        </script>

        <script type="text/javascript">
            /* ==============================================
            Counter Up
            =============================================== */
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>
    
    </body>
</html>