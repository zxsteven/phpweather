$('#findMyWeather').click(function(event) {
	event.preventDefault();
	$('.alert').hide();

	if ($("#city").val() != "") {
 	$.get("scrapes.php?city=" + $("#city").val(), function(data) {
		if (data=="") {
			$("#fail").fadeIn();
		} else {
			$('#success').html(data).fadeIn();
			}
		});
		} else {
		$("#noCity").fadeIn();
		}
});