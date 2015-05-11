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
	<h1> Clients </h1>
	
	<table class="table">
		<tr>
			<th> Société </th>
			<th> Prix </th>
			<th> Nombre de personnes </th>
			<th> Emplacement </th>
		</tr>
	{% for caravan in caravans %}
		<tr>
			<td>{{caravan.company}}</td>
			<td>{{caravan.price}}</td>
			<td>{{caravan.size}}</td>
			<td>{{caravan.location}}</td>
		</tr>
	{% endfor %}
	</table>
</body>
</html>