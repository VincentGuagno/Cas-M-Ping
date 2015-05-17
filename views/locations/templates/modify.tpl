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
	
	<form role="form">
		
		<label for="sector">Secteur : </label>
		<input class="form-control" id="sector" placeholder="{{location.sector}}">
		
		<label for="locationType">Type d'emplacement : </label>
		<input class="form-control" id="locationType" placeholder="{{location.locationType}}">
		
		<button type="submit" class="btn btn-default">Modifier</button>
	</form>
{% endblock %}