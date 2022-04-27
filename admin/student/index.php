<!DOCTYPE html>
<html lang="en">

<head>
	<?php require_once('../inc/header.php'); ?>
</head>

<?php include('../inc/topBarNav.php'); ?>

<body>
	<div class="col-lg-12">
		<div class="card card-outline card-primary">
			<div class="card-header">
				<div class="card-tools">
					<a class="btn btn-block btn-sm btn-default btn-flat border-primary new_student" href="javascript:void(0)"><i class="fa fa-plus"></i> Add New</a>
				</div>
			</div>
			<div class="card-body">
				<table class="table tabe-hover table-bordered" id="list">
					<thead>
						<tr>
							<th class="text-center">#</th>
							<th>Avatar</th>
							<th>Student ID</th>
							<th>Name</th>
							<th>Current Class</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>

						<tr>
							<th class="text-center"></th>
							<td>
								<center><img src="" alt="" class="img-thumbnail border-rounded" width="75px" height="75px" style="object-fit: cover;"></center>
							</td>
							<td><b></b></td>
							<td><b></b></td>
							<td><b></b></td>
							<td class="text-center">
								<div class="btn-group">
									<button type="button" class="btn btn-default btn-block btn-flat dropdown-toggle dropdown-hover dropdown-icon" data-toggle="dropdown" aria-expanded="false">
										Action
										<span class="sr-only">Toggle Dropdown</span>
									</button>
									<div class="dropdown-menu" role="menu">
										<a class="dropdown-item action_class" href="#">Update Class</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item action_edit" href="#">Edit</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item action_delete" href="#">Delete</a>
									</div>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<button class="btn d-inline-flex align-items-center collapsed" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#contents-collapse" aria-controls="contents-collapse">Contents</button>
	<ul class="list-unstyled ps-3 collapse" id="contents-collapse">
		<li><a class="#" href="#typography">Typography</a></li>
		<li><a class="#" href="#images">Images</a></li>
		<li><a class="#" href="#tables">Tables</a></li>
		<li><a class="#" href="#figures">Figures</a></li>
	</ul>
	<?php require_once('../inc/footer.php') ?>
	<?php require_once('../inc/script.php'); ?>
</body>

</html>