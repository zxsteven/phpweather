<!DOCTYPE html>
<html lang="en">
  <head>
  	<title>Weather</title>
	  <meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">

	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="style.css">

  </head>
  <body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 center">
				<form>
					<div class="form-group">
						<h1 class="center">Weather Prediction</h1>
						<p class="lead center">Tells what the weather is like. (Rarely accurate)</p>
						<input type="text" class="form-control" name='city' placeholder='Enter location...'/>
					</div>
					<button type='submit' class="btn btn-success">Check Weather!</button>
				</form>
			</div>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"</script>
	<script type="text/javascript" src='app.js'></script>
  </body>
</html>