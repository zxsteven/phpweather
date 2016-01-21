<!DOCTYPE html>
<html lang="en">
  <head>
  	<title>Weather</title>
	  <meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">

	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="style.css">
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 center">
					<h1 class="center">Weather Predictor</h1>
					<p class="lead center">Enter your city below to get a forecast for the weather.</p>
						<form>
							<div class="form-group">
							<input type="text" class="form-control" name="city" id="city" placeholder="Eg. London, Paris, San Francisco..." /></div>
							<button id="findMyWeather" class="btn btn-success btn-lg">Check Weather</button>
						</form>
						<div id="success" class="alert alert-success">Success!</div>
						<div id="fail" class="alert alert-danger">Could not find weather data for that city.</div>
						<div id="noCity" class="alert alert-danger">Please enter a city!</div>
				</div>
			</div>
		</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script type="text/javascript" src='app.js'></script>
  </body>
</html>