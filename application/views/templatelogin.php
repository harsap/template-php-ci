<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!--[if IE 9]><html lang="en-us" class="ie9 layout-pf layout-pf-fixed"><![endif]-->
<!--[if gt IE 9]><!-->
<html lang="en-us" class="layout-pf layout-pf-fixed">
    <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Open Data</title>
        <meta name="description" content="open data adalah ">
        <link rel="shortcut icon" href="<?php echo base_url(); ?>static/vendor/patternfly/dist/img/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo base_url(); ?>static/vendor/patternfly/dist/img/apple-touch-icon-precomposed-152.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>static/vendor/patternfly/dist/img/apple-touch-icon-precomposed-144.png">
        <link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php echo base_url(); ?>static/vendor/patternfly/dist/img/apple-touch-icon-precomposed-76.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>static/vendor/patternfly/dist/img/apple-touch-icon-precomposed-72.png">
        <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo base_url(); ?>static/vendor/patternfly/dist/img/apple-touch-icon-precomposed-180.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>static/vendor/patternfly/dist/img/apple-touch-icon-precomposed-114.png">
        <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo base_url(); ?>static/vendor/patternfly/dist/img/apple-touch-icon-precomposed-57.png">
        <link rel="stylesheet" href="<?php echo base_url(); ?>static/vendor/patternfly/dist/css/patternfly.css"> 
        <link rel="stylesheet" href="<?php echo base_url(); ?>static/vendor/patternfly/dist/css/patternfly-additions.min.css"> 
        <link rel="stylesheet" href="<?php echo base_url(); ?>static/custom/css/customs-desain.css"> 
        <script src="<?php echo base_url(); ?>static/vendor/jquery/dist/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>static/vendor/bootstrap/dist/js/bootstrap.min.js"></script> 
        <script src="<?php echo base_url(); ?>static/vendor/patternfly/dist/js/patternfly.min.js"></script>  
    </head> 
    <body>
        <span id="badge">
            <img src="<?php echo base_url(); ?>static/vendor/patternfly/dist/img/logo.svg" alt="PatternFly logo" />
        </span>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="brand">
                        <img src="<?php echo base_url(); ?>static/vendor/patternfly/dist/img/brand.svg" alt="PatternFly Enterprise Application">
                    </div><!--/#brand-->
                </div><!--/.col-*-->
                <div class="col-sm-12 col-md-12 col-lg-12 login">
                    <?php echo $contents; ?> 
                </div>  
            </div><!--/.row-->
        </div><!--/.container--> 
    </body>
</html>
