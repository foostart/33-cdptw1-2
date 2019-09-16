<html>
   <head>
      <title>Module 1990</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="user-scalable=0, initial-scale=1.0">
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
      <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
      <?php
         if (!class_exists('lessc')) {
             include ('./libs/lessc.inc.php');
         }
         $less = new lessc;
         $less->compileFile('less/1990.less', 'css/1990.css');
         ?>
      <link href="css/1990.css" rel="stylesheet" type="text/css" />
      <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
      <script src="js/bootstrap.min.js" type="text/javascript"></script>
   </head>
   <body>
      <section class="type-1990">
          <header class="top-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-6">
						</div>
						<div class="col-md-6">
							<nav class="navbar navbar-default" role="navigation">
								<ul class="nav navbar-nav">
									<li class="active" ><a href="#"><i class="fa fa-home"></i>Home</a></li>

									<li><a href="#"><i class="fa fa-star"></i>Quality</a></li>

									<li><a href="#"><i class="fa fa-cutlery"></i>Dinner</a></li>

									<li><a href="#"><i class="fa fa-coffee"></i>Desert</a></li>

									<li><a href="#"><i class="fa fa-envelope"></i>Contact</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!--end header-->
	<!--logo-->
	<div class="container">
		<div class="logo">
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<!--col 3-->
						<div class="col-md-3 col-xs-12">
							<img src="images/logo.png" alt="" class="img-responsive">
						</div>
						<!--end col-3-->
						<!--col 9-->
						<div class="col-md-9 col-xs-12">
							<img src="images/3.jpg" alt="" class="img-responsive"><br>
							<div class="row">
								<div class="col-md-4 col-xs-12">
									<h3>Cupidatat Proi</h3>
									<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui.Sint Occaecat</p>
								</div>
								<div class="col-md-4 col-xs-12">
									<h3>Sint Occaecat</h3>
									<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui.</p>
								</div>
								<div class="col-md-4 col-xs-12">
									<h3>Cupida Quisu</h3>
									<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui.</p>
							</div>
							
						</div>
						<!--end col-9-->
					</div>
				</div>
				
			</div>
		</div>	
	</div>
	<!--end logo-->
	<div class="cart">
		
	</div>
	<!--About-->
	<div class="container">
		<div class="About">
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<!--col 4-1-->
						<div class="col-md-4 col-xs-12">
							<img src="images/4.jpg" alt="" class="img-responsive"><br>
							<h4>Vel Illum Qui Dolorem</h4>
							<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia.</p>
						</div>
						<!--col 4-2-->
						<div class="col-md-4 col-xs-12">
							<img src="images/5.jpg" alt="" class="img-responsive"><br>
							<h4>Quia Dolor Sit Amet</h4>
							<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia.</p>
						</div>
						<!--col 4-3-->
						<div class="col-md-4 col-xs-12">
							<img src="images/6.jpg" alt="" class="img-responsive"><br>
							<h4>Porro Quisquam Est</h4>
							<p>	Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--end About-->
	<div class="cast">
		
	</div>
	<!--foot-->
	<footer>
		<div class="container">
			<p>Module 1990</p>
		</div>
	</footer>
	<!--end foot-->
      </section>
   </body>
</html>