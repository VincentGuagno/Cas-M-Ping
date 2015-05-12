<!DOCTYPE html>
<html>
<head>
	{% block head %}
		{% block stylesheets %}
			<link rel="stylesheet" href="{{bootstrapPath}}">
		{% endblock %}
		<meta charset="utf-8">
		<title>{% block title %}{% endblock %} - Secteur</title>
	{% endblock %}
</head>
<body>
	<div id="content">{% block content %}{% endblock %}</div>
	<h1> Secteurs </h1>
	
	{% for sector in sectors %}
		<div>
		{{sector.sec_name}}
		<div id="nav">
			<button class="btn btn-default"> Modifier </button>
			<button class="btn btn-default"> Supprimer </button>
		</div>
		</div>
		<table class="table">
			<tr>
				<th> Numero d'emplacement </th>
				<th> Type de location </th>
			</tr>
		{% for location in sector.sec_id %}
			<tr>
				<td>{{location.loc_id}}</td>
				<td>{{location.type_location_name}}</td>
			</tr>
		{% endfor %}
		<table class="table">
	{% endfor %}
	</table>
</body>
</html>