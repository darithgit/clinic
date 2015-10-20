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
        .list-dasboard{
            margin-top: 40px;
            margin-left: 5px;
            width: 15%;
            border: 1px solid #FFF;
            padding: 10px;
            border-radius: 5px;
        }
        .list-dasboard:hover{
            border: 1px solid #CCC;
        }
        </style>
    </head>

    
    <body class="no-skin">
        
        <?php
        include_once 'templates/header.php';
        ?>

        <div class="main-container" id="main-container">
            <script type="text/javascript">
                try{ace.settings.check('main-container' , 'fixed')}catch(e){}
            </script>

             <?php include_once 'templates/sidebar_left.php'; ?>

            <div class="main-content">
                <div class="main-content-inner">
                    <div class="breadcrumbs" id="breadcrumbs">
                        <script type="text/javascript">
                            try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
                        </script>

                        <ul class="breadcrumb">
                            <li>
                                <i class="ace-icon fa fa-home home-icon"></i>
                                <a href="#">Home</a>
                            </li>
                            <li class="active">Dashboard</li>
                        </ul><!-- /.breadcrumb -->

                        <!-- <div class="nav-search" id="nav-search">
                            <form class="form-search">
                                <span class="input-icon">
                                    <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                                    <i class="ace-icon fa fa-search nav-search-icon"></i>
                                </span>
                            </form>
                        </div> --><!-- /.nav-search -->
                    </div>

                    <div class="page-content" id="content" >

                        <div class="ace-settings-container" id="ace-settings-container">
                             <?php
                            if ($this->uri->segment(1) == '' || $this->uri->segment(1) == 'dashboard') {
                                include_once 'templates/dashboard.php';
                            } else if ($this->uri->segment(1) != '' && $this->uri->segment(2) == '') {
                                include_once $this->uri->segment(1) . '/index.php';
                            } else {
                                include_once $this->uri->segment(1) . '/' . $this->uri->segment(2) . '.php';
                            }
                            ?>
                        </div>
                    
                    </div><!-- /.page-content -->
                </div>
            </div><!-- /.main-content -->

            <div class="footer">
                <div class="footer-inner">
                    <div class="footer-content">
                        <span class="bigger-120">
                            <span class="blue bolder">&copy; Copy right by <a href="" target="_blank">Clinic System </a>  <?php echo date('Y'); ?></span>
                       
                        </span>

                         <br> Powered by : <a
                        href="http://newday-tech.com" target="_blank">Newday technology</a>
                       
                    </div>
                </div>
            </div>

           
    </div><!-- /.main-container -->
        
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
