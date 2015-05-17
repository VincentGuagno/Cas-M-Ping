{# views/sectors/templates/display.tpl #}
	{%extends "layout.tpl" %}

{% block title %}
	Location d'une caravane
{% endblock %}
	
{% block header %}
	Location d'une caravane
{% endblock %}

{% block content %}
	
	<form role="form">
		
		<label for="compagny">Nom de la société : </label>
		<input class="form-control" id="compagny">
		
		<label for="price">Prix : </label>
		<input class="form-control" id="price">
		
		<label for="size">Nombre de personne : </label>
		<input class="form-control" id="size">
		
		<label for="location">Emplacement : </label>
		<input class="form-control" id="location">
		
		<button type="submit" class="btn btn-default">Envoyer</button>
	</form>
{% endblock %}