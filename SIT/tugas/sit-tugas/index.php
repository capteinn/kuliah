
<?php require_once('inc/header.inc.php'); ?>

<div class="container-fluid">
	<div class="row">

		<div class="col-md-12">
			<div class="card card-plain">
				<div class="header" style="padding-top: 1px; padding-right: 25px">
					<a href="user.add.php" class="pull-right btn btn-fill btn-success btn-sm">Add New User</a>
				</div>
				<div class="content table-responsive table-full-width">
					<table class="table table-hover">
						<thead>
							<th>ID</th>
							<th>Username</th>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Email</th>
							<th width="200px">Action</th>
						</thead>
						
				
						<tbody>
							<tr>
								<td>ID</td>
								<td>Username</td>
								<td>First Name</td>
								<td>Last name</td>
								<td>Email</td>
								<td>
									<a href="user.detail.php?id=" class="btn btn-fill btn-info btn-sm">Detail</a>
									<a href="user.proses.delete.php?id=" onclick="return confirm('Are you sure to delete this data?')" class="btn btn-fill btn-danger btn-sm">Delete</a>
								</td>
							</tr>
						</tbody>
					</table>

				</div>
			</div>
		</div>

	</div>
</div>

<?php require_once('inc/footer.inc.php'); ?>
