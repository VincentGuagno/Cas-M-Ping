<!DOCTYPE html>
<html>
<head>
	{% block head %}
		<link rel="stylesheet" href="dependencies/bootstrap/css/bootstrap.min.css" />
		<title>{% block title %}{% endblock %} - Secteur</title>
	{% endblock %}
</head>
<body>
	<div id="content">{% block content %}{% endblock %}</div>
	<h1> Secteurs </h1>
	
	{% for sector in sectors %}
		<div>
		{{sector.name}}
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
		{% for location in sector.locations %}
			<tr>
				<td>{{location.id}}</td>
				<td>{{location.locationType}}</td>
			</tr>
		{% endfor %}
		<table class="table">
	{% endfor %}
	</table>
</body>
</html>