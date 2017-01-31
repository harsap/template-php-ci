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
        <script src="<?php echo base_url(); ?>static/vendor/patternfly-bootstrap-combobox/js/bootstrap-combobox.js"></script>
        <script src="<?php echo base_url(); ?>static/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
        <script src="<?php echo base_url(); ?>static/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
        <script src="<?php echo base_url(); ?>static/vendor/bootstrap-switch/dist/js/bootstrap-switch.min.js"></script>
        <script src="<?php echo base_url(); ?>static/vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script> 
        <script src="<?php echo base_url(); ?>static/vendor/c3/c3.min.js"></script>
        <script src="<?php echo base_url(); ?>static/vendor/d3/d3.min.js"></script>
        <script src="<?php echo base_url(); ?>static/vendor/datatables/media/js/jquery.dataTables.js"></script> 
        <script src="<?php echo base_url(); ?>static/vendor/patternfly/dist/js/patternfly.min.js"></script>  
        <script src="<?php echo base_url(); ?>static/vendor/matchHeight/dist/jquery.matchHeight-min.js"></script> 
    </head> 
    <body>
        <nav class="navbar navbar-pf-vertical">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="/" class="navbar-brand">
                    Aplikasi Open Data
                    <?php /* <img class="navbar-brand-icon" src="/assets/img/logo-alt.svg" alt=""/><img class="navbar-brand-name" src="/assets/img/brand-alt.svg" alt="PatternFly Enterprise Application" /> */ ?>
                </a>
            </div>
            <nav class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#" target="_blank" class="nav-item-iconic nav-item-iconic-new-window"><span title="Launch" class="fa fa-external-link"></span></a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right navbar-iconic">
                    <li class="dropdown">
                        <a class="dropdown-toggle nav-item-iconic" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <span title="Help" class="fa pficon-help"></span>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="#">Help</a></li>
                            <li><a href="#">About</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle nav-item-iconic" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <span title="Username" class="fa pficon-user"></span>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <li><a href="#">Preferences</a></li>
                            <li><a href="#">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </nav> <!--/.navbar-->


        <div class="nav-pf-vertical
             nav-pf-vertical-with-sub-menus  ">
            <ul class="list-group">
                <li class="list-group-item">
                    <a>
                        <span class="fa fa-dashboard" data-toggle="tooltip" title="Dashboard"></span>
                        <span class="list-group-item-value">Dashboard</span>
                    </a>
                </li>
                <li class="list-group-item">
                    <a>
                        <span class="fa fa-shield" data-toggle="tooltip" title="Dolor"></span>
                        <span class="list-group-item-value">Dolor</span>

                    </a>
                </li>
                <li class="list-group-item active secondary-nav-item-pf" data-target="#ipsum-secondary">
                    <a>
                        <span class="fa fa-space-shuttle" data-toggle="tooltip" title="Ipsum"></span>
                        <span class="list-group-item-value">Ipsum</span>
                    </a>

                    <div id="-secondary" class="nav-pf-secondary-nav">
                        <div class="nav-item-pf-header">
                            <a class="secondary-collapse-toggle-pf" data-toggle="collapse-secondary-nav"></a>
                            <span>Ipsum</span>
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item active " data-target="#ipsum-intellegam-tertiary">
                                <a>
                                    <span class="list-group-item-value">Intellegam</span>
                                </a>

                            </li>
                            <li class="list-group-item " data-target="#ipsum-copiosae-tertiary">
                                <a>
                                    <span class="list-group-item-value">Copiosae</span>
                                </a>

                            </li>
                            <li class="list-group-item " data-target="#ipsum-patrioque-tertiary">
                                <a>
                                    <span class="list-group-item-value">Patrioque</span>
                                </a>

                            </li>

                        </ul>
                    </div> 
                </li> 
                <li class="list-group-item">
                    <a>
                        <span class="fa fa-gamepad" data-toggle="tooltip" title="Lorem"></span>
                        <span class="list-group-item-value">Lorem</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="container-fluid container-cards-pf container-pf-nav-pf-vertical  ">
            <?php echo $contents; ?> 
        </div>
        <script>
            $(document).ready(function () {
                $(".row-cards-pf > [class*='col'] > .card-pf .card-pf-title").matchHeight();
                $(".row-cards-pf > [class*='col'] > .card-pf > .card-pf-body").matchHeight();
                $(".row-cards-pf > [class*='col'] > .card-pf > .card-pf-footer").matchHeight();
                $(".row-cards-pf > [class*='col'] > .card-pf").matchHeight();

                // Initialize the vertical navigation
                $().setupVerticalNavigation(true);
            });
        </script>
    </body>
</html>
