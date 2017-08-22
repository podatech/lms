<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?><!DOCTYPE html>
<html class="hide-sidebar ls-bottom-footer" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <title>Poda Learning</title>
        <link rel="shortcut icon" href="<?php echo base_url('assets/favicon.ico');?>"/>

        <link href="<?php echo base_url('assets/css/vendor/all.css');?>" rel="stylesheet" />
        <link href="<?php echo base_url('assets/css/app/app.css');?>" rel="stylesheet" />
    </head>
    <body class="login">
        <div id="content">
            <div class="container-fluid">
                <div class="lock-container">
                    <div class="panel panel-default text-center paper-shadow" data-z="0.5">
                        <h1 class="text-display-1 text-center margin-bottom-none">Sign In</h1>
                        <img src="<?php echo base_url('assets/images/people/110/login.jpg')?>" class="img-circle width-80"/>
                        <?php
                            echo form_open('AuthenticationController/doLogin');
                        ?>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="form-control-material">
                                    <?php
                                        $data = array(
                                            'name'          => 'username',
                                            'id'            => 'username',
                                            'placeholder'   => 'Enter Username',
                                            'maxlength'     => '14',
                                            'autofocus'     => 'true',
                                            'class'         => 'form-control',
                                            'required' => true
                                        );
                                        echo form_input($data);
                                    ?>
                                    <label for="username">Username</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-control-material">
                                    <?php
                                        $data = array(
                                            'name'          => 'password',
                                            'id'            => 'password',
                                            'placeholder'   => 'Enter Password',
                                            'class'         => 'form-control',
                                            'required' => true
                                        );
                                        echo form_password($data);
                                    ?>
                                    <label for="password">Password</label>
                                </div>
                            </div>
                            <?php echo form_submit('login', 'Login', array('class'=>'btn btn-primary'));?>
                            <a href="#" class="forgot-password">Forgot password?</a>
                            <a href="sign-up.html" class="link-text-color">Create account</a>
                        </div>
                      <?php
                          echo form_close();
                      ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Footer -->
        <footer class="footer">
            <strong>Poda App</strong> v1.1.0 &copy; Copyright <?php echo date('Y');?>
        </footer>
        <!-- End Footer -->
  <!-- /st-container -->

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