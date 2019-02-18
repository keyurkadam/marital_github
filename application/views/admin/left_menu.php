    <style type="text/css">
.navbar-inverse .navbar-nav > li > a {
    color: white;
}
.navbar-inverse .navbar-brand {
    color: white;
}
.top-nav > li > a {
    line-height: 20px;
    color: white;
}
.side-nav > li > ul > li > a {
    display: block;
    padding: 10px 15px 10px 38px;
    text-decoration: none;
    color: white;
}
.navbar-inverse {
    background-color: lightseagreen;
    border-color: #080808;
}
#page-wrapper {
    padding: 10px;
    min-height: 650px;
}
.side-nav {
   
    overflow-y: auto !important;
max-height: 750px !important;


}


/* Chrome, Safari */
/*
.side-nav::-webkit-scrollbar {
width: 15px;
height: 15px;
}
.side-nav::-webkit-scrollbar-track-piece  {
background-color: #C2D2E4;
}
.side-nav::-webkit-scrollbar-thumb:vertical {
height: 30px;
background-color: #0A4C95;
}
*/
</style>
<div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <!--<li class="active">
                        <a href="<?php echo base_url(); ?>"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>-->
                    

                    <li class="active">
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo" class="collapsed"><i class="fa fa-fw fa-arrows-v"></i> Masters <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse" style="height: 0px;">
                            <li>
                                <a href="<?php echo base_url(); ?>admin/manage_religion"><i class="fa fa-fw fa-user"></i> Religion</a>
                            </li>

                            <li>
                                <a href="<?php echo base_url(); ?>admin/manage_caste"><i class="fa fa-fw fa-flash"></i> Caste</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>admin/manage_country"><i class="fa fa-fw fa-adjust"></i> Country</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>admin/manage_state"><i class="fa fa-fw fa-adjust"></i> State</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>admin/manage_city"><i class="fa fa-fw fa-map-marker"></i> City</a>
                            </li>

                            <li>
                                <a href="<?php echo base_url(); ?>admin/manage_mother_tongue"><i class="fa fa-fw fa-map-marker"></i> Mother Tongue</a>
                            </li>

                            <li>
                                <a href="<?php echo base_url(); ?>admin/manage_hobby"><i class="fa fa-fw fa-map-marker"></i> Hobbies</a>
                            </li>

                            <li>
                                <a href="<?php echo base_url(); ?>admin/manage_interest"><i class="fa fa-fw fa-map-marker"></i> Interest</a>
                            </li>

                            <li class="active">
                                <a href="<?php echo base_url(); ?>admin/manage_plan"><i class="fa fa-fw fa-dashboard"></i> Plan</a>
                            </li>
                        </ul>
                    </li>

                    <li class="active">
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo2" class="collapsed"><i class="fa fa-fw fa-arrows-v"></i> Member Management <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo2" class="collapse" style="height: 0px;">
                            <li>
                                <a href="<?php echo base_url(); ?>admin/manage_member"><i class="fa fa-fw fa-user"></i> Member</a>
                            </li>

                            <li>
                                <a href="<?php echo base_url(); ?>admin/manage_caste"><i class="fa fa-fw fa-dashboard"></i>Member Plan</a>
                            </li>

                            <li>
                                <a href="<?php echo base_url(); ?>admin/manage_member_photo"><i class="fa fa-fw fa-flash"></i> Member Photos</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>admin/manage_success_story"><i class="fa fa-fw fa-adjust"></i> Success Story</a>
                            </li>
                            
                        </ul>
                    </li>

                    <li class="active">
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo3" class="collapsed"><i class="fa fa-fw fa-arrows-v"></i> Subscriber Management <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo3" class="collapse" style="height: 0px;">
                            <li>
                                <a href="<?php echo base_url(); ?>admin/manage_subscribe"><i class="fa fa-fw fa-dashboard"></i> Subscribe</a>
                            </li>

                            <li>
                                <a href="<?php echo base_url(); ?>admin/manage_sub_email_campaign"><i class="fa fa-fw fa-dashboard"></i> Subscribe Campaign</a>
                            </li>

                            <li>
                                <a href="<?php echo base_url(); ?>admin/manage_subscribe_email"><i class="fa fa-fw fa-dashboard"></i>Subscribe Campaign Email </a>
                            </li>
                            
                        </ul>
                    </li>

                    <li class="active">
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo4" class="collapsed"><i class="fa fa-fw fa-arrows-v"></i> Settings <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo4" class="collapse" style="height: 0px;">
                            <li>
                                <a href="<?php echo base_url(); ?>admin/manage_subscribe"><i class="fa fa-fw fa-dashboard"></i> Staff</a>
                            </li>

                            <li>
                                <a href="<?php echo base_url(); ?>admin/manage_caste"><i class="fa fa-fw fa-dashboard"></i>Banner Ads</a>
                            </li>

                            <li>
                                <a href="<?php echo base_url(); ?>admin/manage_settings"><i class="fa fa-fw fa-dashboard"></i> Settings</a>
                            </li>
                            
                            <li>
                                <a href="<?php echo base_url(); ?>admin/manage_sms_provider"><i class="fa fa-fw fa-dashboard"></i> SMS Settings</a>
                            </li>

                            <li>
                                <a href="<?php echo base_url(); ?>admin/manage_cms"><i class="fa fa-fw fa-dashboard"></i> CMS</a>
                            </li>

                            <li>
                                <a href="<?php echo base_url(); ?>admin/manage_slider"><i class="fa fa-fw fa-dashboard"></i> Slider</a>
                            </li>
                            
                        </ul>
                    </li>

                    <!--<li class="active">
                        <a href="<?php echo base_url(); ?>admin/manage_religion"><i class="fa fa-fw fa-dashboard"></i> Religion</a>
                    </li>

                    <li class="active">
                        <a href="<?php echo base_url(); ?>admin/manage_caste"><i class="fa fa-fw fa-dashboard"></i> Caste</a>
                    </li>

                    <li class="active">
                        <a href="<?php echo base_url(); ?>admin/manage_country"><i class="fa fa-fw fa-dashboard"></i> Country</a>
                    </li>

                    <li class="active">
                        <a href="<?php echo base_url(); ?>admin/manage_caste"><i class="fa fa-fw fa-dashboard"></i> State</a>
                    </li>

                    <li class="active">
                        <a href="<?php echo base_url(); ?>admin/manage_caste"><i class="fa fa-fw fa-dashboard"></i> City</a>
                    </li>

                    <li class="active">
                        <a href="<?php echo base_url(); ?>admin/manage_caste"><i class="fa fa-fw fa-dashboard"></i> Member</a>
                    </li>

                    <li class="active">
                        <a href="<?php echo base_url(); ?>admin/manage_caste"><i class="fa fa-fw fa-dashboard"></i> Member Photo</a>
                    </li>

                    <li class="active">
                        <a href="<?php echo base_url(); ?>admin/manage_caste"><i class="fa fa-fw fa-dashboard"></i> Member Success Story</a>
                    </li>-->

                    
                    

                    <!--<li class="active">
                        <a href="<?php echo base_url(); ?>admin/manage_caste"><i class="fa fa-fw fa-dashboard"></i>Mother Tongue</a>
                    </li>

                    <li class="active">
                        <a href="<?php echo base_url(); ?>admin/manage_caste"><i class="fa fa-fw fa-dashboard"></i>Hobbies</a>
                    </li>

                    <li class="active">
                        <a href="<?php echo base_url(); ?>admin/manage_caste"><i class="fa fa-fw fa-dashboard"></i>Interest</a>
                    </li>-->

                    

                </ul>
            </div>
            