{# views/sectors/templates/display.tpl #}
	{%extends "layout.twig" %}

{% block title %}
	Ajout de secteur
{% endblock %}
	
{% block header %}
	Ajout de secteur
{% endblock %}

{% block content %}
	<form method="post" ACTION="/Cas-M-Ping/sectors/add/confirm">
		
		<label for="sec_name">Nom de secteur : </label>
		<input class="form-control" id="sec_name" name="name">
		
		<button type="submit" class="btn btn-default">Envoyer</button>
	</form>
{% endblock %}