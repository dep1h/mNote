<?php
	if (isset($_GET['login']) && $_GET['login'] === 'true') {
		?>
			<div class="alert alert-success" role="alert">
			"User Created Successfully."
			</div>
		<?php
	} else if (isset($_GET['login']) && $_GET['login'] === 'false') {
		?>
			<div class="alert alert-danger" role="alert">
				"User registration failed."
			</div>
		<?php
	}

	if (isset($_GET['error'])) {
		?>
			<div class="alert alert-danger" role="alert">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				<?php echo $_GET['error']; ?>
			</div>
		<?php
	}
	
	if (isset($_GET['success'])) {
		?>
			<div class="alert alert-success alert-dismissible" role="alert">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				<?php echo $_GET['success']; 
				?>
			</div>
		<?php
	}

	if (isset($_GET['success1'])) {
		?>
			<div class="alert alert-success alert-dismissible" role="alert">
				<a href="#" class="close1" data-dismiss="alert" aria-label="close1">&times;</a>
				<?php echo $_GET['success1']; 
				?>
			</div>
		<?php
	}
?>