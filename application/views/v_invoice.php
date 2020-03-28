<!DOCTYPE html>
<html>
<head>
	<title>Invoice</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url().'assets/css/bootstrap.css'?>">
</head>
<body>

<div class="container">
		<div class="col-sm-4 col-md-offset-4 py-4">
		<h4>Invoice</h4>
			<form class="form-horizontal" action="<?php echo base_url().'index.php/invoice/simpan_invoice'?>" method="post">
				<div class="form-group">
					<input type="text" name="no_invoice" class="form-control" value="<?php echo $invoice;?>">
				</div>
				<div class="form-group">
					<button class="btn btn-success" type="submit">Simpan</button>
				</div>
			</form>	
		</div>
	</div>

	<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.2.1.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
</body>
</html>