<?php 
require_once 'DBClass.php';
$db = new DBClass();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>Small - Free Bootstrap 3 Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>


	<div class="nav">
		<a href="index.html#hero" class="scroll">section one</a>
		<a href="index.html#work" class="scroll">section two</a>
		<a href="index.html#networks" class="scroll">section three</a>
	</div>
	<section id="hero">
			<div class="hero-block">
				<img class="img-circle" src="assets/img/logo.png" width="200" height="200" class="mb-7 hero-image">
				<p>Hello, I'm Carlos and this is our new theme, Small.<br/>
				It is extremely easy to configure and use. Designed to show your Dribbble shots.<br/>
				No complex stuff. Your logo, your shots & your social links. Easy stuff!</p>
			</div>
		<a href="index.html#work" class="scroll"><span class="down-arrow"></span></a>
	</section>
	
	
	<section id="work">
		<div class="showcase">
			<div class="showcase-tiles">
				<ul class="slides">
					<!--Dribbble feed-->	
				</ul>
			</div>
			<div class="showcase-info">
				<h2 class="mb-7">List Students Data</h2>
				
				<?php
					$str = "select * from siswa;";
					$row = $db->getRows($str);
				?>
				
				<table class="table" style="width:100%">
					<tr>
						<th>NIS</th>
						<th>Fullname</th>
						<th>Email</th>
					</tr>
					<?php foreach($row as $siswa):?>
					<tr>
						<td><?php echo $siswa['nis']?></td>
						<td><?php echo $siswa['full_name']?></td>
						<td><?php echo $siswa['email']?></td>
					</tr>
					<?php endforeach;?>
				</table>
				
				
			</div>
		</div>
	</section>
	
	
	<section id="networks">
		<div class="container">
			<p>
				<a href="#"><i class="dribbble fa fa-dribbble"></i></a><a href="#"><i class="facebook fa fa-facebook"></i></a><a href="#"><i class="twitter fa fa-twitter"></i></a><a href="#"><i class="mail fa fa-envelope"></i></a>
			</p>

		</div>
	
	</section>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jribbble.js"></script>
    <script src="assets/js/site-ck.js"></script>

  </body>
</html>
