{# templates/layout.twig #}
<!DOCTYPE html>
<html>
<head>
	<title>Cas-M-Ping - {% block title %}{% endblock %} </title>
	<meta charset="iso-8859-1">
	<link rel="stylesheet" href="styles/layout.css" type="text/css">
	{% block stylesheets %}
		<link rel="stylesheet" href="{{bootstrapPath}}">
		<link rel="stylesheet" href="/Cas-M-Ping/dependencies/styles/layout.css">
		<link rel="stylesheet" href="/Cas-M-Ping/dependencies/bootstrap/css/bootstrap-datetimepicker.min.css">
		<link rel="stylesheet" href="/Cas-M-Ping/dependencies/bootstrap/js/bootstrap-datetimepicker.min.js">
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
			<li><a href="/Cas-M-Ping/caravans/show/all">Caravannes</a></li>
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
</html>
