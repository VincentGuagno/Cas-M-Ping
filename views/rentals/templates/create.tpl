
{% block header %}
Création d'une location
{% endblock %}

{% block title %}
Création d'une location
{% endblock %}

{% block content %}
	
	<form role="form" method="post" action="/Cas-M-Ping/rentals/modify/">
		
		<label for="rent_name">Nom de la location : </label>
		<input class="form-control" id="rent_name">
		
		<label for="rent_begin">Date de début : </label>
		<input class="form-control" id="rent_begin">
		
		<label for="rent_end">Date de fin : </label>
		<input class="form-control" id="rent_end">
		
		<label for="rent_nb_person">Nombre de personnes : </label>
		<input class="form-control" id="rent_nb_person">
		
		<label for="rent_location_state">Etat des lieux : </label>
		<input class="form-control" id="rent_location_state">
		
		<label for="rent_caution_state">Caution : </label>
		<input class="form-control" id="rent_caution_state">
		
		<label for="rent_validity">Paiement effectué : </label>
		<input class="form-control" id="rent_validity">
		
		<button type="submit" class="btn btn-default">Paiement effectué</button>
	</form>
{% endblock %}