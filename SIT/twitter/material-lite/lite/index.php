<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Material Pro Admin Template - The Most Complete & Trusted Bootstrap 4 Admin Template</title>
    <!-- Bootstrap Core CSS -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="../assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!--This page css - Morris CSS -->
    <link href="../assets/plugins/c3-master/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	<?php
	if(isset($_POST['submit'])) {
		// reference
		// https://dev.twitter.com/rest/reference

		ini_set('display_errors', 1);
		require_once('TwitterAPIExchange.php');

		$settings = array(
			'oauth_access_token' => "826419127120048132-VFXwjsVc2wuwvjOBKVozuNqgb9FfYDq",
			'oauth_access_token_secret' => "eWyLxNoqHuAgP3Ms5ldmJ5greY7Ftm8LakuS5kwru9GKm",
			'consumer_key' => "taQakKqLaWMd1SJ753gFnCsVC",
			'consumer_secret' => "qGbzzCcY2IlbIruoZ2reEnJBRdprWYdNvckeGnUFKR3EZCDJKc"
		);

		// end point URL for GET
		$url = 'https://api.twitter.com/1.1/search/tweets.json';

		$key = $_POST['search'];

		// methodnya
		$requestMethod = "GET";
		$twitter = new TwitterAPIExchange($settings);
		
		/*-------------SMILE-------------*/
		// kata kunci (parameter)
		$getfield_sm = "?q=".$key." :)";
		$result_sm = $twitter->setGetfield($getfield_sm)
					 ->buildOauth($url, $requestMethod)
					 ->performRequest();
					 
		$output_sm = json_decode($result_sm);
		
		/*-------------SAD-------------*/
		$getfield_sa = "?q=".$key." :(";
		$result_sa = $twitter->setGetfield($getfield_sa)
					 ->buildOauth($url, $requestMethod)
					 ->performRequest();
					 
		$output_sa = json_decode($result_sa);
		
		// header('Content-Type: application/json'); //untuk membuat tampilan menjadi dalam bentuk json
		// print_r($output);
		
		$smile=0;
		$sad=0;
	}
	?>
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            
                            <!-- Light Logo icon -->
                            <img src="../assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                         
                         <!-- Light Logo text -->    
                         <img src="../assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search" method="post" action="">
                                <input name="search" type="text" class="form-control" placeholder="Search & enter"><a class="srh-btn" name="submit"><input type="hidden" name="submit" type="submit" ><i class="ti-close"></i></a></form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/users/1.jpg" alt="user" class="profile-pic m-r-10" />Abdurrahman</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="waves-effect waves-dark" href="index.php" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <!-- Bottom points-->
            <div class="sidebar-footer">
                <!-- item--><a href="" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
                <!-- item--><a href="" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
                <!-- item--><a href="" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a> </div>
            <!-- End Bottom points-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor">Dashboard</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <!---------------CONTENT---------------->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#smile" role="tab">Smile</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#sad" role="tab">Sad</a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="smile" role="tabpanel">
                                    <div class="card-block">
                                        <div class="profiletimeline">
											<?php 
												if(isset($_POST['submit'])) {
													foreach ($output_sm->statuses as $tweet) {	
											?>
                                            <div class="sl-item">
                                                <div class="sl-left"> <img src="<?php echo $tweet->user->profile_image_url;  ?>" alt="user" class="img-circle"> </div>
                                                <div class="sl-right">
                                                    <div><a href="https://twitter.com/<?php echo $tweet->user->screen_name; ?>" class="link"><?php echo $tweet->user->name; ?></a> <span class="sl-date">@<?php echo $tweet->user->screen_name; ?></span>
                                                        <p class="m-t-10"> <?php echo $tweet->text; ?> </p>
                                                    </div>
                                                    <div class="like-comm m-t-20"> <span style="padding-right: 5px;"> <a href="javascript:void(0)" class="link m-r-10"><?php echo date('H:i, M d', strtotime($tweet->created_at)); ?></span></a> <a class="link m-r-10"><i class="fa fa-twitter text-success"></i> <?php echo $tweet->retweet_count; ?> Tweet</a> </div>
                                                </div>
                                            </div>
                                            <hr />
											<?php $smile++; 
													} 
												}
											?>
                                        </div>
                                    </div>
                                </div>
                                <!--second tab-->
								<div class="tab-pane" id="sad" role="tabpanel">
                                    <div class="card-block">
                                        <div class="profiletimeline">
											<?php 
												if(isset($_POST['submit'])) {
													foreach ($output_sa->statuses as $tweet) {
											?>
                                            <div class="sl-item">
                                                <div class="sl-left"> <img src="<?php echo $tweet->user->profile_image_url;  ?>" alt="user" class="img-circle"> </div>
                                                <div class="sl-right">
                                                    <div><a href="https://twitter.com/<?php echo $tweet->user->screen_name; ?>" class="link"><?php echo $tweet->user->name; ?></a> <span class="sl-date">@<?php echo $tweet->user->screen_name; ?></span>
                                                        <p class="m-t-10"> <?php echo $tweet->text; ?> </p>
                                                    </div>
                                                    <div class="like-comm m-t-20"> <a href="javascript:void(0)" class="link m-r-10"><span style="padding-right: 5px;"><?php echo date('H:i, M d', strtotime($tweet->created_at)); ?></span></a> <a class="link m-r-10"><i class="fa fa-twitter text-success"></i> <?php echo $tweet->retweet_count; ?> Tweet</a> </div>
                                                </div>
                                            </div>
											<hr />
											<?php $sad++; 
													}
												}
											?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					<!--------------DIAGRAM--------------->
                    <div class="col-lg-4 col-md-5">
                        <div class="card">
                            <div class="card-block">
                                <h3 class="card-title">Sentiment </h3>
                                <h6 class="card-subtitle">Beetween Smile and Sad</h6>
                                <div id="visitor" style="height:290px; width:100%;"></div>
								<div class="chartdiv"></div>
                            </div>
                            <div>
                                <hr class="m-t-0 m-b-0">
                            </div>
                            <div class="card-block text-center ">
                                <ul class="list-inline m-b-0">
                                    <li>
                                        <h6 class="text-muted text-info"><i class="fa fa-circle font-10 m-r-10 "></i>Smile</h6> </li>
                                    <li>
                                        <h6 class="text-muted text-primary"><i class="fa fa-circle font-10 m-r-10"></i>Sad</h6> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <div class="row">
					
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer"> © 2017 Material Pro Admin by wrappixel.com </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/plugins/bootstrap/js/tether.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <script src="../assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!--c3 JavaScript -->
    <script src="../assets/plugins/d3/d3.min.js"></script>
    <script src="../assets/plugins/c3-master/c3.min.js"></script>
    <!-- Chart JS -->
    <script type="text/javascript">
		var chart = c3.generate({
        bindto: '#visitor',
        data: {
            columns: [
                ['Smile', <?php echo $smile; ?>],
                ['Sad', <?php echo $sad; ?>],
            ],

            type: 'donut',
            onclick: function(d, i) { console.log("onclick", d, i); },
            onmouseover: function(d, i) { console.log("onmouseover", d, i); },
            onmouseout: function(d, i) { console.log("onmouseout", d, i); }
        },
        donut: {
            label: {
                show: false
            },
            title: "Sentiment",
            width: 20,

        },

        legend: {
            hide: true
                //or hide: 'data1'
                //or hide: ['data1', 'data2']
        },
        color: {
            pattern: ['#745af2', '#eceff1']
			// #eceff1: Abu-abu
			// #745af2: Ungu
			// ##26c6da: Biru Muda
			// #1e88e5: Biru Tua
        }
    });
	</script>
	
   
</body>

</html>
