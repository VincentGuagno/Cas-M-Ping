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
		<div id="nav">
			<button class="btn btn-default"> Modifier </button>
			<button class="btn btn-default"> Supprimer </button>
		</div>
		</div>
		<table class="table">
			<tr>
				<th> Numero d'emplacement </th>
				<th> Type de location </th>
			</tr>
		{% for location in sector.sec_id %}
			<tr>
				<td>{{location.loc_id}}</td>
				<td>{{location.type_location_name}}</td>
			</tr>
		{% endfor %}
		</table>
	{% endfor %}
{% endblock %}