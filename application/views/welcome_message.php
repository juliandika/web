<!DOCTYPE html>
<html lang="en">
	<head>
		<title>FrontEnd Toko Online by Kursus-PHP.com</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<?php $this->load->view('layout/top_menu') ?>
		<!-- Tampilkan semua produk -->
		<div class="row">
		<!-- looping produk -->
		<?php foreach($products as $product) : ?>
		  <div class="col-sm-3 col-md-3">
		    <div class="thumbnail">
					<?=img([
						'src'			=> 'uploads/' . $product->image,
						'style'		=> 'max-width: 100%; max-height:100%; height:100px'
						])?>
		      <div class="caption">
		        <h3 style="min-height:60px;"><?=$product->name?></h3>
		        <p><?=$product->description?></p>
		        <p>
							<?=anchor('welcome/add_to_cart/' . $product->id, 'Buy' , [
								'class' => 'btn btn-primary',
								'role'	=> 'button'
								])?>
						</p>
		      </div>
		    </div>
		  </div>
		<?php endforeach; ?>
		<!-- end loooping -->
		</div>
	</body>
</html>
