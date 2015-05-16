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
	{%set rental = rental[0]%}
	
	<div id="content">{% block content %}{% endblock %}</div>
	<h1> Locations {{rental.rent_name}}</h1> </br>
	Locataire : {{rental.cust_name}} </br>
	Nombre de personnes : {{rental.rent_nb_person}} personnes </br>
	Nombre de jours : </br>
	<h2> Emplacement :</h2>
	<table class="table">
		<tr>
			<th> Emplacement </th>
			<th> Type d'emplacement </th>
			<th> Prix </th>
		</tr>
	{% for location in locations %}
		<tr>
			<td>{{location.loc_id}}</td>
			<td>{{location.type_location_name}}</td>
			<td>{{location.type_location_price}} € \ jours</td>
		</tr>
	{% endfor %}
	</table>
	
	<h2> Location de caravanes :</h2>
	<table class="table">
		<tr>
			<th> Nombre de personnes </th>
			<th> Emplacement </th>
			<th> Prix </th>
		</tr>
	{% for caravan in caravans %}
		<tr>
			<td>{{caravan.car_nb_person}}</td>
			<td>{{caravan.car_id_location}}</td>
			<td>{{caravan.car_price}} €</td>
		</tr>
	{% endfor %}
	</table>
	
	<h2> Saison : </h2>
	<table class="table">
		<tr>
			<th> Nom de la saison </th>
			<th> Nombre de jours </th>
			<th> Coefficient </th>
		</tr>
	{% for season in seasons%}
		<tr>
			<td>{{season.seas_name}}</td>
			<td>{{season.seas_end_date - season.seas_start_date}}</td>
			<td>{{season.seas_coeff}}</td>
		</tr>
	{% endfor %}
	</table>
	<div>
		<form method="post" ACTION="/Cas-M-Ping/rentals/modify/{{rental.rent_id}}">
			<button type="submit" > Modifier </button>
		</form>
		<form method="post" ACTION="/Cas-M-Ping/rentals/cancel/{{rental.rent_id}}">
			<button type="submit" > Annuler </button>
		</form>
		<form method="post" ACTION="/Cas-M-Ping/rentals/delete/{{rental.rent_id}}">
			<button type="submit" > Supprimer </button>
		</form>
	</div>
</body>
</html>