<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Inventory Management System</title>
	<!--Jquery CDN-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--Font Awesome CDN-->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="./js/main.js"></script>
</head>
<body>
	<!-- Navbar -->
	<?php include_once("./templates/header.php"); ?>
	<br/><br/>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<!--added some code from this site and then modify depend on requirement:https://getbootstrap.com/docs/4.1/components/card/-->
				<div class="card mx-auto">
				  <img class="card-img-top mx-auto" style="width: 60%;" src="./images/user.png" alt="Card image cap">
				  <div class="card-body">
				    <h5 class="card-title">Profile Info</h5>
				    <p class="card-text"><i class="fa fa-user">&nbsp;</i>Marketer Biplob</p>
				    <p class="card-text"><i class="fa fa-user">&nbsp;</i>Admin</p>
				    <p class="card-text">Last Login : xxxx-xx-xx</p>
				    <a href="#" class="btn btn-primary"><i class="fa fa-edit">&nbsp;</i>Edit Profile</a>
				  </div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="jumbotron" style="width: 100%; height: 100%;">
					<h1>Welcome Admin,</h1>
					<div class="row">
						<div class="col-sm-6">
							<!-- Added Clock from this site: https://www.timeanddate.com/clocks/-->
							<iframe src="http://free.timeanddate.com/clock/i6e8td4b/n73/szw160/szh160/cf100/hnce1ead6" frameborder="0" width="160" height="160"></iframe>
						</div>
						<div class="col-sm-6">
							<!--Also Added card from this site:https://getbootstrap.com/docs/4.1/components/card/-->
							<div class="card">
						      <div class="card-body">
						        <h5 class="card-title">New Orders</h5>
						        <p class="card-text">Here you can make invoices and create new orders</p>
						        <a href="#" class="btn btn-primary">New Orders</a>
						      </div>
						    </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--For line gap added this two paraghraph-->
	<p></p>
	<p></p>
	<!--Create new div for Categories,Brands and Products-->
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Categories</h5>
						<p class="card-text">Here you can manage your categories and you add new parent and sub categories</p>
						<a href="#"  data-toggle="modal" data-target="#form_category" class="btn btn-primary">Add</a>
						<a href="#" class="btn btn-primary">Manage</a>
					</div>
				</div>
			   </div>
			<div class="col-md-4">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Brands</h5>
						<p class="card-text">Here you can manage your brand and you add new brand</p>
						<a href="#"  data-toggle="modal" data-target="#form_brand"  class="btn btn-primary">Add</a>
						<a href="#" class="btn btn-primary">Manage</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Products</h5>
						<p class="card-text">Here you can manage your products and you add new products</p>
						<a href="#"  data-toggle="modal" data-target="#form_products"  class="btn btn-primary">Add</a>
						<a href="#" class="btn btn-primary">Manage</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	
	<?php
	//Category Form
	include_once("./templates/category.php");
	?>
	<?php
	//Category Form
	include_once("./templates/brand.php");
	?>
	<?php
	//Category Form
	include_once("./templates/products.php");
	?>


</body>
</html>