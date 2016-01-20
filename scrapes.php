<?php

	$contents = file_get_contents('http://www.weather-forecast.com/locations/San-Francisco/forecasts/latest');

	preg_match('/10 Day Weather Forecast Summary:<\/b><span class="read-more-small"><span class="read-more-content"> <span class="phrase">(.*?)</s', $contents, $matches);

	echo ($matches[1]);

?>