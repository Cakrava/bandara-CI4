
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Mehivra - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="<?=base_url()?>/assetshori/images/favicon.ico">

        <link href="<?=base_url()?>/assetshori/plugins/morris/morris.css" rel="stylesheet">

        <link href="<?=base_url()?>/assetshori/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?=base_url()?>/assetshori/css/icons.css" rel="stylesheet" type="text/css">
        <link href="<?=base_url()?>/assetshori/css/style.css" rel="stylesheet" type="text/css">




        <script src="<?=base_url()?>/assetshori/js/jquery.min.js"></script>
        <script src="<?=base_url()?>/assetshori/js/popper.min.js"></script>
        <script src="<?=base_url()?>/assetshori/js/bootstrap.min.js"></script>
        <script src="<?=base_url()?>/assetshori/js/modernizr.min.js"></script>
        <script src="<?=base_url()?>/assetshori/js/waves.js"></script>
        <script src="<?=base_url()?>/assetshori/js/jquery.slimscroll.js"></script>
        <script src="<?=base_url()?>/assetshori/js/jquery.nicescroll.js"></script>
        <script src="<?=base_url()?>/assetshori/js/jquery.scrollTo.min.js"></script>

        <script src="<?=base_url()?>/assetshori/plugins/skycons/skycons.min.js"></script>
        <script src="<?=base_url()?>/assetshori/plugins/raphael/raphael-min.js"></script>
        <script src="<?=base_url()?>/assetshori/plugins/morris/morris.min.js"></script>
        
        <script src="<?=base_url()?>/assetshori/pages/dashborad.js"></script>

    </head>


    <body>

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container-fluid">

                    <!-- Logo container-->
                    <div class="logo">
                        <!-- Text Logo -->
                        <!--<a href="index.html" class="logo">-->
                        <!--Annex-->
                        <!--</a>-->
                        <!-- Image Logo -->
                        <a href="index.html" class="logo">
                            <img src="<?=base_url()?>/assetshori/images/logo-sm.png" alt="" height="22" class="logo-small">
                            <img src="<?=base_url()?>/assetshori/images/logo.png" alt="" height="16" class="logo-large">
                        </a>

                    </div>
                    <!-- End Logo container-->


                    <div class="menu-extras topbar-custom">

                        <ul class="list-inline float-right mb-0">
                            
                            <!-- language-->
                            <li class="list-inline-item dropdown notification-list hide-phone">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                    aria-haspopup="false" aria-expanded="false">
                                    English <img src="<?=base_url()?>/assetshori/images/flags/us_flag.jpg" class="ml-2" height="16" alt=""/>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right language-switch">
                                    <a class="dropdown-item" href="#"><img src="<?=base_url()?>/assetshori/images/flags/italy_flag.jpg" alt="" height="16"/><span> Italian </span></a>
                                    <a class="dropdown-item" href="#"><img src="<?=base_url()?>/assetshori/images/flags/french_flag.jpg" alt="" height="16"/><span> French </span></a>
                                    <a class="dropdown-item" href="#"><img src="<?=base_url()?>/assetshori/images/flags/spain_flag.jpg" alt="" height="16"/><span> Spanish </span></a>
                                    <a class="dropdown-item" href="#"><img src="<?=base_url()?>/assetshori/images/flags/russia_flag.jpg" alt="" height="16"/><span> Russian </span></a>
                                </div>
                            </li>

                            <!-- notification-->
                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <i class="mdi mdi-bell-outline noti-icon"></i>
                                    <span class="badge badge-success noti-icon-badge">21</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5>Notification (3)</h5>
                                    </div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                        <p class="notify-details"><b>Your order is placed</b><small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-warning"><i class="mdi mdi-message"></i></div>
                                        <p class="notify-details"><b>New Message received</b><small class="text-muted">You have 87 unread messages</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-info"><i class="mdi mdi-martini"></i></div>
                                        <p class="notify-details"><b>Your item is shipped</b><small class="text-muted">It is a long established fact that a reader will</small></p>
                                    </a>

                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        View All
                                    </a>

                                </div>
                            </li>
                            <!-- User-->
                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <img src="<?=base_url()?>/assetshori/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5>Welcome</h5>
                                    </div>
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-wallet m-r-5 text-muted"></i> My Wallet</a>
                                    <a class="dropdown-item" href="#"><span class="badge badge-success float-right">5</span><i class="mdi mdi-settings m-r-5 text-muted"></i> Settings</a>
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline m-r-5 text-muted"></i> Lock screen</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                                </div>
                            </li>
                            <li class="menu-item list-inline-item">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>

                        </ul>
                    </div>
                    <!-- end menu-extras -->

                    <div class="clearfix"></div>

                </div> <!-- end container -->
            </div>
            <!-- end topbar-main -->

            <!-- MENU Start -->
            <div class="navbar-custom">
                <div class="container-fluid">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                <?=$this->renderSection('menu')?>

                       
                        <!-- End navigation menu -->
                    </div> <!-- end #navigation -->
                </div> <!-- end container -->
            </div> <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->


        <div class="wrapper">
            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group pull-right">
                              
                         
                    </div>
                </div>
                <!-- end page title end breadcrumb -->



                <?=$this->renderSection('isihome')?>
                

        <!-- Footer -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                    Computer Mehivra Official Web
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->


        <!-- jQuery  -->
      
        <!-- App js -->
        <script src="<?=base_url()?>/assetshori/js/app.js"></script>
        <script>
            /* BEGIN SVG WEATHER ICON */
            if (typeof Skycons !== 'undefined'){
           var icons = new Skycons(
               {"color": "#fff"},
               {"resizeClear": true}
               ),
                   list  = [
                       "clear-day", "clear-night", "partly-cloudy-day",
                       "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                       "fog"
                   ],
                   i;

               for(i = list.length; i--; )
               icons.set(list[i], list[i]);
               icons.play();
           };

       // scroll

       $(document).ready(function() {
       
       $("#boxscroll").niceScroll({cursorborder:"",cursorcolor:"#cecece",boxzoom:true});
       $("#boxscroll2").niceScroll({cursorborder:"",cursorcolor:"#cecece",boxzoom:true}); 
       
       });
       </script>



    </body>
</html>