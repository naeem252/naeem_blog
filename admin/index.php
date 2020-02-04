<?php include "../share/initialize.php"; ?>
<?php

if(!is_logedin()){
    header("Location:login.php");
}


?>
<?php include "../share/includes/admin_header.php";?>
<?php include "../share/includes/admin_navigation.php";?>
	<div class="container my-5">
		<div class="row">
			<div class="col-md-4">
				<div class="card bg-light mb-3" style="max-width: 18rem;">
					<div class="card-header">Post</div>
					<div class="card-body">
						<div class="card-body">
							<ul class="list-group">
								<li class="list-group-item d-flex justify-content-between align-items-center">
									<a href="<?php echo url_for("admin/posts.php?post=all");?>">All Post</a>
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
<?php include "../share/includes/admin_footer.php";?>