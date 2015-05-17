{# views/sectors/templates/display.tpl #}
	{%extends "layout.tpl" %}

{% block title %}
	Emplacements
{% endblock %}
	
{% block header %}
	Emplacements
{% endblock %}

{% block content %}
	
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