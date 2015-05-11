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
		
		<label for="compagny">Nom de la société : </label>
		<input class="form-control" id="compagny">
		
		<label for="price">Prix : </label>
		<input class="form-control" id="price">
		
		<label for="size">Nombre de personne : </label>
		<input class="form-control" id="size">
		
		<label for="location">Emplacement : </label>
		<input class="form-control" id="location">
		
		<button type="submit" class="btn btn-default">Envoyer</button>
	</form>
</body>
</html>