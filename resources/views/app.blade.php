<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>白开水的博客</title>

		<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
		<link media="all" href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
		<link media="all" href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<!-- Fonts -->
		<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>

		<div class="container">
			<header>
			  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			    <div class="container-fluid">
			      <div class="navbar-header">
			        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
			          <span class="sr-only">Toggle navigation</span>
			          <span class="icon-bar"></span>
			          <span class="icon-bar"></span>
			          <span class="icon-bar"></span>
			        </button>
			        <a class="navbar-brand" href="#">
			          <img src="{{ asset('/img/logo.png') }}"> <span class="name-holder">白开水的博客</span>
			        </a>
			      </div>

			      <div class="collapse navbar-collapse" id="navbar">

			        <ul id="main-menu" class="nav navbar-nav navbar-right">

			          
			            <li><a href="/">
			              <i class="fa fa-home"></i> 首页</a>
			            </li>
			          
			            <li><a href="/about/">
			              <i class="fa fa-info-circle"></i> 关于</a>
			            </li>
			          

			        </ul>
			      </div>
			      <!-- /.navbar-collapse -->
			    </div>
			    <!-- /.container-fluid -->
			  </nav>
			</header>
			<div class="row">
			  	<div class="col-xs-12 col-sm-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
					@yield('content')
				</div>
			</div>
		</div>

		<footer class="footer">
		    <div class="container">
		      <div class="row">
		        <div class="col-lg-offset-3 col-lg-6">
		            <div class="row">
		              <div class="col-xs-12 text-center">
		                <small>© xiaojun, 2015</small>
		              </div>
		            </div>
		        </div>
		      </div>
		    </div>
		  </footer>

		<!-- Scripts -->
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	</body>
</html>
