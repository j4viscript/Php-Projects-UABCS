<?php
 include '../app/productsController.php';

 $productController = new ProductsController();
 $products = $productController->getProducts();
?>
<!DOCTYPE html>
<html>
	<head>
		<?php include '../layouts/head.template.php'; ?>
	</head>
	<body>
		<!-- NAVBAR -->
		<?php include '../layouts/nav.template.php'; ?>
		<!-- NAVBAR -->

		<div class="container-fluid">
			
			<div class="row">
				
				<!-- SIDEBAR -->
				<?php include '../layouts/sidebar.template.php'; ?>
				<!-- SIDEBAR -->

				<div class="col-md-10 col-lg-10 col-sm-12">

					<section> 
						<div class="row bg-light m-2">
							<div class="col">
								<label>
									/Productos
								</label>
							</div>
							<div class="col">
								<button data-bs-toggle="modal" data-bs-target="#addProductModal" class=" float-end btn btn-primary">
									Añadir producto
								</button>
							</div>
						</div> 
					</section>
					
					<section>
						
						<div class="row">
							<?php 
								if (isset($products) && count($products)):?>
							<?php foreach ($products as $product):?>
								
							<div class="col-md-4 col-sm-12"> 
								<div class="card mb-2">
									<img src="<?= $product->cover?>" class="card-img-top" alt="...">
									<div class="card-body">
									<h5 class="card-title"><?= $product->name?></h5>
									<h6 class="card-subtitle mb-2 text-muted">Descripcion</h6>
									<p class="card-text"><?= $product->description?></p>

									<div class="row">
										<a data-bs-toggle="modal" data-bs-target="#addProductModal" href="#" class="btn btn-warning mb-1 col-6">
											Editar
										</a>
										<a onclick="eliminar(this)" href="#" class="btn btn-danger mb-1 col-6">
											Eliminar
										</a>
										<a href="details.php" class="btn btn-info col-12">
											Detalles
										</a>
									</div>

									</div>
								</div>  
							</div>
							<?php endforeach?>
							<?php endif ?>

						</div>

					</section> 

					 
				</div>

			</div>

		</div>

		<!-- Modal -->
		<div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
		        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		      </div>

		      <form method="post" action="../app/productsController.php">

			      <div class="modal-body" >
			        
			        <div class="input-group mb-3">
					  <span class="input-group-text" id="basic-addon1">Nombre</span>
					  <input name="name" required type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
					</div>
			        <div class="input-group mb-3">
					  <span class="input-group-text" id="basic-addon1">Descripción</span>
					  <input name="description" required type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
					</div>
			        <div class="input-group mb-3">
					  <span class="input-group-text" id="basic-addon1">Slug</span>
					  <input name="slug" required type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
					</div>
			        <div class="input-group mb-3">
					  <span class="input-group-text" id="basic-addon1">Features</span>
					  <input name="Features" required type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
					</div>
						<div class="input-group mb-3">
						<span class="input-group-text" id="basic-addon1">Brand</span>
						<input name="brand" required type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
						</div>
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










