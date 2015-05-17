{# templates/layout.twig #}
<!DOCTYPE html>
<html>
<head>
	<title>Cas-M-Ping - {% block title %}{% endblock %} </title>
	<meta charset="iso-8859-1">
	{% block stylesheets %}
		<link rel="stylesheet" href="{{bootstrapPath}}">
		<link rel="stylesheet" href="/Cas-M-Ping/dependencies/styles/layout.css">
		<link rel="stylesheet" href="/Cas-M-Ping/dependencies/styles/jqueryUI.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
	{% endblock %}
</head>
<body>
	<div class="wrapper row1">
	  <header id="header" class="clear">
		<div id="hgroup">
		  <h1><a href="/Cas-M-Ping/rentals/show/all">Cas-M-Ping</a></h1>
		  <h2>Camping Ruténois</h2>
		</div>
		<nav>
		  <ul>
			<li><a href="/Cas-M-Ping/customers/show/all">Clients</a></li>
			<li><a href="/Cas-M-Ping/rentals/show/all">Locations</a></li>
			<li><a href="/Cas-M-Ping/locations/show/all">Emplacements</a></li>
			<li><a href="/Cas-M-Ping/sectors/show/all">Secteurs</a></li>
			<li><a href="/Cas-M-Ping/seasons/show/all">Saisons</a></li>
			<li><a href="/Cas-M-Ping/caravans/show/all">Caravanes</a></li>
		  </ul>
		</nav>
	  </header>
	</div>
	<!-- content -->
	<div class="wrapper row2">
		<div id="container">
	  
			<section>
				<img src="/Cas-M-Ping/dependencies/images/campingRodez.jpg" alt="">
			</section>
		
		</div>
		<section>
			<h2>{% block header %}{% endblock %}</h2>
		</section>
		{% block content %}{% endblock %}
	</div>
</body>
<script type="text/javascript">
	$('#beginDate').datepicker({
		changeMonth: true,
		changeYear: true,
		dateFormat: 'yy-mm-dd',
		minDate: 0,
		maxDate: $('#endDate').datepicker('getDate'),
		 onSelect: function(date) {
			$('#beginDate').datepicker('option','minDate', date);
			$('#endDate').datepicker('option','minDate');
		}
	});
	$('#endDate').datepicker({
		changeMonth: true,
		changeYear: true,
		dateFormat: 'yy-mm-dd',
		minDate: $('#beginDate').datepicker('getDate'),
		onSelect: function(date) {
			$('#endDate').datepicker('option','minDate', date);
			$('#beginDate').datepicker('option','minDate');
		}
	});
	$.datepicker.setDefaults($.datepicker.regional['fr']);
</script>
</html>
