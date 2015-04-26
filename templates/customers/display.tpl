<!DOCTYPE html>
<html>
<head>
	{% block head %}
		<link rel="stylesheet" href="style.css" />
		<title>{% block title %}{% endblock %} - Clients</title>
	{% endblock %}
</head>
<body>
	<div id="content">{% block content %}{% endblock %}</div>
	<h1> Clients </h1>
	
	<table class="table">
		<tr>
			<th> Numéro de dossier </th>
			<th> Nom </th>
			<th> Prénom </th>
			<th> Code Postal </th>
			<th> Ville </th>
			<th> Téléphone </th>
		</tr>
	{% for customer in customers %}
		<tr>
			<td>{{customer.renting_Id}}</td>
			<td>{{customer.firstName}}</td>
			<td>{{customer.lastName}}</td>
			<td>{{customer.zipCode}}</td>
			<td>{{customer.city}}</td>
			<td>{{customer.telephone}}</td>
		</tr>
	{% endfor %}
	</table>
</body>
</html>