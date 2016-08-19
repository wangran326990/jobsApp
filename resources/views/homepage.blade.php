<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Creative - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="css/jquery.nouislider.css" rel="stylesheet">

	<!-- Theme CSS -->
	<link href="{{ URL::asset('css/creative.min.css') }}" rel="stylesheet">

	<!-- Customized Theme By Ran-->
	<link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Job Seeking</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#">Indeed</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#">Monsters</a>
                    </li>
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">Your Favorite Job Seeking Website</h1>
                <hr>
                <p>Start Bootstrap can help you build better websites using the Bootstrap CSS framework! Just download your template and start going, no strings attached!</p>
                <a href="#about" class="btn btn-primary btn-xl page-scroll">SEARCH JOBS</a>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
        	<h2 class="searching-job-header text-center">Searching For Jobs</h2>
        	<form  role="form">
        		<div class="col-sm-6">
					<div class="div-inline">
						<label class="label-customized">Keywords: </label>
						<div class="inline-textbox">
							<span><i class="fa fa-search"></i></span>
							<input type="text" placeholder="Search for Jobs" class="customized-textbox">
						</div>
					</div>	
				</div>
				<div class="col-sm-6">
					<div class="div-inline location">
						<label class="label-customized">Location: </label>
						<div class="inline-textbox">
							<div>
								<span><i class="fa fa-location-arrow"></i></span>	
								<input type="text" placeholder="Location" class="customized-textbox" id="location">
							</div>	
						</div>
					</div>
					
					<div class="div-inline livesearch">
						<div id="hint">
						
						</div>
					</div>
						
				</div>			
        	</form>
        </div>
    </section>

    <section class="jobs">
    	<div class="container">		
    		<div class="row">
    			<div class="col-sm-8">		
					<!-- Job offer 1 -->
					<a href="#" class="featured applied">
						<div class="row">
							<div class="col-md-1 hidden-sm hidden-xs">
								<img src="img/jobsengine/Indeed-Jobs-App.png" alt="" class="img-responsive">
							</div>
							<div class="col-lg-5 col-md-5 col-sm-7 col-xs-12 job-title">
								<h5>Web Designer</h5>
								<p><strong>Amazon Inc.</strong> Company slogan goes here</p>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-5 col-xs-12 job-location">
								<p><strong>New York City, NY, USA</strong></p>
								<p class="hidden-xs">126.3 miles away</p>
							</div>
							<div class="col-lg-2 col-md-2 hidden-sm hidden-xs job-type text-center">
								<p class="job-salary"><strong>$128,000</strong></p>
								<p class="badge full-time">Full time</p>
							</div>
						</div>
					</a>

					<a href="#" class="featured applied">
						<div class="row">
							<div class="col-md-1 hidden-sm hidden-xs">
								<img src="img/jobsengine/Indeed-Jobs-App.png" alt="" class="img-responsive">
							</div>
							<div class="col-lg-5 col-md-5 col-sm-7 col-xs-12 job-title">
								<h5>Web Designer</h5>
								<p><strong>Amazon Inc.</strong> Company slogan goes here</p>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-5 col-xs-12 job-location">
								<p><strong>New York City, NY, USA</strong></p>
								<p class="hidden-xs">126.3 miles away</p>
							</div>
							<div class="col-lg-2 col-md-2 hidden-sm hidden-xs job-type text-center">
								<p class="job-salary"><strong>$128,000</strong></p>
								<p class="badge full-time">Full time</p>
							</div>
						</div>
					</a>

					<a href="#" class="featured applied">
						<div class="row">
							<div class="col-md-1 hidden-sm hidden-xs">
								<img src="img/jobsengine/Indeed-Jobs-App.png" alt="" class="img-responsive">
							</div>
							<div class="col-lg-5 col-md-5 col-sm-7 col-xs-12 job-title">
								<h5>Web Designer</h5>
								<p><strong>Amazon Inc.</strong> Company slogan goes here</p>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-5 col-xs-12 job-location">
								<p><strong>New York City, NY, USA</strong></p>
								<p class="hidden-xs">126.3 miles away</p>
							</div>
							<div class="col-lg-2 col-md-2 hidden-sm hidden-xs job-type text-center">
								<p class="job-salary"><strong>$128,000</strong></p>
								<p class="badge full-time">Full time</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-sm-4" id="sidebar">
					<div class="sidebar-widget">
						<h2>Featured Jobs</h2>
						<span class='br'></span>
						<a href="#">
							<img src="img/jobsengine/logo-amazon.jpg" alt="Featured Job" class="img-responsive">
							<div class="featured-job">
								<div class="title">
									<h5>Web Designer</h5>
									<p>Amazon</p>
								</div>
								<div class="data">
									<span class="city"><i class="fa fa-map-marker"></i>New York City</span>
									<span class="type full-time"><i class="fa fa-clock-o"></i>Full Time</span>
									<span class="sallary"><i class="fa fa-dollar"></i>45,000</span>
								</div>
								<div class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tristique euismod lorem, a consequat orci consequat a. Donec ullamcorper tincidunt nunc, ut aliquam est pellentesque porta. In neque erat, malesuada sit amet orci ac, laoreet laoreet mauris.</div>
							</div>
						</a>
					</div>
					<div class="sidebar-widget" id="jobsearch">
								<h2>Find a Job</h2>
								<span class='br'></span>
								<form>
									<div class="row">
										<div class="col-xs-12">
											<div class="form-group" id="job-search-group">
												<label for="job-search" class="sr-only">Search</label>
												<input type="text" class="form-control" id="job-search" placeholder="Type and press enter">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12">
											
										</div>
									</div>
									<div class="row">
										<div class="col-xs-6">
											<h5>Career Level</h5>
											<div class="checkbox">
												<label>
													<input type="checkbox"> All Types
												</label>
											</div>
											<div class="checkbox">
												<label>
													<input type="checkbox"> Junior
												</label>
											</div>
											<div class="checkbox">
												<label>
													<input type="checkbox"> Middle
												</label>
											</div>
											<div class="checkbox">
												<label>
													<input type="checkbox"> Senior
												</label>
											</div>
											<div class="checkbox">
												<label>
													<input type="checkbox"> Expert
												</label>
											</div>
										</div>
										<div class="col-xs-6">
											<h5>Presence</h5>
											<div class="checkbox">
												<label>
													<input type="checkbox"> All Types
												</label>
											</div>
											<div class="checkbox">
												<label>
													<input type="checkbox"> Remote
												</label>
											</div>
											<div class="checkbox">
												<label>
													<input type="checkbox"> Office
												</label>
											</div>
											<div class="checkbox">
												<label>
													<input type="checkbox"> Relocation
												</label>
											</div>
											<div class="checkbox">
												<label>
													<input type="checkbox"> Travel a lot
												</label>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<hr>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-6">
											<h5>Job Type</h5>
											<div class="checkbox">
												<label>
													<input type="checkbox"> All Types
												</label>
											</div>
											<div class="checkbox">
												<label>
													<input type="checkbox"> Freelance
												</label>
											</div>
											<div class="checkbox">
												<label>
													<input type="checkbox"> Part Time
												</label>
											</div>
											<div class="checkbox">
												<label>
													<input type="checkbox"> Full Time
												</label>
											</div>
											<div class="checkbox">
												<label>
													<input type="checkbox"> Internship
												</label>
											</div>
											<div class="checkbox">
												<label>
													<input type="checkbox"> Volunteer
												</label>
											</div>
										</div>
										<div class="col-xs-6">
											<h5>Location</h5>
											<div class="checkbox">
												<label>
													<input type="checkbox"> All Types
												</label>
											</div>
											<div class="checkbox">
												<label>
													<input type="checkbox"> New York
												</label>
											</div>
											<div class="checkbox">
												<label>
													<input type="checkbox"> Los Angeles
												</label>
											</div>
											<div class="checkbox">
												<label>
													<input type="checkbox"> San Francisco
												</label>
											</div>
											<div class="checkbox">
												<label>
													<input type="checkbox"> Chicago
												</label>
											</div>
											<div class="checkbox">
												<label>
													<input type="checkbox"> Boston
												</label>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<hr>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<h5>Experience</h5>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-6">
											<p>More than <b><span id="years-field">3</span></b> years</p>
										</div>
										<div class="col-xs-6">
											<div id="years"></div>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<hr>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<h5>Salary</h5>
											<div id="salary"></div>
											<p>From <b><span id="salary-field-lower">$38.000</span></b> to  <b><span id="salary-field-upper">$78.000</span></b></p>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<hr>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<a class="btn btn-primary">Reset All Filters</a>
										</div>
									</div>
								</form>
					</div>
				</div>	
			</div>			
		</div>
   
   																		
    </section>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Let's Get In Touch!</h2>
                    <hr class="primary">
                    <p>Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x sr-contact"></i>
                    <p>123-456-6789</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p><a href="mailto:your-email@your-domain.com">feedback@startbootstrap.com</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

	<!-- Plugin JavaScript -->
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	<script src="{{ URL::asset('vendor/scrollreveal/scrollreveal.min.js') }}"></script>
	<script src="{{ URL::asset('vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
	<!-- Theme JavaScript -->
	<script src="{{ URL::asset('js/creative.min.js') }}"></script>
	<!-- Plugin Nouislider -->
	<script src="{{ URL::asset('js/nouislider.min.js') }}"></script>
	<script src="{{ URL::asset('js/jobsearching.js') }}"></script>
	
</body>

</html>
