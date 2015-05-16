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
	<h1>Création d'une location</h1>
	
	<form role="form" method="post" action="/Cas-M-Ping/rentals/modify/>
		
		<label for="rent_name">Nom de la location : </label>
		<input class="form-control" id="rent_name">
		
		<label for="rent_begin">Date de début : </label>
		<input class="form-control" id="rent_begin">
		
		<label for="rent_end">Date de fin : </label>
		<input class="form-control" id="rent_end">
		
		<label for="rent_nb_person">Nombre de personnes : </label>
		<input class="form-control" id="rent_nb_person">
		
		<label for="rent_location_state">Etat des lieux : </label>
		<input class="form-control" id="rent_location_state">
		
		<label for="rent_caution_state">Caution : </label>
		<input class="form-control" id="rent_caution_state">
		
		<label for="rent_validity">Paiement effectué : </label>
		<input class="form-control" id="rent_validity">
		
		<button type="submit" class="btn btn-default">Paiement effectué</button>
	</form>
</body>
</html>