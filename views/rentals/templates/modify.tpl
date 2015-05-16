<!DOCTYPE html>
<html>
<head>
	{% block head %}
		{% block stylesheets %}
			<link rel="stylesheet" href="{{bootstrapPath}}">
		{% endblock %}
		<meta charset="utf-8">
		<title>{% block title %}{% endblock %} - Ajout client</title>
	{% endblock %}
</head>
<body>
	<div id="content">{% block content %}{% endblock %}</div>
	<h1>Modification d'une location </h1>
	
	<form method="post" ACTION="/Cas-M-Ping/rentals/modify/confirm/{{rental.rent_id}}"/>
		
		<label for="name">Nom de la location : </label>
		<input class="form-control" id="name" placeholder="{{rental.rent_name}}"><br /><br />
		
		<label for="beginDate">Date de début : </label>
		<input class="form-control" id="beginDate" placeholder="{{rental.rent_begin}}"><br /><br />
		
		<label for="endDate">Date de fin : </label>
		<input class="form-control" id="endDate" placeholder="{{rental.rent_end}}"><br /><br />
		
		<label for="peopleNumber">Nombre de personnes : </label>
		<input class="form-control" id="peopleNumber" placeholder="{{rental.rent_nb_person}}"><br /><br />
		
		<label for="paymentState">Etat du paiement : </label>
		<input class="form-control" id="paymentState" placeholder="{{rental.rent_caution_state}}"><br /><br />
		
		<label for="deposit">Tarif : </label>
		<input class="form-control" id="deposit" placeholder="{{rental.rent_price}}"><br /><br />
		
		<button type="submit" class="btn btn-default">Valider</button>
	</form>
</body>
</html>