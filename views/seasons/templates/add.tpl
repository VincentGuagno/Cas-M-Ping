{# views/rentals/templates/displayId.tpl #}
	{%extends "layout.tpl" %}

{% block header %}
Création d'une saison
{% endblock %}

{% block title %}
Création d'une saison
{% endblock %}

{% block content %}
	<form method="post" ACTION="/Cas-M-Ping/seasons/add/confirm">
		
		<label for="seas_name">Nom de saison : </label>
		<input class="form-control" id="seas_name" name="name" >
		
		<div class="input-append date">
			<label for="seas_date">Date de debut : </label>
			<input type="text" value="2012-07-22" class="form-control" id="seas_date" name="beginDate" >
			<span class="add-on"><i class="icon-th"></i></span>
		</div>
		
		<div class="input-append date">
			<label for="endDate">Date de fin : </label>
			<input type="text" value="2012-09-10" class="form-control" id="endDate" name="endDate" >
			<span class="add-on"><i class="icon-th"></i></span>
		</div>
		
		<label for="coefficient">Coefficient : </label>
		<input class="form-control" id="coefficient" name="coefficient" >
		
		<button type="submit" class="btn btn-default">Envoyer</button>
	</form>
{% endblock %}