<!DOCTYPE html>
<html>
<head>
	{% block head %}
		<link rel="stylesheet" href="dependencies/bootstrap/css/bootstrap.min.css" />
		<title>{% block title %}{% endblock %} - Clients</title>
	{% endblock %}
</head>
<body>
	<div id="content">{% block content %}{% endblock %}</div>
	<h1> Clients </h1>
	
	<table class="table">
		<tr>
			<th> Numéro d'emplacement </th>
			<th> Secteur </th>
		</tr>
	{% for location in locations %}
		<tr>
			<td>{{location.id}}</td>
			<td>{{location.sector}}</td>
		</tr>
	{% endfor %}
	</table>
</body>
</html>