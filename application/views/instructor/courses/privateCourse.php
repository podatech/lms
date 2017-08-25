<body>
    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top navbar-size-large navbar-size-xlarge paper-shadow" data-z="0" data-animated role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-brand navbar-brand-logo">
                    <a class="svg" href="index.html">
                        <?php $this->load->view('private/logo');?>
                    </a>
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="main-nav">
                <ul class="nav navbar-nav navbar-nav-margin-left">
                    <li class="dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home</a>
                    </li>
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
                        <?php echo anchor('welcome/pricing','Pricing', array('class'=>'dropdown-toggle'));?>
                    </li>
                    <li class="dropdown">
                        <?php echo anchor('#','Forum',array('class'=>'dropdown-toggle'));?>
                    </li>
                    <li class="dropdown">
                        <?php echo anchor('#','Blog',array('class'=>'dropdown-toggle'));?>
                    </li>
                </ul>
                <div class="navbar-right">
                    <ul class="nav navbar-nav navbar-nav-bordered navbar-nav-margin-right">
                        <!-- user -->
                        <li class="dropdown user">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?php echo base_url('assets/images/people/110/guy-6.jpg');?>" alt="" class="img-circle" /> <?php echo ucwords($this->session->userdata('username'));?><span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="website-student-dashboard.html"><i class="fa fa-bar-chart-o"></i> Dashboard</a></li>
                                <li><a href="website-student-courses.html"><i class="fa fa-mortar-board"></i> My Courses</a></li>
                                <li><a href="website-student-profile.html"><i class="fa fa-user"></i> Profile</a></li>
                            </ul>
                        </li>
                        <!-- // END user -->
                    </ul>
                    <?php echo anchor('AuthenticationController/logout','Log Out',array("class"=>"navbar-btn btn btn-primary"));?>
                </div>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </div>

    <div class="parallax overflow-hidden bg-blue-400 page-section third">
        <div class="container parallax-layer" data-opacity="true">
            <div class="media v-middle">
                <div class="media-left text-center">
                    <a href="#">
                        <img src="<?php echo base_url('assets/images/people/110/guy-1.jpg');?>" alt="people" class="img-circle width-80" />
                    </a>
                </div>
                <div class="media-body">
                    <h1 class="text-white text-display-1 margin-v-0"><?php echo ucfirst($this->session->userdata('username'));?></h1>
                    <p class="text-subhead"><a class="link-white text-underline" href="website-instructor-public-profile.html">View complete profile</a></p>
                </div>
                <div class="media-right">
                    <span class="label bg-blue-500"><?php echo $this->session->userdata('privilege');?></span>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="page-section">
            <div class="row">
                <div class="col-md-9">
                    <div class="row" data-toggle="isotope">
                        
                        <!-- Start Course -->
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
                                            ?>">
                                        </span>
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
                    <!-- End Course -->
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
                    <?=$pagination?>
                </div>
                <br/>
                <br/>
                <div class="col-md-3">
                    <div class="panel panel-default" data-toggle="panel-collapse" data-open="true">
                        <div class="panel-heading panel-collapse-trigger">
                            <h4 class="panel-title">My Account</h4>
                        </div>
                        <div class="panel-body list-group">
                            <ul class="list-group list-group-menu">
                                <li class="list-group-item"><?php echo anchor('#','Dashboard',array("class"=>"link-text-color"));?></li>
                                <li class="list-group-item active"><?php echo anchor('#','My Courses',array("class"=>"link-text-color"));?></li>
                                <li class="list-group-item"><a class="link-text-color" href="website-instructor-messages.html">Messages</a></li>
                                <li class="list-group-item"><a class="link-text-color" href="website-instructor-earnings.html">Earnings</a></li>
                                <li class="list-group-item"><a class="link-text-color" href="website-instructor-statement.html">Statement</a></li>
                                <li class="list-group-item"><a class="link-text-color" href="website-instructor-profile.html">Profile</a></li>
                                <li class="list-group-item"><?php echo anchor('AuthenticationController/logout','<span>Logout</span>',array("class"=>"link-text-color"));?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>