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
                    <li class="dropdown">
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
                                <img src="<?php echo base_url('assets/images/people/110/guy-1.jpg');?>" alt="" class="img-circle" /> <?php echo ucwords($this->session->userdata('username'));?><span class="caret"></span>
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
                    <h1 class="text-white text-display-1 margin-v-0"><?php echo ucwords($this->session->userdata('username'));?></h1>
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
                    <!-- Tabbable Widget -->
                        <?php echo $this->session->flashdata('message');?>
                            <div class="tabbable paper-shadow relative" data-z="0.5">
                                <!-- Tabs -->
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <?php echo anchor('CourseController/goToAddCourse','<i class="fa fa-fw fa-lock"></i> <span class="hidden-sm hidden-xs">Course</span>');?>
                                    </li>
                                </ul>
                                <!-- // END Tabs -->

                                <!-- Panes -->
                                <div class="tab-content">
                                    <div id="course" class="tab-pane active">
                                        <?php echo form_open('CourseController/addCourse');?>
                                            <div class="form-group form-control-material">
                                                <input type="text" name="title" id="title" placeholder="Course Title" class="form-control used"/>
                                                <label for="title">Title</label>
                                            </div>
                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <textarea name="description" id="description" cols="30" rows="10" class="summernote"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="select">Category</label>
                                                <select id="select" name="category" class="form-control select2">
                                                    <option value="1">Techweek</option>
                                                    <option value="2">Techmeet</option>
                                                    <option value="3">Techtour</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="select">Level</label>
                                                <select name="level" id="select" class="form-control select2">
                                                    <option value="Junior">Junior</option>
                                                    <option value="Middle">Middle</option>
                                                    <option value="Senior">Senior</option>
                                                    <option value="Master">Master</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="start">Start Date</label>
                                                <div class="form-group">
                                                    <input id="datepicker" name="start" id="start" type="text" class="form-control datepicker">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="end">End Date</label>
                                                <div class="form-group">
                                                    <input id="datepicker" name="end" id="end" type="text" class="form-control datepicker">
                                                </div>
                                            </div>
                                            <div class="text-right">
                                                <?php echo form_submit('save','Save',array('class'=>'btn btn-primary'));?>
                                            </div>
                                        <?php echo form_close();?>
                                    </div>
                                </div>
                                <!-- // END Panes -->
                            </div>
                            <!-- // END Tabbable Widget -->
                        <br/>
                        <br/>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-default" data-toggle="panel-collapse" data-open="true">
                        <div class="panel-heading panel-collapse-trigger">
                            <h4 class="panel-title">My Account</h4>
                        </div>
                        <div class="panel-body list-group">
                            <ul class="list-group list-group-menu">
                                <li class="list-group-item"><?php echo anchor('#','Dashboard',array("class"=>"link-text-color"));?></li>
                                <li class="list-group-item"><?php echo anchor('CourseController/navigates','My Courses',array("class"=>"link-text-color"));?></li>
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