{# views/sectors/templates/display.tpl #}
	{%extends "layout.tpl" %}

{% block title %}
	Secteurs
{% endblock %}
	
{% block header %}
	Secteurs
{% endblock %}

{% block content %}
	{% for sector in sectors %}
		<div>
		{{sector.sec_name}}
		<td> 
			<form method="post" ACTION="/Cas-M-Ping/sectors/modify/{{sector.sec_id}}">
			<button type="submit" > Modifier </button>
			</form>
		</td>
		<td> 
			<form method="post" ACTION="/Cas-M-Ping/sectors/supprimer/{{sector.sec_id}}">
			<button type="submit" > Supprimer </button>
			</form>
		</td>
		</div>
		<table class="table">
			<tr>
				<th> Numero d'emplacement </th>
				<th> Type d'emplacement </th>
			</tr>
		{% for location in locations if location.loc_sec_id == sector.sec_id%}
			<tr>
				<td>{{location.loc_id}}</td>
				<td>{{location.type_location_name}}</td>
			</tr>
		{% endfor %}
		</table>
	{% endfor %}
{% endblock %}