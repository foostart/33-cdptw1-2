<html>
   <head>
      <title>Module 2021</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="user-scalable=0, initial-scale=1.0">
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
      <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
      <?php
         if (!class_exists('lessc')) {
             include ('./libs/lessc.inc.php');
         }
         $less = new lessc;
         $less->compileFile('less/2021.less', 'css/2021.css');
         ?>
      <link href="css/2021.css" rel="stylesheet" type="text/css" />
      <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
      <script src="js/bootstrap.min.js" type="text/javascript"></script>
   </head>
   <body>
      <section class="type-2021">
        <!--header-->
	<header class="top-header">
		<div class="container">
			<div class="row">		
	<!--About-->
<div class="container">	
	<div class="About">
		<h1>About Us</h1><br>
		<div class="row">
			<div class="col-md-6 col-xs-12">
				<h2>Eum Fugiat Quo Volutas Nullatur </h2><br>
				<h5>Taque oarum hic tentur a saplente delectus ,ut aut reiciendis voluptatibus maiores alias conse quatur aut perferendis doloribus asperiores repellat.</h5><br>
				<p>Neque porro quisquam est, qui dolorem ipsum quia  dolor sit amet, consectetur
				Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p><br>
				<h2>Eum Fugiat Quo Volutas Nullatur </h2><br>
				<h5>Taque oarum hic tentur a saplente delectus ,ut aut reiciendis voluptatibus maiores alias conse quatur aut perferendis doloribus asperiores repellat.</h5><br>
				<p>Neque porro quisquam est, qui dolorem ipsum quia  dolor sit amet, consectetur
				Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p><br>
			</div>
			<div class="col-md-6 col-xs-12">
				<img src="images/1.jpg" alt="" class="img-responsive">
			</div>
		</div>
	</div>
</div>
<!--end About-->
<!--New -->
<div class="container">
	<div class="New">
		<h1>New & Event</h1>
			<div class="row">
				<div class="col-md-3 col-xs-6">
					<img src="images/8.jpg" alt="" class="img-responsive">
				</div>
				<div class="col-md-3 col-xs-6">
					<h4>24th<br>
					July</h4>
					<p>Temporibus autem quibusdam et<br>
					aut officiis debitis aut rerum<<br>
					necessitatibus saepe eveniet ut<br>
					et voluptates repudiandae.</p>
				</div>
				<div class="col-md-3 col-xs-6">
					<img src="images/9.jpg" alt="" class="img-responsive">
				</div>
				<div class="col-md-3 col-xs-6">
					<h4>24th<br>
					July</h4>
					<p>Temporibus autem quibusdam et<br>
					aut officiis debitis aut rerum<<br>
					necessitatibus saepe eveniet ut<br>
					et voluptates repudiandae.</p><br>
				</div>
<!--end New-->
		</div>
	</div>
</div>

	<!--Event-->
<div class="container">
	<div class="Event">
		<div class="row">
			<div class="col-md-3  col-xs-6">
				<img src="images/7.jpg" alt="" class="img-responsive">
				</div>
			<div class="col-md-3  col-xs-6">
					<h4>24th<br>
					July</h4>
					<p>Temporibus autem quibusdam et<br>
					aut officiis debitis aut rerum<<br>
					necessitatibus saepe eveniet ut<br>
					et voluptates repudiandae.</p> 
			</div>
			<div class="col-md-3 col-xs-6">
				<img src="images/10.jpg" alt="" class="img-responsive">
			</div>
			<div class="col-md-3 col-xs-6">
					<h4>24th<br>
					July</h4>
					<p>Temporibus autem quibusdam et<br>
					aut officiis debitis aut rerum<<br>
					necessitatibus saepe eveniet ut<br>
				et voluptates repudiandae.</p> 
				</div>
			</div>
                    </div>
                </div>
            </div>
      </section>
   </body>
</html>