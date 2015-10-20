<!DOCTYPE html>
<html lang="en">
     <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>Clinic</title>

        <meta name="description" content="Static &amp; Dynamic Tables" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />


        <script src="<?php echo base_url(); ?>template/assets/js/ace-extra.min.js"></script>
        <script src="<?php echo base_url(); ?>template/assets/js/jquery.1.11.1.min.js"></script>

        <script src="<?php echo base_url(); ?>template/assets/js/ace-extra.min.js"></script>


        <!-- bootstrap & fontawesome -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/assets/css/clinic_style.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/assets/font-awesome/4.2.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/assets/css/jquery-ui.custom.min.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/assets/css/chosen.min.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/assets/css/datepicker.min.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/assets/css/bootstrap-timepicker.min.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/assets/css/daterangepicker.min.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/assets/css/bootstrap-datetimepicker.min.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/assets/css/colorpicker.min.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/assets/fonts/fonts.googleapis.com.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
        <style type="text/css">
        .col-md-2.list-dasboard{
            margin-top: 40px !important;
        }
        </style>
    </head>
    <body class="no-skin">
       <?php 
            include_once 'header.php';
       ?>
        <!-- topbar ends -->
        <div class="container-fluid">
            <div class="row">

                <!-- left menu starts -->
                <div class="col-sm-2 col-lg-2">
                    <?php include_once 'sidebar_left.php'; ?>
                </div>
                <!--/span-->
                <!-- left menu ends -->


                <div id="content" class="col-lg-10 col-sm-10">
                    <!-- content starts -->
                    <div>
                        <ul class="breadcrumb">
                            <li>
                                <a href="#">Home</a>
                            </li>
                            <li>
                                <a href="#">Dashboard</a>
                            </li>
                        </ul>
                    </div>

                        <div class="box col-md-12">
                            
                                   
                                   <?php include_once 'content.php'; ?>
                               
                        </div>
                    

                    <!-- content ends -->
                </div><!--/#content.col-md-0-->
            </div><!--/fluid-row-->



            <hr>

            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true">

                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">Ã—</button>
                            <h3>Settings</h3>
                        </div>
                        <div class="modal-body">
                            <p>Here settings can be configured...</p>
                        </div>
                        <div class="modal-footer">
                            <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                            <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="row">
                <p class="col-md-9 col-sm-9 col-xs-12 copyright">&copy; <a href="http://usman.it" target="_blank">Muhammad
                        Usman</a> 2012 - 2015</p>

                <p class="col-md-3 col-sm-3 col-xs-12 powered-by">Powered by: <a
                        href="http://usman.it/free-responsive-admin-template">Charisma</a></p>
            </footer>

        </div><!--/.fluid-container-->

        <!-- external javascript -->

      
            <!-- basic scripts -->

        <!--[if !IE]> -->
        <script src="<?php echo base_url(); ?>template/assets/js/jquery.2.1.1.min.js"></script>

        <!-- <![endif]-->

        <!--[if IE]>
<script src="<?php echo base_url(); ?>template/assets/js/jquery.1.11.1.min.js"></script>
<![endif]-->

        <!--[if !IE]> -->
        <script type="text/javascript">
            window.jQuery || document.write("<script src='<?php echo base_url(); ?>template/assets/js/jquery.min.js'>"+"<"+"/script>");
        </script>

        <!-- <![endif]-->

        <!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
        <script type="text/javascript">
            if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url(); ?>template/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
        </script>
        <script src="<?php echo base_url(); ?>template/assets/js/bootstrap.min.js"></script>

        <!-- page specific plugin scripts -->
        <script src="<?php echo base_url(); ?>template/assets/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url(); ?>template/assets/js/jquery.dataTables.bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>template/assets/js/dataTables.tableTools.min.js"></script>
        <script src="<?php echo base_url(); ?>template/assets/js/dataTables.colVis.min.js"></script>

        <!-- ace scripts -->
        <script src="<?php echo base_url(); ?>template/assets/js/ace-elements.min.js"></script>
        <script src="<?php echo base_url(); ?>template/assets/js/ace.min.js"></script>
        <!-- JQuery Plugin -->
        <script src="<?php echo base_url(); ?>template/assets/js/bootstrap-datepicker.min.js"></script>
        <!-- End of JQuery plugin -->
        <!-- inline scripts related to this page -->
        <!-- Chosen select  -->
        <script src="<?php echo base_url(); ?>template/assets/js/chosen.jquery.min.js"></script>

        <!-- End of chosen select  -->
        <!-- Bootstrap Rating  -->
        <script src="<?php echo base_url(); ?>template/assets/js/bootstrap-rating.js"></script>

        <!-- End of Bootstrap Rating  -->


    </body>
</html>
