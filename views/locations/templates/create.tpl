{# views/sectors/templates/display.tpl #}
	{%extends "layout.tpl" %}

{% block title %}
	Création d'un emplacement
{% endblock %}
	
{% block header %}
	Création d'un emplacement
{% endblock %}

{% block content %}
	<form method="post" ACTION="/Cas-M-Ping/rentals/add/confirm">
		
		<label for="loc_sec_id">Secteur : </label>
		<select id="loc_sec_id">
		{% for sector in sectors %}
		<option value="{{sec_id}}">{{sec_name}}</option>
		{% endfor %}
		</select> 
		
		
		<label for="loc_type_id">Type d'emplacement : </label>
		<select id="loc_type_id">
		{% for typeLocation in typeLocations %}
		<option value="{{type_location_id}}">{{type_location_name}}</option>
		{% endfor %}
		</select> 
		
		<button type="submit" class="btn btn-default">Envoyer</button>
	</form>
{% endblock %}