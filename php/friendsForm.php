<html>
<head>
	<title>Friends PHP Form</title>

	<?php 
		/* Sample form using bootstrap */
		include 'resources/bslinks.php';
	?>	

	<link rel="stylesheet" href="css/main-php.css">
</head>
<body>
	<div class="content">
		<div class="container">
			<div class="row">
				<h1>Enter Friends Name</h1><br>
				<form action="saveFriend.php" method="post" class="form-horizontal">
					<div class="form-group">
						<label for="f_name" class="control-label col-sm-3">Friend's Name</label>
						<div class="col-sm-3">
							<input type="text" class="form-control" id="f_name" name="f_name" placeholder="First Name">
						</div>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="l_name" name="l_name" placeholder="Last Name">
						</div>
					</div>

					<div class="form-group">
						<label for="email" class="control-label col-sm-3">Email</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="email" name="email" placeholder="Email">
						</div>
					</div>

					<div class="form-group">
						<label for="fnumber" class="control-label col-sm-3">Favorite Number</label>
						<div class="col-sm-4">
							<input type="number" class="form-control" id="fnumber" name="fnumber" placeholder="Favorite Number">
						</div>
					</div>

					<div class="form-group">
						<label for="birthday" class="control-label col-sm-3">Birthday</label>
						<div class="col-sm-3">
							<input type="date" class="form-control" id="birthday" name="birthday" placeholder="Birthday  (YYYY-MM-DD)">
						</div>
					</div>

					<div class="submit">
						<input type="submit" value="Add Friend">
					</div>
				</form>
			</div> <!-- row -->
		</div> <!-- container -->
	</div> <!-- content -->


	<?php include 'resources/bsfooter.php';?>	

</body>
</html>