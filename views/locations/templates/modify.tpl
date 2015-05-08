<!DOCTYPE html>
<html>
<head>
	{% block head %}
		<link rel="stylesheet" href="dependencies/bootstrap/css/bootstrap.min.css" />
		<title>{% block title %}{% endblock %} - Ajout client</title>
	{% endblock %}
</head>
<body>
	<div id="content">{% block content %}{% endblock %}</div>
	<h1>Ajout d'un clients </h1>
	
	<form role="form">
		
		<label for="sector">Secteur : </label>
		<input class="form-control" id="sector" placeholder="{{location.sector}}">
		
		<label for="locationType">Type d'emplacement : </label>
		<input class="form-control" id="locationType" placeholder="{{location.locationType}}">
		
		<button type="submit" class="btn btn-default">Modifier</button>
	</form>
</body>
</html>