<!-- topbar starts -->
<?php

//$q = $this->db->get('company_setting');
?>
<div class="navbar navbar-default" role="navigation">

    <div class="navbar-inner">
        <button type="button" class="navbar-toggle pull-left animated flip">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="" style="color: #fff; font-size: 18px; font-weight: bold;" href="<?php echo base_url(); ?>">
            
        
            
        </a>

        <!-- user dropdown starts -->
        <div class="btn-group pull-right">
            <ul class="nav ace-nav">

                <li class="light-blue">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">

                            <img alt="" src="http://clouddatabasepro.com/demo/accounting/template/assets/staff_photos/no_photo.PNG" class="nav-user-photo">


                        <span class="user-info">
                            <small>Welcome, Admin</small>
                        </span>

                        <i class="ace-icon fa fa-caret-down"></i>
                    </a>

                    <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close" style="">
                        <li>
                            <a href="http://clouddatabasepro.com/demo/accounting/manage_users/account_setting/manage_users">
                                <i class="ace-icon fa fa-cog"></i>
                                Account Settings
                            </a>
                        </li>

                        <li>
                            <a href="http://clouddatabasepro.com/demo/accounting/manage_users/update_profile/manage_users/">
                                <i class="ace-icon fa fa-user"></i>
                                Profile
                            </a>
                        </li>

                        <li class="divider"></li>

                        <li>
                            <a href="<?php echo base_url().'login/logout' ?>">
                                <i class="ace-icon fa fa-power-off"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </li>



            </ul>
        </div>
        <!-- user dropdown ends -->



    </div>
</div>