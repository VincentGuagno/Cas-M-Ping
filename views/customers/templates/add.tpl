<!DOCTYPE html>
<html>
<head>
	{% block head %}
		<link rel="stylesheet" href="dependencies/bootstrap/css/bootstrap.min.css" />
		<title>{% block title %}{% endblock %} - Ajout client</title>
	{% endblock %}
</head>
<body>
	<div id="content">{% block content %}{% endblock %}</div>
	<h1>Ajout d'un clients </h1>
	
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
</body>
</html>