{# views/sectors/templates/display.tpl #}
	{%extends "layout.tpl" %}

{% block title %}
	Caravanes
{% endblock %}
	
{% block header %}
	Caravanes
{% endblock %}

{% block content %}
	
	<table class="table">
		<tr>
			<th> Identifiant </th>
			<th> Société </th>
			<th> Prix </th>
			<th> Nombre de personnes </th>
			<th> Emplacement </th>
		</tr>
	{% for caravan in caravans %}
		<tr>
			<td>{{caravan.car_id}}</td>
			<td>{{caravan.car_society_name}}</td>
			<td>{{caravan.car_price}}</td>
			<td>{{caravan.car_nb_person}}</td>
			<td>{{caravan.car_id_location}}</td>
		</tr>
	{% endfor %}
	</table>
{% endblock %}