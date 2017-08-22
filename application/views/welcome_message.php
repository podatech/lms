<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?><!DOCTYPE html>
<html class="transition-navbar-scroll top-navbar-xlarge bottom-footer" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="" />
		<meta name="author" content="" />

		<title>Poda Learning</title>

		<link href="<?php echo base_url('assets/css/vendor/all.css');?>" rel="stylesheet" />
		<link href="<?php echo base_url('assets/css/app/app.css');?>" rel="stylesheet" />
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
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 98.55 13.23" height="100%" width="100%" preserveAspectRatio="xMidYMid meet">
							<title>Logo Poda</title>
							<path d="M12,29.53a3.93,3.93,0,0,1-1.3,3.17A5.54,5.54,0,0,1,7,33.8H5.84v4.57H3.12V25.53h4.1a5.46,5.46,0,0,1,3.56,1A3.67,3.67,0,0,1,12,29.53Zm-6.15,2h.9a3,3,0,0,0,1.88-.5,1.74,1.74,0,0,0,.62-1.45,1.78,1.78,0,0,0-.52-1.42,2.45,2.45,0,0,0-1.64-.46H5.84Z" transform="translate(-3.12 -25.32)" style="fill:#57a0d7"/>
							<path d="M26.08,31.93a7,7,0,0,1-1.58,4.9A5.86,5.86,0,0,1,20,38.55a5.86,5.86,0,0,1-4.54-1.71,7,7,0,0,1-1.58-4.92A6.9,6.9,0,0,1,15.44,27,5.93,5.93,0,0,1,20,25.32,5.85,5.85,0,0,1,24.51,27,7,7,0,0,1,26.08,31.93Zm-9.38,0a5.37,5.37,0,0,0,.82,3.24A2.86,2.86,0,0,0,20,36.27q3.26,0,3.26-4.33T20,27.59a2.88,2.88,0,0,0-2.45,1.09A5.34,5.34,0,0,0,16.71,31.93Z" transform="translate(-3.12 -25.32)" style="fill:#57a0d7"/>
							<path d="M39.41,31.83a6.33,6.33,0,0,1-1.81,4.86,7.37,7.37,0,0,1-5.22,1.69H28.75V25.53h4a6.79,6.79,0,0,1,4.89,1.66A6.11,6.11,0,0,1,39.41,31.83Zm-2.83.07q0-4.14-3.66-4.14H31.47v8.37h1.17Q36.58,36.13,36.58,31.9Z" transform="translate(-3.12 -25.32)" style="fill:#57a0d7"/>
							<path d="M49.94,38.38,49,35.32H44.32l-.93,3.06H40.45L45,25.47h3.33l4.55,12.9ZM48.35,33q-1.29-4.16-1.45-4.7c-.11-.36-.19-.65-.23-.86Q46.38,28.59,45,33Z" transform="translate(-3.12 -25.32)" style="fill:#57a0d7"/>
							<path d="M64.12,38.38H61.4V27.79H57.91V25.53h9.7v2.27H64.12Z" transform="translate(-3.12 -25.32)" style="fill:#57a0d7"/>
							<path d="M77,38.38h-7.4V25.53H77v2.23H72.31v2.82h4.35v2.23H72.31v3.31H77Z" transform="translate(-3.12 -25.32)" style="fill:#57a0d7"/>
							<path d="M85.13,27.61a2.78,2.78,0,0,0-2.38,1.16A5.38,5.38,0,0,0,81.9,32q0,4.3,3.23,4.3a10.2,10.2,0,0,0,3.28-.68v2.29a9.1,9.1,0,0,1-3.53.66,5.39,5.39,0,0,1-4.29-1.7A7.2,7.2,0,0,1,79.1,32a8,8,0,0,1,.73-3.51,5.27,5.27,0,0,1,2.1-2.31,6.2,6.2,0,0,1,3.2-.8,8.65,8.65,0,0,1,3.76.91L88,28.46a14.55,14.55,0,0,0-1.45-.6A4.33,4.33,0,0,0,85.13,27.61Z" transform="translate(-3.12 -25.32)" style="fill:#57a0d7"/>
							<path d="M101.67,38.38H99V32.83H93.86v5.55H91.14V25.53h2.72v5H99v-5h2.72Z" transform="translate(-3.12 -25.32)" style="fill:#57a0d7"/>
						</svg>
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

  <div class="parallax cover overlay cover-image-full home">
    <img class="parallax-layer" src="<?php echo base_url('assets/images/photodune-4161018-group-of-students-m.jpg')?>" alt="Learning Cover" />
    <div class="parallax-layer overlay overlay-full overlay-bg-white bg-transparent" data-speed="8" data-opacity="true">
      <div class="v-center">
        <div class="page-section overlay-bg-white-strong relative paper-shadow" data-z="1">
          <h1 class="text-display-2 margin-v-0-15 display-inline-block">Technical Week, Meet &amp; Tour</h1>
          <p class="text-subhead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur consectetur consequatur distinctio earum ipsam.</p>
          <a class="btn btn-green-500 btn-lg paper-shadow" data-hover-z="2" data-animated data-toggle="modal" href="#modal-overlay-signup">Sign Up - Only Rp. 250.000,-</a>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="page-section-heading">
      <h2 class="text-display-1">Features</h2>
      <p class="lead text-muted">Learn about all of the features we offer.</p>
    </div>
    <div class="row" data-toggle="gridalicious">

      <div class="media">
        <div class="media-left padding-none">
          <div class="bg-green-300 text-white">
            <div class="panel-body">
              <i class="fa fa-film fa-2x fa-fw"></i>
            </div>
          </div>
        </div>
        <div class="media-body">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="text-headline">Techweek Technical</div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur aut culpa fugiat iusto, molestias nemo nostrum quia rerum temporibus voluptatum.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="media">
        <div class="media-left padding-none">
          <div class="bg-purple-300 text-white">
            <div class="panel-body">
              <i class="fa fa-life-bouy fa-2x fa-fw"></i>
            </div>
          </div>
        </div>
        <div class="media-body">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="text-headline">Techweek Nontechnical</div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur aut culpa fugiat iusto, molestias nemo nostrum quia rerum temporibus voluptatum.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="media">
        <div class="media-left padding-none">
          <div class="bg-orange-400 text-white">
            <div class="panel-body">
              <i class="fa fa-user fa-2x fa-fw"></i>
            </div>
          </div>
        </div>
        <div class="media-body">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="text-headline">Contiunues Techmeet</div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur aut culpa fugiat iusto, molestias nemo nostrum quia rerum temporibus voluptatum.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="media">
        <div class="media-left padding-none">
          <div class="bg-cyan-400 text-white">
            <div class="panel-body">
              <i class="fa fa-code fa-2x fa-fw"></i>
            </div>
          </div>
        </div>
        <div class="media-body">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="text-headline">Once Techmeet</div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur aut culpa fugiat iusto, molestias nemo nostrum quia rerum temporibus voluptatum.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="media">
        <div class="media-left padding-none">
          <div class="bg-pink-400 text-white">
            <div class="panel-body">
              <i class="fa fa-print fa-2x fa-fw"></i>
            </div>
          </div>
        </div>
        <div class="media-body">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="text-headline">Residence Techtour</div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur aut culpa fugiat iusto, molestias nemo nostrum quia rerum temporibus voluptatum.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="media">
        <div class="media-left padding-none">
          <div class="bg-red-400 text-white">
            <div class="panel-body">
              <i class="fa fa-tasks fa-2x fa-fw"></i>
            </div>
          </div>
        </div>
        <div class="media-body">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="text-headline">Other Techtour</div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur aut culpa fugiat iusto, molestias nemo nostrum quia rerum temporibus voluptatum.</p>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
  <br/>

  <div class="page-section bg-white">
    <div class="container">

      <div class="text-center">
        <h3 class="text-display-1">Featured Courses</h3>
        <p class="lead text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      </div>
      <br/>

      <div class="slick-basic slick-slider" data-items="4" data-items-lg="3" data-items-md="2" data-items-sm="1" data-items-xs="1">
        <div class="item">
          <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
            <div class="panel-body">
              <div class="media media-clearfix-xs">
                <div class="media-left">
                  <div class="cover width-90 width-100pc-xs overlay cover-image-full hover">
                    <span class="img icon-block s90 bg-default"></span>
                    <span class="overlay overlay-full padding-none icon-block s90 bg-default">
                        <span class="v-center">
                            <i class="fa fa-github"></i>
                        </span>
                    </span>
                    <a href="website-course.html" class="overlay overlay-full overlay-hover overlay-bg-white">
                      <span class="v-center">
                            <span class="btn btn-circle btn-white btn-lg"><i class="fa fa-graduation-cap"></i></span>
                      </span>
                    </a>
                  </div>
                </div>
                <div class="media-body">
                  <h4 class="media-heading margin-v-5-3"><a href="website-course.html">Github Webhooks for Beginners</a></h4>
                  <p class="small margin-none">
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                    <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
            <div class="panel-body">
              <div class="media media-clearfix-xs">
                <div class="media-left">
                  <div class="cover width-90 width-100pc-xs overlay cover-image-full hover">
                    <span class="img icon-block s90 bg-primary"></span>
                    <span class="overlay overlay-full padding-none icon-block s90 bg-primary">
                        <span class="v-center">
                            <i class="fa fa-css3"></i>
                        </span>
                    </span>
                    <a href="website-course.html" class="overlay overlay-full overlay-hover overlay-bg-white">
                      <span class="v-center">
                            <span class="btn btn-circle btn-primary btn-lg"><i class="fa fa-graduation-cap"></i></span>
                      </span>
                    </a>
                  </div>
                </div>
                <div class="media-body">
                  <h4 class="media-heading margin-v-5-3"><a href="website-course.html">Awesome CSS with LESS Processing</a></h4>
                  <p class="small margin-none">
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                    <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
            <div class="panel-body">
              <div class="media media-clearfix-xs">
                <div class="media-left">
                  <div class="cover width-90 width-100pc-xs overlay cover-image-full hover">
                    <span class="img icon-block s90 bg-lightred"></span>
                    <span class="overlay overlay-full padding-none icon-block s90 bg-lightred">
                        <span class="v-center">
                            <i class="fa fa-windows"></i>
                        </span>
                    </span>
                    <a href="website-course.html" class="overlay overlay-full overlay-hover overlay-bg-white">
                      <span class="v-center">
                            <span class="btn btn-circle btn-red-500 btn-lg"><i class="fa fa-graduation-cap"></i></span>
                      </span>
                    </a>
                  </div>
                </div>
                <div class="media-body">
                  <h4 class="media-heading margin-v-5-3"><a href="website-course.html">Portable Environments with Vagrant</a></h4>
                  <p class="small margin-none">
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                    <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
            <div class="panel-body">
              <div class="media media-clearfix-xs">
                <div class="media-left">
                  <div class="cover width-90 width-100pc-xs overlay cover-image-full hover">
                    <span class="img icon-block s90 bg-brown"></span>
                    <span class="overlay overlay-full padding-none icon-block s90 bg-brown">
                        <span class="v-center">
                            <i class="fa fa-wordpress"></i>
                        </span>
                    </span>
                    <a href="website-course.html" class="overlay overlay-full overlay-hover overlay-bg-white">
                      <span class="v-center">
                            <span class="btn btn-circle btn-orange-500 btn-lg"><i class="fa fa-graduation-cap"></i></span>
                      </span>
                    </a>
                  </div>
                </div>
                <div class="media-body">
                  <h4 class="media-heading margin-v-5-3"><a href="website-course.html">WordPress Theme Development</a></h4>
                  <p class="small margin-none">
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                    <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
            <div class="panel-body">
              <div class="media media-clearfix-xs">
                <div class="media-left">
                  <div class="cover width-90 width-100pc-xs overlay cover-image-full hover">
                    <span class="img icon-block s90 bg-purple"></span>
                    <span class="overlay overlay-full padding-none icon-block s90 bg-purple">
                        <span class="v-center">
                            <i class="fa fa-jsfiddle"></i>
                        </span>
                    </span>
                    <a href="website-course.html" class="overlay overlay-full overlay-hover overlay-bg-white">
                      <span class="v-center">
                            <span class="btn btn-circle btn-purple-500 btn-lg"><i class="fa fa-graduation-cap"></i></span>
                      </span>
                    </a>
                  </div>
                </div>
                <div class="media-body">
                  <h4 class="media-heading margin-v-5-3"><a href="website-course.html">Modular JavaScript with Browserify</a></h4>
                  <p class="small margin-none">
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                    <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
            <div class="panel-body">
              <div class="media media-clearfix-xs">
                <div class="media-left">
                  <div class="cover width-90 width-100pc-xs overlay cover-image-full hover">
                    <span class="img icon-block s90 bg-default"></span>
                    <span class="overlay overlay-full padding-none icon-block s90 bg-default">
                        <span class="v-center">
                            <i class="fa fa-cc-visa"></i>
                        </span>
                    </span>
                    <a href="website-course.html" class="overlay overlay-full overlay-hover overlay-bg-white">
                      <span class="v-center">
                            <span class="btn btn-circle btn-white btn-lg"><i class="fa fa-graduation-cap"></i></span>
                      </span>
                    </a>
                  </div>
                </div>
                <div class="media-body">
                  <h4 class="media-heading margin-v-5-3"><a href="website-course.html">Easy Online Payments with Stripe</a></h4>
                  <p class="small margin-none">
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                    <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="text-center">
        <br/>
        <a class="btn btn-lg btn-primary" href="website-directory-grid.html">Browse Courses</a>
      </div>

    </div>
  </div>

  <div class="parallax cover overlay height-300 margin-none">
    <img class="parallax-layer" data-auto-offset="true" data-auto-size="false" src="<?php echo base_url('assets/images/photodune-6745579-modern-creative-man-relaxing-on-workspace-m.jpg')?>" alt="Learning Cover" />
    <div class="parallax-layer overlay overlay-full overlay-bg-white bg-transparent" data-opacity="true" data-speed="8">
      <div class="v-center">
        <div class="page-section">
          <h1 class="text-display-2 overlay-bg-white margin-v-0-15 inline-block">Feedback</h1>
          <br/>
          <p class="lead text-overlay overlay-bg-white-strong inline-block">How others use E-learning to improve their skills</p>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="page-section">
      <div class="row">
        <div class="col-md-4">
          <div class="testimonial">
            <div class="panel panel-default">
              <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet doloremque enim error id, inventore magni odio odit quo tenetur.</p>
              </div>
            </div>
            <div class="media v-middle">
              <div class="media-left">
                <img src="images/people/50/guy-8.jpg" alt="People" class="img-circle width-40" />
              </div>
              <div class="media-body">
                <p class="text-subhead margin-v-5-0">
                  <strong>Adrian D. <span class="text-muted">@ Mosaicpro Inc.</span></strong>
                </p>
                <p class="small">
                  <span class="fa fa-fw fa-star text-yellow-800"></span>
                  <span class="fa fa-fw fa-star text-yellow-800"></span>
                  <span class="fa fa-fw fa-star text-yellow-800"></span>
                  <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                  <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="testimonial">
            <div class="panel panel-default">
              <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet doloremque enim error id, inventore magni odio odit quo tenetur.</p>
              </div>
            </div>
            <div class="media v-middle">
              <div class="media-left">
                <img src="images/people/50/guy-6.jpg" alt="People" class="img-circle width-40" />
              </div>
              <div class="media-body">
                <p class="text-subhead margin-v-5-0">
                  <strong>Adrian D. <span class="text-muted">@ Mosaicpro Inc.</span></strong>
                </p>
                <p class="small">
                  <span class="fa fa-fw fa-star text-yellow-800"></span>
                  <span class="fa fa-fw fa-star text-yellow-800"></span>
                  <span class="fa fa-fw fa-star text-yellow-800"></span>
                  <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                  <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="testimonial">
            <div class="panel panel-default">
              <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet doloremque enim error id, inventore magni odio odit quo tenetur.</p>
              </div>
            </div>
            <div class="media v-middle">
              <div class="media-left">
                <img src="images/people/50/guy-3.jpg" alt="People" class="img-circle width-40" />
              </div>
              <div class="media-body">
                <p class="text-subhead margin-v-5-0">
                  <strong>Adrian D. <span class="text-muted">@ Mosaicpro Inc.</span></strong>
                </p>
                <p class="small">
                  <span class="fa fa-fw fa-star text-yellow-800"></span>
                  <span class="fa fa-fw fa-star text-yellow-800"></span>
                  <span class="fa fa-fw fa-star text-yellow-800"></span>
                  <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                  <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br/>

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