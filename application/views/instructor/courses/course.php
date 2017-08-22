    <body>
        <!-- Wrapper required for sidebar transitions -->
        <div class="st-container">
            <!-- Fixed navbar -->
            <div class="navbar navbar-size-large navbar-default navbar-fixed-top" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a href="#sidebar-menu" data-toggle="sidebar-menu" class="toggle pull-left visible-xs">
                            <i class="fa fa-ellipsis-v"></i>
                        </a>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="navbar-brand navbar-brand-primary navbar-brand-logo navbar-nav-padding-left">
                            <a class="svg" href="app-student-dashboard.html">
                                <?php $this->load->view('template/logo');?>
                            </a>
                        </div>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="main-nav">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Techweek <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="/">Technical</a></li>
                                    <li><a href="/">Nontechnical</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Techmeet <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="/">Continous</a></li>
                                    <li><a href="/">Once</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Techtour <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="/">Residence</a></li>
                                    <li><a href="/">Others</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Forum</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog</a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-nav-bordered navbar-right">
                            <!-- notifications -->
                            <li class="dropdown notifications updates">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-bell-o"></i>
                                    <span class="badge badge-primary">4</span>
                                </a>
                                <ul class="dropdown-menu" role="notification">
                                    <li class="dropdown-header">Notifications</li>
                                    <li class="media">
                                        <div class="pull-right">
                                            <span class="label label-success">New</span>
                                        </div>
                                        <div class="media-left">
                                            <img src="<?php echo base_url('assets/images/people/50/guy-2.jpg');?>" alt="people" class="img-circle" width="30">
                                        </div>
                                        <div class="media-body">
                                            <a href="#">Adrian D.</a> posted <a href="#">a photo</a> on his timeline.
                                            <br/>
                                            <span class="text-caption text-muted">5 mins ago</span>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="pull-right">
                                            <span class="label label-success">New</span>
                                        </div>
                                        <div class="media-left">
                                            <img src="<?php echo base_url('assets/images/people/50/guy-6.jpg');?>" alt="people" class="img-circle" width="30">
                                        </div>
                                        <div class="media-body">
                                            <a href="#">{username}</a> posted <a href="#">a comment</a> on Adrian's recent <a href="#">post</a>.
                                            <br/>
                                            <span class="text-caption text-muted">3 hrs ago</span>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-left">
                                            <span class="icon-block s30 bg-grey-200"><i class="fa fa-plus"></i></span>
                                        </div>
                                        <div class="media-body">
                                            <a href="#">Mary D.</a> and <a href="#">Michelle</a> are now friends.
                                            <p>
                                                <span class="text-caption text-muted">1 day ago</span>
                                            </p>
                                            <a href="">
                                                <img class="width-30 img-circle" src="<?php echo base_url('assets/images/people/50/woman-6.jpg');?>" alt="people">
                                            </a>
                                            <a href="">
                                                <img class="width-30 img-circle" src="<?php echo base_url('assets/images/people/50/woman-3.jpg');?>" alt="people">
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- // END notifications -->
                            <!-- User -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle user" data-toggle="dropdown">
                                    <img src="<?php echo base_url('assets/images/people/110/guy-5.jpg');?>" alt="{username}" class="img-circle" width="40" /> {username} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="app-student-profile.html">Account</a></li>
                                    <li><a href="app-student-billing.html">Billing</a></li>
                                    <li><a href="login.html">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
            </div>

            <!-- Sidebar component with st-effect-1 (set on the toggle button within the navbar) -->
            <div class="sidebar left sidebar-size-3 sidebar-offset-0 sidebar-visible-desktop sidebar-visible-mobile sidebar-skin-dark" id="sidebar-menu" data-type="collapse">
                <div data-scrollable>
                    <div class="sidebar-block">
                        <div class="profile">
                            <a href="#">
                                <img src="<?php echo base_url('assets/images/people/110/guy-6.jpg');?>" alt="people" class="img-circle width-80" />
                            </a>
                            <h4 class="text-display-1 margin-none" style="text-transform: capitalize;">{username}</h4>
                        </div>
                    </div>

                    <ul class="sidebar-menu">
                        <li><?php echo anchor('AuthenticationController/navigate','<i class="fa fa-home"></i><span>Dashboard</span>');?></li>
                        <li><a href="app-instructor-messages.html"><i class="fa fa-paper-plane"></i><span>Messages</span></a></li>
                        <li class="active"><?php echo anchor('CourseController/navigate','<i class="fa fa-mortar-board"></i><span>My Courses</span>')?></li>
                        <li><a href="app-instructor-earnings.html"><i class="fa fa-bar-chart-o"></i><span>Earnings</span></a></li>
                        <li><a href="app-instructor-statement.html"><i class="fa fa-dollar"></i><span>Statement</span></a></li>
                        <li><a href="#"><i class="fa fa-sign-out"></i><span>Logout</span></a></li>
                    </ul>
                </div>
            </div>

            <!-- sidebar effects OUTSIDE of st-pusher: -->
            <!-- st-effect-1, st-effect-2, st-effect-4, st-effect-5, st-effect-9, st-effect-10, st-effect-11, st-effect-12, st-effect-13 -->

            <!-- content push wrapper -->
            <div class="st-pusher" id="content">
                <!-- sidebar effects INSIDE of st-pusher: -->
                <!-- st-effect-3, st-effect-6, st-effect-7, st-effect-8, st-effect-14 -->

                <!-- this is the wrapper for the content -->
                <div class="st-content">
                    <!-- extra div for emulating position:fixed of the menu -->
                    <div class="st-content-inner padding-none">
                        <div class="container-fluid">
                            <div class="page-section">
                                <h1 class="text-display-1">My Courses</h1>
                            </div>

                            <div class="row" data-toggle="isotope">
                                <?php
                                    foreach ($course as $key => $value) {
                                        ?>
                                        <div class="item col-xs-12 col-sm-6 col-lg-4">
                                            <div class="panel panel-default paper-shadow" data-z="0.5">
                                                <div class="cover overlay cover-image-full hover">
                                                    <span class="img icon-block height-150 
                                                        <?php 
                                                            if ($value->color=='blue') {
                                                                echo 'bg-primary';
                                                            }

                                                            if ($value->color=='red') {
                                                                echo 'bg-lightred';
                                                            }
                                                        ?>"></span>
                                                    <a href="app-instructor-course-edit-course.html" class="padding-none overlay overlay-full icon-block 
                                                        <?php 
                                                            if ($value->color=='blue') {
                                                                echo 'bg-primary';
                                                            }

                                                            if ($value->color=='red') {
                                                                echo 'bg-lightred';
                                                            }
                                                        ?>">
                                                        <span class="v-center">
                                                            <i class="fa <?php echo $value->icon;?>"></i>
                                                        </span>
                                                    </a>
                                                    <a href="app-instructor-course-edit-course.html" class="overlay overlay-full overlay-hover overlay-bg-white">
                                                        <span class="v-center">
                                                            <span class="btn btn-circle btn-<?php echo $value->color;?>-500 btn-lg"><i class="fa fa-graduation-cap"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="panel-body">
                                                    <h4 class="text-headline margin-v-0-10"><a href="app-instructor-course-edit-course.html"><?php echo $value->title;?></a></h4>
                                                </div>
                                                <hr class="margin-none" />
                                                <div class="panel-body">
                                                    <a class="btn btn-white btn-flat paper-shadow relative" data-z="0" data-hover-z="1" data-animated href="#">
                                                        <i class="fa fa-fw fa-pencil"></i> Edit course
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                ?>
                                
                            </div>
                            <div class="row" data-toggle="isotope">
                                <div class="item col-xs-12 col-sm-6 col-lg-4">
                                    <div class="panel panel-default paper-shadow" data-z="0.5">
                                        <div class="cover overlay cover-image-full hover">
                                            <span class="img icon-block height-150 bg-grey-200"></span>
                                            <?php echo anchor('CourseController/goToAddCourse','<span class="v-center"><i class="fa fa-plus text-grey-600"></i></span>',array('class'=>'padding-none overlay overlay-full icon-block bg-grey-200'));?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                           <!-- <ul class="pagination margin-top-none">
                                <li class="disabled"><a href="#">&laquo;</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">&raquo;</a></li>
                            </ul> -->
                            <?=$pagination?>
                        </div>
                    </div>
                    <!-- /st-content-inner -->
                </div>
                <!-- /st-content -->
            </div>
            <!-- /st-pusher -->