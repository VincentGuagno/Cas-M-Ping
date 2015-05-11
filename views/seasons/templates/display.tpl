<!DOCTYPE html>
<html>
<head>
	{% block head %}
		<link rel="stylesheet" href="dependencies/bootstrap/css/bootstrap.min.css" />
		<title>{% block title %}{% endblock %} - Saison</title>
	{% endblock %}
</head>
<body>
	<div id="content">{% block content %}{% endblock %}</div>
	<h1> Clients </h1>
	
	<table class="table">
		<tr>
			<th> Nom de la saison </th>
			<th> Date de début </th>
			<th> Date de fin </th>
			<th> Coefficient </th>
		</tr>
	{% for season in seasons %}
		<tr>
			<td>{{season.name}}</td>
			<td>{{season.beginDate}}</td>
			<td>{{season.endDate}}</td>
			<td>{{season.coefficient}}</td>
		</tr>
	{% endfor %}
	</table>
</body>
</html>