<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Task</title>
		<link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
	</head>
	<body>
		<style>
			.form-check-input{
				cursor: pointer;
			}
			.spinner-border{
				display: none;
				position: fixed;
				left: 50%;
				top: 50%;
			}
		</style>
		<nav class="navbar navbar-expand-lg bg-body-tertiary">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">Task Management System</a>
				<button type="button" class="btn btn-outline-dark" >Log out</button>
			</div>
		</nav>
		<div class="spinner-border" role="status">
			<span class="visually-hidden">Loading...</span>
		</div>
		<div class="container">
			<hr>
			<div class="row text-end">
				<div class="col">
					<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
						Add	Task
					</button>
				</div>
			</div>

			<!-- Start - Add Modal -->
			<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h1 class="modal-title fs-5" id="exampleModalLabel">Add Task</h1>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<?php
								echo form_open('', [ 'class' => 'form-validate', 'autocomplete' => 'off' ]);
							?>
								<div class="mb-3">
									<label for="title" class="form-label">Title</label>
									<input type="text" class="form-control" id="title" value="" placeholder="Enter task title" required>
								</div>
								<div class="mb-3">
									<label for="description" class="form-label">Description</label>
									<textarea class="form-control" id="description" rows="3" placeholder="Enter task description" required></textarea>
								</div>
								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
								<button type="button" class="btn btn-primary" onclick="add()">Add</button>
							<?php
								echo form_close();
							?>
						</div>
					</div>
				</div>
			</div>
			<!-- End - Add Modal -->

			<!-- Start - Edit Modal -->
			<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h1 class="modal-title fs-5" id="exampleModalLabel">Edit</h1>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<?php
								echo form_open('', [ 'class' => 'form-validate', 'autocomplete' => 'off' ]);
							?>
								<div class="mb-3">
									<input type="text" class="form-control" id="edit_id" name="edit_id" value="" hidden required>
									<label for="edit_title" class="form-label">Title</label>
									<input type="text" class="form-control" id="edit_title" value="" placeholder="Enter task title" required>
								</div>
								<div class="mb-3">
									<label for="edit_description" class="form-label">Description</label>
									<textarea class="form-control" id="edit_description" rows="3" placeholder="Enter task description" required></textarea>
								</div>
								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
								<button type="button" class="btn btn-primary" onclick="update()">Update</button>
							<?php
								echo form_close();
							?>
						</div>
					</div>
				</div>
			</div>
			<!-- End - Edit Modal -->

			<!-- Star - table -->
			<table class="table" id="task">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Title</th>
						<th scope="col">Description</th>
						<th scope="col">Date</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
				</tbody>
			</table>
			<!-- End - table -->
		</div>
		
		<!-- <script src="<?php base_url()?>assets/js/bootstrap.bundle.min.js"></script> -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
		<script src="<?php base_url()?>assets/js/jquery.min.js"></script>
		<script>
    		let base_url_task = "<?php echo base_url('task/list'); ?>";
    		let base_url_add_task = "<?php echo base_url('task/add'); ?>";
    		let base_url_update_task = "<?php echo base_url('task/update'); ?>";

			function add(){
				console.log($("#title").val());
				console.log($("#description").val());
				let title = $("#title").val();
				let description = $("#description").val();

				if(title == "")
				{
					$("#title").css('border', '1px solid red');
				}

				if(description == "")
				{
					$("#description").css('border', '1px solid red');
				}
				$(".spinner-border").show();
				if(title != "" && description != "")
				{
					$("#title").css('border', '1px solid #eee');
					$("#description").css('border', '1px solid #eee');
					$.ajax({
						url: base_url_add_task,
						method: "POST",
						data: { title: $("#title").val(),
								description: $("#description").val() 
							},
						dataType: "json",
						success: function (response) {
							$("#result").html(response.message);
						},
						error: function (xhr, status, error) {
							console.error(xhr.responseText);
						}
					});
					$('#addModal').modal('hide');
				}
				$(".spinner-border").hide();
				list();
			}

			function list(){
				$(".spinner-border").show();

				let html="";
				console.log($("#title").val());
				console.log($("#description").val());
				$.ajax({
                    url: base_url_task,
                    method: "GET",
                    dataType: "json",
                    success: function (response) {
						for (val of response) {
							console.log(html); 
							let checked = "";
							let checked_val = 1;
							let table_success = "";
							if(val.is_done == 1)
							{
								checked = "checked";
								checked_val = 0;
								table_success = 'class="table-success"';
							}
							html+=`
							<tr ${table_success}>
								<td scope="row"> <input class="form-check-input" type="checkbox" value="${val.id}" onclick="update('${val.id}', '${val.title}', '${val.description}', ${checked_val}, 0)" id="done" ${checked}> </td>
								<td>${val.title}</td>
								<td>${val.description}</td>
								<td>${val.updated_at}</td>
								<td>
									<button type="button" class="btn btn-warning text-light" onclick="edit('${val.id}', '${val.title}', '${val.description}')" data-bs-toggle="modal" data-bs-target="#editModal">
										Edit
									</button>
									<button type="button" class="btn btn-danger" onclick="update('${val.id}', '${val.title}', '${val.description}', 0, 1)">
										Delete
									</button>
								</td>
							</tr>
							`;
						}

                        $("#task tbody").html(html);
                    },
                    error: function (xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
				$(".spinner-border").hide();

			}

			function edit(id, title, description)
			{
				$("#edit_id").val(id);
				$("#edit_title").val(title);
				$("#edit_description").val(description);
			}

			function update(id, title, description, is_done = -1, is_deleted = 0)
			{
				$(".spinner-border").show();
				console.log($("#title").val());
				console.log($("#description").val());
				let data = {};
				if(is_deleted != 1 && is_done != 1 && is_done != 0)
				{
					data = { 
							id: $("#edit_id").val(),
							title: $("#edit_title").val(),
							description: $("#edit_description").val(),
							is_done: 0,
							is_deleted: is_deleted,
					}
				}
				else if(is_deleted == 1)
				{
					data = { 
							id: id,
							is_deleted: is_deleted,
					}
				}
				else if(is_done == 1 || is_done == 0)
				{
					data = { 
							id: id,
							is_done: is_done,
					}
				}

				$.ajax({
                    url: base_url_update_task,
                    method: "POST",
                    data: data,
                    dataType: "json",
                    success: function (response) {
                        $("#result").html(response.message);
						$('#editModal').modal('hide');
                    },
                    error: function (xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
				$(".spinner-border").hide();

				list();
			}

			list();
		</script>
	</body>
</html>