<!DOCTYPE html>
<html>
<head>
	{% block head %}
		{% block stylesheets %}
			<link rel="stylesheet" href="{{bootstrapPath}}">
		{% endblock %}
		<meta charset="utf-8">
		<title>{% block title %}{% endblock %} - Clients</title>
	{% endblock %}
</head>
<body>
	<div id="content">{% block content %}{% endblock %}</div>
	<h1> Caravanes </h1>
	
	<table class="table">
		<tr>
			<th> Identifiant </th>
			<th> Société </th>
			<th> Prix </th>
			<th> Nombre de personnes </th>
			<th> Emplacement </th>
		</tr>
	{% for caravan in caravans %}
		<tr>
			<td>{{caravan.car_id}}</td>
			<td>{{caravan.car_society_name}}</td>
			<td>{{caravan.car_price}}</td>
			<td>{{caravan.car_nb_person}}</td>
			<td>{{caravan.car_id_location}}</td>
		</tr>
	{% endfor %}
	</table>
</body>
</html>