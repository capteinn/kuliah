
<?php require_once('inc/header.inc.php'); ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="content">
					<form method="post" action="./user.proses.add.php">
						<div class="row">
							<div class="col-md-5">
								<div class="form-group">
									<label>ID</label>
									<input type="text" name="id" class="form-control"  placeholder="ID" >
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label>Username</label>
									<input type="text" name="username" class="form-control" placeholder="Username" value="">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="exampleInputEmail1">Email address</label>
									<input type="email" name="email" class="form-control" placeholder="Email">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>First Name</label>
									<input type="text" class="form-control" placeholder="Company" value="">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Last Name</label>
									<input type="text" class="form-control" placeholder="Last Name" value="">
								</div>
							</div>
						</div>


						<a href="./">
							<button type="button" class="btn btn-default btn-fill pull-right" style="margin-left: 5px;">Cancel</button>
						</a>
						<button type="submit" class="btn btn-info btn-fill pull-right">Save</button>
						<div class="clearfix"></div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php require_once('inc/footer.inc.php'); ?>
