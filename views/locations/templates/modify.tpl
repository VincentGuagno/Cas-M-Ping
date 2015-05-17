{# views/sectors/templates/display.tpl #}
	{%extends "layout.tpl" %}

{% block title %}
	Modification d'un emplacement
{% endblock %}
	
{% block header %}
	Modification d'un emplacement
{% endblock %}

{% block content %}
	<div id="content">{% block content %}{% endblock %}</div>
	
	<form role="form" ACTION="/Cas-M-Ping/locations/modify/confirm/{{location.sec_id}}">
	
		<label for="loc_sec_id">Secteur : </label>
		<select selectedIndex="{{sector.loc_sec_id}}" id="loc_sec_id" name="sector">
		{% for sector in sectors %}
		<option value="{{sector.sec_id}}">{{sector.sec_name}}</option>
		{% endfor %}
		</select> 
		
		
		<label for="loc_type_id">Type d'emplacement : </label>
		<select selectedIndex="{{sector.loc_type_id}}" id="loc_type_id" name="location">
		{% for typeLocation in typeLocations %}
		<option value="{{typeLocation.type_location_id}}">{{typeLocation.type_location_name}}</option>
		{% endfor %}
		</select>
		
		<button type="submit" class="btn btn-default">Modifier</button>
	</form>
{% endblock %}