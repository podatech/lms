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
                        <div class="item col-xs-12 col-lg-6">
                            <div class="panel panel-default paper-shadow" data-z="0.5">
                                <div class="panel-heading">
                                    <div class="media v-middle">
                                        <div class="media-body">
                                            <h4 class="text-headline margin-none">Earnings</h4>
                                            <p class="text-subhead text-light">This Month</p>
                                        </div>
                                        <div class="media-right">
                                            <a class="btn btn-white btn-flat" href="website-instructor-earnings.html">Reports</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div id="line-holder" data-toggle="flot-chart-earnings" class="flotchart-holder height-200"></div>
                                </div>
                                <hr/>
                                <div class="panel-body">
                                    <div class="row text-center">
                                        <div class="col-md-6">
                                            <h4 class="margin-none">Gross Revenue</h4>
                                            <p class="text-display-1 text-warning margin-none">102.4k</p>
                                        </div>
                                        <div class="col-md-6">
                                            <h4 class="margin-none">Net Revenue</h4>
                                            <p class="text-display-1 text-success margin-none">55k</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-xs-12 col-lg-6">
                            <div class="panel panel-default paper-shadow" data-z="0.5">
                                <div class="panel-heading">
                                    <h4 class="text-headline margin-none">My Courses</h4>
                                    <p class="text-subhead text-light">Your recent courses</p>
                                </div>
                                <ul class="list-group">
                                    <?php
                                        foreach ($recentCourses as $key => $value) {
                                            ?>
                                            <li class="list-group-item media v-middle">
                                                <div class="media-body">
                                                    <a href="website-instructor-course-edit-course.html" class="text-subhead list-group-link"><?php echo $value->title;?></a>
                                                </div>
                                                <div class="media-right">
                                                    <div class="progress progress-mini width-100 margin-none">
                                                        <?php
                                                            $datediff = strtotime($value->end_date) - strtotime($value->start_date);
                                                            $datediff = floor($datediff / (60 * 60 * 24));

                                                            $percentage = floor((3/$datediff)*100);

                                                        ?>
                                                        <div class="progress-bar progress-bar-green-300" role="progressbar" aria-valuenow="<?=$percentage?>" aria-valuemin="0" aria-valuemax="100" style="width: <?=$percentage?>%;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php
                                        }
                                    ?>
                                    
                                </ul>
                                <div class="panel-footer text-right">
                                    <?php
                                        $data = array(
                                            'class' => 'btn btn-white paper-shadow relative',
                                            'data-z' => 0,
                                            'data-hover-z' => 1,
                                            'data-animated' => true
                                        );
                                        echo anchor('CourseController/navigates','View all',$data);
                                    ?>

                                    <?php
                                        $data = array(
                                            'class' => 'btn btn-primary paper-shadow relative',
                                            'data-z' => 0,
                                            'data-hover-z' => 1,
                                            'data-animated' => true
                                        );
                                        echo anchor('CourseController/goToAddCourses','CREATE COURSE <i class="fa fa-plus"></i>',$data);
                                    ?>
                                </div>
                            </div>
                        </div>
            <div class="item col-xs-12 col-lg-6">
              <div class="s-container">
                <h4 class="text-headline margin-none">Comments</h4>
                <p class="text-subhead text-light">Latest student comments </p>
              </div>
              <div class="panel panel-default">
                <ul class="list-group">
                  <li class="list-group-item">
                    <div class="media v-middle margin-v-0-10">
                      <div class="media-body">
                        <p class="text-subhead">
                          <a href="#">
                            <img src="images/people/110/guy-4.jpg" alt="person" class="width-30 img-circle" />
                          </a> &nbsp;
                          <a href="#">mosaicpro</a>
                          <span class="text-caption text-light">30 min ago</span>
                        </p>
                      </div>
                      <div class="media-right">
                        <div class="width-50 text-right">
                          <a href="#" class="btn btn-white btn-xs"><i class="fa fa-reply"></i></a>
                        </div>
                      </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias, blanditiis eligendi expedita ipsam minus non numquam quidem reiciendis ut?</p>
                    <p class="text-light"><span class="caption">Course:</span> <a href="app-student-course.html">Basics Of HTML</a></p>
                  </li>
                  <li class="list-group-item">
                    <div class="media v-middle margin-v-0-10">
                      <div class="media-body">
                        <p class="text-subhead">
                          <a href="#">
                            <img src="images/people/110/guy-2.jpg" alt="person" class="width-30 img-circle" />
                          </a> &nbsp;
                          <a href="#">mosaicpro</a>
                          <span class="text-caption text-light">38 min ago</span>
                        </p>
                      </div>
                      <div class="media-right">
                        <div class="width-50 text-right">
                          <a href="#" class="btn btn-white btn-xs"><i class="fa fa-reply"></i></a>
                        </div>
                      </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias, blanditiis eligendi expedita ipsam minus non numquam quidem reiciendis ut?</p>
                    <p class="text-light"><span class="caption">Course:</span> <a href="app-student-course.html">Basics Of HTML</a></p>
                  </li>
                </ul>

              </div>
            </div>
            <div class="item col-xs-12 col-lg-6">
              <div class="panel panel-default paper-shadow" data-z="0.5">
                <div class="panel-heading">
                  <div class="media v-middle">
                    <div class="media-body">
                      <h4 class="text-headline margin-none">Transactions</h4>
                      <p class="text-subhead text-light">Latest from statement</p>
                    </div>
                    <div class="media-right">
                      <a class="btn btn-white btn-flat" href="website-instructor-statement.html">Statement</a>
                    </div>
                  </div>
                </div>
                <div class="table-responsive">
                  <table class="table text-subhead v-middle">
                    <tbody>
                      <tr>
                        <td class="width-100 text-caption">
                          <div class="label label-grey-200 label-xs">12 Jan 2015</div>
                        </td>
                        <td>Adrian Demian</td>
                        <td class="width-80 text-center"><a href="#">#4975</a></td>
                        <td class="width-50 text-center">&dollar;74</td>
                      </tr>
                      <tr>
                        <td class="width-100 text-caption">
                          <div class="label label-grey-200 label-xs">12 Jan 2015</div>
                        </td>
                        <td>Adrian Demian</td>
                        <td class="width-80 text-center"><a href="#">#8981</a></td>
                        <td class="width-50 text-center">&dollar;42</td>
                      </tr>
                      <tr>
                        <td class="width-100 text-caption">
                          <div class="label label-grey-200 label-xs">12 Jan 2015</div>
                        </td>
                        <td>Adrian Demian</td>
                        <td class="width-80 text-center"><a href="#">#11090</a></td>
                        <td class="width-50 text-center">&dollar;42</td>
                      </tr>
                      <tr>
                        <td class="width-100 text-caption">
                          <div class="label label-grey-200 label-xs">12 Jan 2015</div>
                        </td>
                        <td>Adrian Demian</td>
                        <td class="width-80 text-center"><a href="#">#9805</a></td>
                        <td class="width-50 text-center">&dollar;38</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

          <br/>
          <br/>

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