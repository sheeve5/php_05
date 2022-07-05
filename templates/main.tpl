<html lang="en"><head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Progressus - Free business bootstrap template by GetTemplate</title>

	<link rel="shortcut icon" href="{$conf->app_url}/assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="{$conf->app_url}/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="{$conf->app_url}/assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="{$conf->app_url}/assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" href="{$conf->app_url}/assets/css/main.css">

</head>

<body class="home" style="">
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom animated">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="{$conf->app_url}/index.php"><img src="{$conf->app_url}/assets/images/logo.png" alt="A logo"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li class="active"><a href="{$conf->app_url}/index.php">Home</a></li>
					<li><a href="{$conf->action_root}otherAction">About</a></li>
					
					
					
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->
	<!-- Header -->
	<header id="head">
		<div class="container">
			<div class="row">
				<h1>{$page_title|default:"Tytuł domyślny"}</h1>
				<h2>{$page_header|default:"Tytuł domyślny"}</h1>
				<p>{$page_description|default:"Opis domyślny"}</p>
			</div>
		</div>
	</header>
	<!-- /Header -->

	<div class="container">
		<br> <br>
		{block name=content} Domyślna treść zawartości .... {/block}
	</div>
		
	<footer id="footer" class="top-space">

        	<div class="footer2">
			<div class="container">
				<div class="row">
					
					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-left">
                                                            {block name=footer} Domyślna treść stopki .... {/block}
                                                        </p>
						</div>
					</div>

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								Wykonano na podstawie szablonu Progressus, <a href="http://gettemplate.com/" rel="designer">gettemplate</a> 
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

	</footer>	
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>

</body></html>