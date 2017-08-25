<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?><!DOCTYPE html>
<html class="top-navbar-xlarge bottom-footer app-desktop" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="" />
        <meta name="author" content="Irsyad Jamal Pratama Putra" />

        <title>Poda Learning</title>

        <link href="<?php echo base_url('assets/css/vendor/all.css');?>" rel="stylesheet" />
        <link href="<?php echo base_url('assets/css/app/app.css');?>" rel="stylesheet" />
        <link rel="shortcut icon" href="<?php echo base_url('assets/favicon.ico');?>"/>
    </head>

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
            <?php echo anchor('/','Home', array('class'=>'dropdown-toggle'));?>
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
          <li class="dropdown active">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pricing</a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Forum</a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog</a>
          </li>
        </ul>
        <div class="navbar-right">
          <?php echo anchor('welcome/login', 'Log In', array('class' => 'navbar-btn btn btn-primary'));?>
        </div>
      </div>
      <!-- /.navbar-collapse -->

    </div>
  </div>

  <div class="st-content-inner">

    <div class="parallax cover overlay pricing">
      <div class="v-cell">
        <div class="page-section">
          <div class="parallax-layer container text-center" data-translate-when="inViewport" data-opacity="true">

            <div class="table-pricing-3">
              <ul class="list-unstyled row">
                <li class="col-md-4 overlay-bg-white-strong paper-shadow" data-z="1">
                  <div class="innerAll">
                    <h3 class="text-headline">Starter</h3>
                    <div class="pricing-body">
                      <div class="price">Free</div>
                    </div>
                    <div class="pricing-features">
                      <ul>
                        <li>
                          <strong>Basic</strong> Support</li>
                        <li>
                          <strong>3 Courses</strong> per Week</li>
                        <li>
                          <strong>Monthly</strong> Digests</li>
                        <li>
                          <strong>Practice Live</strong> System</li>
                        <li>
                          <strong>Members-only</strong> Forums</li>
                      </ul>
                    </div>
                    <div class="pricing-footer">
                      <a href="#modal-overlay-signup" data-toggle="modal" class="btn btn-success paper-shadow relative" data-z="1" data-hover-z="2" data-animated>Get Started</a>
                    </div>
                  </div>
                </li>
                <li class="col-md-4 active paper-shadow" data-z="2">
                  <div class="innerAll">
                    <h3 class="text-headline">Learner</h3>
                    <div class="pricing-body">
                      <div class="price">
                        <span class="figure">&dollar;19.99</span>
                        <span class="term">per month</span>
                      </div>
                    </div>
                    <div class="pricing-features">
                      <ul>
                        <li>
                          <strong>Dedicated</strong> Support</li>
                        <li>
                          <strong>10 Courses</strong> per Week</li>
                        <li>
                          <strong>Weekly</strong> Digests</li>
                        <li>
                          <strong>Practice Live</strong> System</li>
                        <li>
                          <strong>Members-only</strong> Forums</li>
                      </ul>
                    </div>
                    <div class="pricing-footer">
                      <a href="#modal-overlay-signup" data-toggle="modal" class="btn btn-success btn-lg paper-shadow relative" data-z="1" data-hover-z="2" data-animated>Get Started</a>
                    </div>
                  </div>
                </li>
                <li class="col-md-4 overlay-bg-white-strong paper-shadow" data-z="1">
                  <div class="innerAll">
                    <h3 class="text-headline">Master</h3>
                    <div class="pricing-body">
                      <div class="price">
                        <span class="figure">&dollar;49</span>
                        <span class="term">per month</span>
                      </div>
                    </div>
                    <div class="pricing-features">
                      <ul>
                        <li>
                          <strong>Premium</strong> Support</li>
                        <li>
                          <strong>All Courses</strong> Anytime</li>
                        <li>
                          <strong>Daily</strong> Digests</li>
                        <li>
                          <strong>Practice Live</strong> System</li>
                        <li>
                          <strong>Members-only</strong> Forums</li>
                      </ul>
                    </div>
                    <div class="pricing-footer">
                      <a href="#modal-overlay-signup" data-toggle="modal" class="btn btn-success paper-shadow relative" data-z="1" data-hover-z="2" data-animated>Get Started</a>
                    </div>
                  </div>
                </li>
              </ul>
            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="modal grow modal-overlay modal-backdrop-body fade" id="modal-overlay-signup">
      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      <div class="modal-dialog">
        <div class="v-cell">
          <div class="modal-content">
            <div class="modal-body">

              <div class="wizard-container wizard-1" id="wizard-demo-1">
                <div data-scrollable-h>
                  <ul class="wiz-progress">
                    <li class="active">Plan &amp; Payment</li>
                    <li>Account Setup</li>
                    <li>Personal Details</li>
                  </ul>
                </div>
                <form action="#" data-toggle="wizard" class="max-width-400 h-center">

                  <fieldset class="step relative paper-shadow form-horizontal" data-z="2">
                    <div class="page-section-heading">
                      <h2 class="text-h3 margin-v-0">Payment</h2>
                      <h3 class="text-h4 margin-v-10 text-grey-400">Your plan is
                        <strong class="text-uppercase">learner</strong> for
                        <strong>&dollar;19.99/mo</strong>
                      </h3>
                      <a href="pricing.html">See pricing</a>
                    </div>
                    <hr/>
                    <div class="form-group">
                      <label for="credit-card" class="col-xs-4 control-label">Credit Card</label>
                      <div class="col-xs-8">
                        <div class="form-control-material">
                          <input type="text" class="form-control" id="credit-card" placeholder="**** **** **** 2422">
                          <label for="credit-card">Credit Card</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="card-expiration" class="col-xs-4 control-label">Expiration:</label>
                      <div class="col-xs-8">
                        <select id="card-expiration" data-toggle="select2">
                          <option value="1" selected>January</option>
                          <option value="2">February</option>
                          <option value="3">March</option>
                          <option value="4">April</option>
                          <option value="5">May</option>
                          <option value="6">June</option>
                          <option value="7">July</option>
                          <option value="8">August</option>
                          <option value="9">September</option>
                          <option value="10">October</option>
                          <option value="11">November</option>
                          <option value="12">December</option>
                        </select>
                        <select data-toggle="select2">
                          <option value="2015" selected>2015</option>
                          <option value="2016">2016</option>
                          <option value="2017">2017</option>
                          <option value="2018">2018</option>
                          <option value="2019">2019</option>
                          <option value="2020">2020</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="cvv" class="col-xs-4 control-label">CVV</label>
                      <div class="col-xs-8">
                        <div class="form-control-material">
                          <input type="email" class="form-control" id="cvv" placeholder="123">
                          <label for="cvv">CVV</label>
                        </div>
                      </div>
                    </div>
                    <div class="text-right">
                      <button type="button" class="wiz-next btn btn-primary">Next</button>
                    </div>
                  </fieldset>

                  <fieldset class="step relative paper-shadow" data-z="2">
                    <div class="page-section-heading">
                      <h2 class="text-h3 margin-v-0">Create your account</h2>
                      <h3 class="text-h4 margin-v-10 text-grey-400">This is a multi step form</h3>
                    </div>
                    <div class="form-group form-control-material">
                      <input class="form-control" type="text" id="wiz-email" placeholder="Email" />
                      <label for="wiz-email">Email:</label>
                    </div>
                    <div class="form-group form-control-material">
                      <input class="form-control" type="password" id="wiz-password" placeholder="Password" />
                      <label for="wiz-password">Password:</label>
                    </div>
                    <div class="form-group form-control-material">
                      <input class="form-control" type="password" id="wiz-password2" placeholder="Confirm Password" />
                      <label for="wiz-password2">Confirm Password:</label>
                    </div>
                    <div class="row">
                      <div class="col-xs-6">
                        <button type="button" class="wiz-prev btn btn-default">Previous</button>
                      </div>
                      <div class="col-xs-6 text-right">
                        <button type="button" class="wiz-next btn btn-primary">Next</button>
                      </div>
                    </div>
                  </fieldset>

                  <fieldset class="step relative paper-shadow" data-z="2">
                    <div class="page-section-heading">
                      <h2 class="text-h3 margin-v-0">Personal Details</h2>
                      <h3 class="text-h4 margin-v-10 text-grey-400">Your personal details are safe with us</h3>
                    </div>
                    <div class="form-group form-control-material">
                      <input class="form-control" type="text" id="wiz-fname" placeholder="First name" />
                      <label for="wiz-fname">First name:</label>
                    </div>
                    <div class="form-group form-control-material">
                      <input class="form-control" type="tel" id="wiz-lname" placeholder="Last name" />
                      <label for="wiz-lname">Last name:</label>
                    </div>
                    <div class="form-group form-control-material">
                      <input class="form-control" type="text" id="wiz-phone" placeholder="Phone" />
                      <label for="wiz-phone">Phone:</label>
                    </div>
                    <div class="form-group form-control-material">
                      <textarea rows="5" class="form-control" id="wiz-address" placeholder="Your address"></textarea>
                      <label for="wiz-address">Address:</label>
                    </div>
                    <div class="row">
                      <div class="col-xs-6">
                        <button type="button" class="wiz-prev btn btn-default">Previous</button>
                      </div>
                      <div class="col-xs-6 text-right">
                        <button type="button" class="wiz-step btn btn-primary" data-target="0">Submit</button>
                      </div>
                    </div>
                  </fieldset>

                </form>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="footer-section">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-3">
            <h4 class="text-headline text-light">Corporate</h4>
            <ul class="list-unstyled">
              <li><a href="#">About the company</a></li>
              <li><a href="#">Company offices</a></li>
              <li><a href="#">Partners</a></li>
              <li><a href="#">Terms of use</a></li>
              <li><a href="#">Privacy</a></li>
              <li><a href="#">Contact us</a></li>
            </ul>
          </div>
          <div class="col-sm-6 col-md-3">
            <h4 class="text-headline text-light">Explore</h4>
            <ul class="list-unstyled">
              <li><a href="">Courses</a></li>
              <li><a href="">Tutors</a></li>
              <li><a href="">Pricing</a></li>
              <li><a href="">Become Tutor</a></li>
              <li><a href="">Sign Up</a></li>
            </ul>
          </div>
          <div class="col-xs-12 col-md-6">
            <h4 class="text-headline text-light">Newsletter</h4>

            <div class="form-group">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Enter email here...">
                <span class="input-group-btn">
								<button class="btn btn-grey-800" type="button">Subscribe</button>
							  </span>
              </div>
            </div>
            <br/>
            <p>
              <a href="#" class="btn btn-indigo-500 btn-circle"><i class="fa fa-facebook"></i></a>
              <a href="#" class="btn btn-pink-500 btn-circle"><i class="fa fa-dribbble"></i></a>
              <a href="#" class="btn btn-blue-500 btn-circle"><i class="fa fa-twitter"></i></a>
              <a href="#" class="btn btn-danger btn-circle"><i class="fa fa-google-plus"></i></a>
            </p>

             <p class="text-subhead">
                &copy; <?php echo date('Y');?> Poda Learning App
            </p>

          </div>
        </div>
      </div>
  </div>
  </section>
  </div>
        <!-- Footer -->
        <footer class="footer">
            <strong>Poda Learning App</strong> v1.1.0 &copy; Copyright <?php echo date('Y');?>
        </footer>
        <!-- // Footer -->

        <!-- Inline Script for colors and config objects; used by various external scripts; -->
        <script>
            var colors = {
                "danger-color": "#e74c3c",
                "success-color": "#81b53e",
                "warning-color": "#f0ad4e",
                "inverse-color": "#2c3e50",
                "info-color": "#2d7cb5",
                "default-color": "#6e7882",
                "default-light-color": "#cfd9db",
                "purple-color": "#9D8AC7",
                "mustard-color": "#d4d171",
                "lightred-color": "#e15258",
                "body-bg": "#f6f6f6"
            };
            var config = {
                theme: "html",
                skins: {
                    "default": {
                        "primary-color": "#42a5f5"
                    }
                }
            };
        </script>

        <script src="<?php echo base_url('assets/js/vendor/all.js');?>"></script>
        <script src="<?php echo base_url('assets/js/app/app.js');?>"></script>
    </body>
</html>