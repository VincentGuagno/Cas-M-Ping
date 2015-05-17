{# views/rentals/templates/displayId.tpl #}
	{%extends "layout.tpl" %}

{% block header %}
Ajout d'un clients 
{% endblock %}

{% block title %}
Ajout d'un clients 
{% endblock %}

{% block content %}
	
	<form role="form">
		
		<label for="firstName">Prénom : </label>
		<input class="form-control" id="firstName">
		
		<label for="lastName">Nom : </label>
		<input class="form-control" id="lastName">
		
		<label for="zipCode">Code Postal : </label>
		<input class="form-control" id="zipCode">
		
		<label for="city">Code Postal : </label>
		<input class="form-control" id="city">
		
		<label for="telephone">Code Postal : </label>
		<input class="form-control" id="telephone">
		
		<button type="submit" class="btn btn-default">Envoyer</button>
	</form>
{% endblock %}