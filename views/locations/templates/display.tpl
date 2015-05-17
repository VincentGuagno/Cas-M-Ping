{# views/sectors/templates/display.tpl #}
	{%extends "layout.tpl" %}

{% block title %}
	Emplacements
{% endblock %}
	
{% block header %}
	Emplacements
{% endblock %}

{% block content %}
	
	<form method="post" ACTION="/Cas-M-Ping/locations/add">
	<button type="submit" > Ajout d'un emplacement </button>
	</form>

	<form method="post" ACTION="/Cas-M-Ping/locations/delete/all">
	<button type="submit" > Suppression des emplacements </button>
	</form>	
	
	<table class="table">
		<tr>
			<th> Numéro d'emplacement </th>
			<th> Secteur </th>
		</tr>
	{% for location in locations %}
		<tr>
			<td>{{location.loc_id}}</td>
			<td>{{location.sec_name}}</td>
		</tr>
	{% endfor %}
	
{% endblock %}