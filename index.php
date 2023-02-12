
<?php 					
	if( isset($_POST['email']) )
	{
		$email = $_POST['email'];
	} else {
		$email = "no email";
	}
?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
<div class="container">
	
	<div class="row">
		<div class="col-6">
		<h1>Form</h1>
			<form action="index.php" method="post">
			<div class="mb-3 row">
				<label for="exampleInputEmail1" class="form-label">Email address</label>
				<div class="col-sm-10">
					<input name="email"	type="email" class="form-control form-control-sm" id="exampleInputEmail1">
				</div>
			</div>

			<button type="submit" class="btn btn-primary">Submit</button>

		<button type="button" class="btn btn-primary" id="liveToastBtn">Show live toast</button>

		<div class="toast-container position-fixed bottom-0 end-0 p-3">
		<div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
			<div class="toast-header">
			<!-- <img src="..." class="rounded me-2" alt="..."> -->
			<strong class="me-auto">Success</strong>
			<small>11 mins ago</small>
			<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
			</div>
			<div class="toast-body">
			Email <?php echo $email ?> sent.
			</div>
		</div>
		</div>

			</form>

		</div>

		<div class="col-6">
			<h1>Result</h1>

			<div class="mb-3 row">
				<label class="col-sm-2 col-form-label">Email address</label>
				<div class="col-sm-10">
					<input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $email ?>">
				</div>
			</div>

		</div>	




	</div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	
	<script>
		const toastTrigger = document.getElementById('liveToastBtn')
		const toastLiveExample = document.getElementById('liveToast')
		if (toastTrigger) {
		toastTrigger.addEventListener('click', () => {
			const toast = new bootstrap.Toast(toastLiveExample)

			toast.show()
		})
		}
	</script>  

</body>
</html>
