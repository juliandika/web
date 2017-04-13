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

		<table class="table table-bordered table-striped table-hover">
				<thead>
					<tr>
						<th></th>
						<th>Product</th>
						<th>Qty</th>
						<th>Price</th>
						<th>Subtotal</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i = 0;
						foreach ($this->cart->contents() as $items):
							$i++;
					?>
					<tr>
							<td><?= $i ?></td>
							<td><?= $items['name'] ?></td>
							<td><?= $items['qty'] ?></td>
							<td align="right"><?= number_format($items['price'],0,',','.') ?></td>
							<td align="right"><?= number_format($items['subtotal'],0,',','.') ?></td>
					</tr>
				<?php endforeach; ?>
				</tbody>
				<tfoot>
						<tr>
								<td align="right" colspan="4">Total</td>
								<td align="right"><?= number_format($this->cart->total(),0,',','.'); ?></td>
						</tr>
				</tfoot>
		</table>
		<div align="center">
			<?= anchor('welcome/clear_cart','Clear cart',['class'=>'btn btn-danger']) ?>
			<?= anchor(base_url(),'Continue shopping',['class'=>'btn btn-primary']) ?>
			<?= anchor('#','Check Out',['class'=>'btn btn-success']) ?>
		</div>

	</body>
</html>
