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
		
		<label for="locationType">Type d'emplacement : </label>
		<input class="form-control" id="locationType">
		
		<label for="sector">Secteur : </label>
		<input class="form-control" id="loc_sec_id">
		<select id="loc_type_id">
		{% for typeLocation in typeLocations %}
		<option value="{%type_location_id%}">{%type_location_name%}</option>
		{% endblock %}
		</select> 
		<button type="submit" class="btn btn-default">Envoyer</button>
	</form>
{% endblock %}