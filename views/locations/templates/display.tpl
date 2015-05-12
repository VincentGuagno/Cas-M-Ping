<!DOCTYPE html>
<html>
<head>
	{% block head %}
		{% block stylesheets %}
			<link rel="stylesheet" href="{{bootstrapPath}}">
		{% endblock %}
		<title>{% block title %}{% endblock %} - Clients</title>
	{% endblock %}
</head>
<body>
	<div id="content">{% block content %}{% endblock %}</div>
	<h1> Emplacements </h1>
	
	<table class="table">
		<tr>
			<th> Numéro d'emplacement </th>
			<th> Secteur </th>
		</tr>
	{% for location in locations %}
		<tr>
			<td>{{location.sec_name}}</td>
			<td>{{location.sector}}</td>
		</tr>
	{% endfor %}
	</table>
</body>
</html>