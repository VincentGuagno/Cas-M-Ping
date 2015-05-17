{# views/sectors/templates/display.tpl #}
	{%extends "layout.tpl" %}

{% block title %}
	Création d'un emplacement
{% endblock %}
	
{% block header %}
	Création d'un emplacement
{% endblock %}

{% block content %}
	<form role="form">
		
		<label for="locationType">Type d'emplacement : </label>
		<input class="form-control" id="locationType">
		
		<label for="sector">Secteur : </label>
		<input class="form-control" id="sector">
		
		<button type="submit" class="btn btn-default">Envoyer</button>
	</form>
</body>
</html>