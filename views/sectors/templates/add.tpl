{# views/sectors/templates/display.tpl #}
	{%extends "layout.twig" %}

{% block title %}
	Ajout de secteur
{% endblock %}
	
{% block header %}
	Ajout de secteur
{% endblock %}

{% block content %}
	<form method="post" ACTION="/Cas-M-Ping/seasons/add/confirm">
		
		<label for="sec_name">Nom de saison : </label>
		<input class="form-control" id="seas_name">
		
		<button type="submit" class="btn btn-default">Envoyer</button>
	</form>
{% endblock %}