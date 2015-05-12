<!DOCTYPE html>
<html>
<head>
	{% block head %}
		{% block stylesheets %}
			<link rel="stylesheet" href="{{bootstrapPath}}">
		{% endblock %}
		<meta charset="utf-8">
		<title>{% block title %}{% endblock %} - Saison</title>
	{% endblock %}
</head>
<body>
	<div id="content">{% block content %}{% endblock %}</div>
	<h1> Saisons</h1>
	
	<table class="table">
		<tr>
			<th> Identifiant </th>
			<th> Nom de la saison </th>
			<th> Date de début </th>
			<th> Date de fin </th>
			<th> Coefficient </th>
		</tr>
	{% for season in seasons %}
		<tr>
			<td>{{season.seas_id}}</td>
			<td>{{season.seas_name}}</td>
			<td>{{season.seas_start_date}}</td>
			<td>{{season.seas_end_date}}</td>
			<td>{{season.seas_coeff}}</td>
		</tr>
	{% endfor %}
	</table>
</body>
</html>