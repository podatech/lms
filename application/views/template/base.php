<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?><!DOCTYPE html>
<html class="st-layout ls-top-navbar-large ls-bottom-footer show-sidebar sidebar-l3" lang="en">
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
    	<?php $this->load->view($content);?>

        <!-- Start Footer -->
        <footer class="footer">
            <strong>Poda App</strong> v1.1.0 &copy; Copyright <?php echo date('Y');?>
        </footer>
        <!-- End Footer -->

  </div>
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