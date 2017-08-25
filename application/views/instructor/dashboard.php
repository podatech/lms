<body>
    <!-- Wrapper required for sidebar transitions -->
    <div class="st-container">
        <!-- Fixed navbar -->
        <div class="navbar navbar-size-large navbar-default navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="#sidebar-menu" data-toggle="sidebar-menu" class="toggle pull-left visible-xs"><i class="fa fa-ellipsis-v"></i></a>
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
                    <a href="#">{username}/a> posted <a href="#">a comment</a> on Adrian's recent <a href="#">post</a>.
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
                <li><?php echo anchor('AuthenticationController/logout','Logout');?></li>
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
          <li class="active"><?php echo anchor('AuthenticationController/navigate','<i class="fa fa-home"></i><span>Dashboard</span>');?></li>
          <li><a href="app-instructor-messages.html"><i class="fa fa-paper-plane"></i><span>Messages</span></a></li>
          <li><?php echo anchor('CourseController/navigate','<i class="fa fa-mortar-board"></i><span>My Courses</span>')?></li>
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
              <h1 class="text-display-1">Dashboard</h1>
            </div>

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
                        <a class="btn btn-white btn-flat" href="app-instructor-earnings.html">Reports</a>
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
                    <li class="list-group-item media v-middle">
                      <div class="media-body">
                        <a href="app-instructor-course-edit-course.html" class="text-subhead list-group-link">Basics of HTML</a>
                      </div>
                      <div class="media-right">
                        <div class="progress progress-mini width-100 margin-none">
                          <div class="progress-bar progress-bar-green-300" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item media v-middle">
                      <div class="media-body">
                        <a href="app-instructor-course-edit-course.html" class="text-subhead list-group-link">Angular in Steps</a>
                      </div>
                      <div class="media-right">
                        <div class="progress progress-mini width-100 margin-none">
                          <div class="progress-bar progress-bar-green-300" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item media v-middle">
                      <div class="media-body">
                        <a href="app-instructor-course-edit-course.html" class="text-subhead list-group-link">Bootstrap Foundations</a>
                      </div>
                      <div class="media-right">
                        <div class="progress progress-mini width-100 margin-none">
                          <div class="progress-bar progress-bar-green-300" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <div class="panel-footer text-right">
                    <a href="app-instructor-courses.html" class="btn btn-white paper-shadow relative" data-z="0" data-hover-z="1" data-animated>View all</a>
                    <a href="app-instructor-course-edit-course.html" class="btn btn-primary paper-shadow relative" data-z="0" data-hover-z="1" data-animated>CREATE COURSE <i class="fa fa-plus"></i></a>
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
                              <img src="images/people/110/guy-1.jpg" alt="person" class="width-30 img-circle" />
                            </a> &nbsp;
                            <a href="#">mosaicpro</a>
                            <span class="text-caption text-light">24 min ago</span>
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
                            <span class="text-caption text-light">60 min ago</span>
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
                              <img src="images/people/110/guy-5.jpg" alt="person" class="width-30 img-circle" />
                            </a> &nbsp;
                            <a href="#">mosaicpro</a>
                            <span class="text-caption text-light">1 min ago</span>
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
                              <img src="images/people/110/guy-1.jpg" alt="person" class="width-30 img-circle" />
                            </a> &nbsp;
                            <a href="#">mosaicpro</a>
                            <span class="text-caption text-light">47 min ago</span>
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
                            <span class="text-caption text-light">19 min ago</span>
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
                        <a class="btn btn-white btn-flat" href="app-instructor-statement.html">Statement</a>
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
                          <td class="width-80 text-center"><a href="#">#9936</a></td>
                          <td class="width-50 text-center">&dollar;28</td>
                        </tr>
                        <tr>
                          <td class="width-100 text-caption">
                            <div class="label label-grey-200 label-xs">12 Jan 2015</div>
                          </td>
                          <td>Adrian Demian</td>
                          <td class="width-80 text-center"><a href="#">#880</a></td>
                          <td class="width-50 text-center">&dollar;60</td>
                        </tr>
                        <tr>
                          <td class="width-100 text-caption">
                            <div class="label label-grey-200 label-xs">12 Jan 2015</div>
                          </td>
                          <td>Adrian Demian</td>
                          <td class="width-80 text-center"><a href="#">#1758</a></td>
                          <td class="width-50 text-center">&dollar;54</td>
                        </tr>
                        <tr>
                          <td class="width-100 text-caption">
                            <div class="label label-grey-200 label-xs">12 Jan 2015</div>
                          </td>
                          <td>Adrian Demian</td>
                          <td class="width-80 text-center"><a href="#">#7983</a></td>
                          <td class="width-50 text-center">&dollar;97</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>
        <!-- /st-content-inner -->

      </div>
      <!-- /st-content -->

    </div>
    <!-- /st-pusher -->
    