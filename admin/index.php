<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/all.min.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/jquery-ui.min.css">
		<link rel="stylesheet" href="css/style.css">

		<script src="js/jquery.js"></script>
		<script src="js/poper.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>
		<title>Admin</title>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <div class="container">
		  	<a class="navbar-brand" href="#">Navbar</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item">
		        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Profile</a>
		      </li>
		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Posts
		        </a>
		        <div class="dropdown-menu bg-light" aria-labelledby="navbarDropdown1">
		          <a class="dropdown-item" href="#">All Post</a>
		          <a class="dropdown-item" href="#">Add Post</a>

				</div>
		      </li>
		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Users
		        </a>
		        <div class="dropdown-menu bg-light hover" aria-labelledby="navbarDropdown2">
		          <a class="dropdown-item" href="#">All Users</a>
		          <a class="dropdown-item" href="#">Add User</a>
		        </div>
		      </li>

		    </ul>
		    <form class="form-inline my-2 my-lg-0">
		      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
		      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		    </form>
		  </div>
		  </div>
		</nav>
	<div class="container my-5">
		<div class="row">
			<div class="col-md-4">
				<div class="card bg-light mb-3" style="max-width: 18rem;">
					<div class="card-header">Post</div>
					<div class="card-body">
						<div class="card-body">
							<ul class="list-group">
								<li class="list-group-item d-flex justify-content-between align-items-center">
									<a href="#">All Post</a>
									<span class="badge badge-primary badge-pill">14</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center">
									<a href="#">Unpublished Post</a>
									<span class="badge badge-primary badge-pill">2</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center">
									<a href="#">Published Post</a>
									<span class="badge badge-primary badge-pill">1</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card bg-light mb-3" style="max-width: 18rem;">
					<div class="card-header">Comment</div>
					<div class="card-body">
						<ul class="list-group">
							<li class="list-group-item d-flex justify-content-between align-items-center">
								<a href="#">Total Comment</a>
								<span class="badge badge-primary badge-pill">14</span>
							</li>
							<li class="list-group-item d-flex justify-content-between align-items-center">
								<a href="#">Published Comment</a>
								<span class="badge badge-primary badge-pill">2</span>
							</li>
							<li class="list-group-item d-flex justify-content-between align-items-center">
								<a href="#">Unpublished Comment</a>
								<span class="badge badge-primary badge-pill">1</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card bg-light mb-3" style="max-width: 18rem;">
					<div class="card-header">Admin</div>
					<div class="card-body">
						<div class="card-body">
							<ul class="list-group">
								<li class="list-group-item d-flex justify-content-between align-items-center">
									<a href="#">Total Admins</a>
									<span class="badge badge-primary badge-pill">14</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center">
									<a href="#">User</a>
									<span class="badge badge-primary badge-pill">2</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center">
									<a href="#">Author</a>
									<span class="badge badge-primary badge-pill">1</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	</body>
</html>