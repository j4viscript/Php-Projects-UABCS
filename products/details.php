<!DOCTYPE html>
<html>
	<head>
		<?php include '../layouts/head.template.php'; ?>
	</head>
	<body>
		<?php include '../layouts/nav.template.php'; ?>
		<div class="container-fluid">
			
			<div class="row">
				
			<!-- SIDEBAR -->
				<?php include '../layouts/sidebar.template.php'; ?>
			<!-- SIDEBAR -->

			<!-- Modal -->
			<div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>

				<form>

					<div class="modal-body">
						
						<?php for ($i=0; $i < 6; $i++): ?>
						<div class="input-group mb-3">
						<span class="input-group-text" id="basic-addon1">@</span>
						<input required type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
						</div>
						<?php endfor; ?>

					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
							Close
						</button>
						<button type="submit" class="btn btn-primary">
							Save changes
						</button>
					</div>

				</form>

				</div>
			</div>
		</div>
		<?php include '../layouts/scripts.template.php'; ?>
	</body>
</html>










