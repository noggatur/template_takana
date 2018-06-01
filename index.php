<!-- takana . -->
<!DOCTYPE HTML>
<html lang="ru">
	<head>
		<title>Takana</title>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/style.css" rel="stylesheet" type="text/css">
	</head>
	<body>

		<div class="container">
			<?
				include("php/content.php");
			?>
		</div>

		<?include("php/footer.php");?>

		<script type="text/javascript" src="_/js/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="_/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="_/js/js.js"></script>

		<script type="text/javascript" src="http://localhost:48626/takana.js"></script>
		<script type="text/javascript">
			takanaClient.run();
		</script>
	</body>
</html>