<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>NEOSENSE</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css">
	<link rel="stylesheet" href="./css/style.css">
	<script defer src="https://use.fontawesome.com/releases/v5.0.0/js/all.js"></script>
</head>

<?php include_once('components/header.php'); ?>


<body>


<div class="hero-body">
	<div class="container has-text-centered">
		<div class="column is-6 is-offset-3">
			<h1 class="title">
				CHAIN EXPLORER <i class="fas fa-search"></i>
			</h1>

			<h2 class="subtitle">
				Search by Address, Txhash or Block.
			</h2>

			<div class="content has-text-centered is-transparent">

				<div class="field">
					<div class="field">
						<div class="control">
							<input class="input is-primary has-text-centered" type="text" placeholder="">
						</div>
					</div>
					<button class="button is-info">
						Look up
					</button>
				</div>
			</div>
		</div>
	</div>
</div>
</body>

<?php include_once('components/footer.php'); ?>

</html>