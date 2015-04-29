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
		<input class="form-control" id="firstName" placeholder="{{customer.firstName}}">
		
		<label for="lastName">Nom : </label>
		<input class="form-control" id="lastName" placeholder="{{customer.lastName}}">
		
		<label for="zipCode">Code Postal : </label>
		<input class="form-control" id="zipCode" placeholder="{{customer.zipCode}}">
		
		<label for="city">Code Postal : </label>
		<input class="form-control" id="city" placeholder="{{customer.city}}">
		
		<label for="telephone">Code Postal : </label>
		<input class="form-control" id="telephone" placeholder="{{customer.telephone}}">
		
		<button type="submit" class="btn btn-default">Modifier</button>
	</form>
</body>
</html>