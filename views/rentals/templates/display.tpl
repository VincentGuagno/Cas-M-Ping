{# views/rentals/templates/display.tpl #}
	{%extends "layout.twig" %}
	
{% block title %}
	Locations
{% endblock %}

 {% block header %}
	Locations
{% endblock %}

{% block content %}
	<table class="table">
		<tr>
			<th> Identifiant </th>
			<th> Nom </th>
			<th> Client </th>
			<th> Date de début </th>
			<th> Date de fin </th>
			<th> Nombre de personnes </th>
			<th> Etat des lieux </th>
			<th> Caution </th>
			<th> Paiement effectué </th>
			<th> </th>
			<th> </th> 
			<th> </th>
			<th> </th> 
		</tr>
	{% for rental in rentals %}
		<tr>
			<td>{{rental.rent_id}}</td>
			<td>{{rental.rent_name}}</td>
			<td>{{rental.cust_name}}</td>
			<td>{{rental.rent_begin}}</td>
			<td>{{rental.rent_end}}</td>
			<td>{{rental.rent_nb_person}}</td>
			<td>{{rental.rent_location_state}}</td>
			<td>{{rental.rent_caution_state}}</td>
			<td>{{rental.rent_validity}}</td>
			<td> 
				<form method="post" ACTION="/Cas-M-Ping/rentals/modify/{{rental.rent_id}}">
				<button type="submit" > Modifier </button>
				</form>
			</td>
			<td> 
				<form method="post" ACTION="/Cas-M-Ping/rentals/cancel/{{rental.rent_id}}">
				<button type="submit" > Annuler </button>
				</form>
			</td>
			<td> 
				<form method="post" ACTION="/Cas-M-Ping/rentals/delete/{{rental.rent_id}}">
				<button type="submit" > Suppression </button>
				</form>
			</td>
			<td> 
				<form method="post" ACTION="{{rental.rent_id}}">
				<button type="submit" > En savoir plus </button>
				</form>
			</td>
		</tr>
	{% endfor %}
	</table>
{% endblock %}