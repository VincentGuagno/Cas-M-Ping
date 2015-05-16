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
	<h1> Locations </h1>
	
	<table class="table">
		<tr>
			<th> Identifiant </th>
			<th> Nom </th>
			<th> Client </th>
			<th> Date de début </th>
			<th> Date de fin </th>
			<th> Nombre de personnes </th>
			<th> Etat des lieux </th>
			<th> Etat du paiement </th>
			<th> Caution </th>
			<th> </th>
			<th> </th> 
		</tr>
	{% for rental in rentals %}
		<tr>
			<td>{{rental.rent_id}}</td>
			<td>{{rental.rent_name}}</td>
			<td>{{rental.rent_cust_id}}</td>
			<td>{{rental.rent_begin}}</td>
			<td>{{rental.rent_end}}</td>
			<td>{{rental.rent_nb_person}}</td>
			<td>{{rental.rent_location_state}}</td>
			<td>{{rental.rent_caution_state}}</td>
			<td>{{rental.deposit}}</td>
			<td> 
				<form method="link" ACTION="/Cas-M-Ping/rentals/modify/{{rental.rent_id}}">
				<button type="submit" > Modifier </button>
				</form>
			</td>
			<td> 
				<form method="link" ACTION="/Cas-M-Ping/rentals/cancel/{{rental.rent_id}}">
				<button type="submit" > Annuler </button>
				</form>
			</td>
			<td> 
				<form method="link" ACTION="/Cas-M-Ping/rentals/delete/{{rental.rent_id}}">
				<button type="submit" > Suppression </button>
				</form>
			</td>
			<td> 
				<form method="link" ACTION="{{rental.rent_id}}">
				<button type="submit" > En savoir plus </button>
				</form>
			</td>
		</tr>
	{% endfor %}
	</table>
</body>
</html>