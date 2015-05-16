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
	<h1>Modification d'une location </h1>
	
	<form role="form" method="post" action="/Cas-M-Ping/rentals/modify/>
		
		<label for="name">Nom de la location : </label>
		<input class="form-control" id="name" placeholder="{{rental.name}}">
		
		<label for="beginDate">Date de début : </label>
		<input class="form-control" id="beginDate" placeholder="{{rental.beginDate}}">
		
		<label for="endDate">Date de fin : </label>
		<input class="form-control" id="endDate" placeholder="{{rental.endDate}}">
		
		<label for="peopleNumber">Nombre de personnes : </label>
		<input class="form-control" id="peopleNumber" placeholder="{{rental.peopleNumber}}">
		
		<label for="inventory">Etat des lieux : </label>
		<input class="form-control" id="inventory" placeholder="{{rental.inventory}}">
		
		<label for="paymentState">Etat du paiement : </label>
		<input class="form-control" id="paymentState" placeholder="{{rental.paymentState}}">
		
		<label for="deposit">Caution : </label>
		<input class="form-control" id="deposit" placeholder="{{rental.deposit}}">
		
		<button type="submit" class="btn btn-default">Modifier</button>
	</form>
</body>
</html>