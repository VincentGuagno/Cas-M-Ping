<!DOCTYPE html>
<html lang="fr">
<head>
	{% block head %}
		{% block stylesheets %}
			<link rel="stylesheet" href="{{bootstrapPath}}">
		{% endblock %}
		<meta charset="utf-8">
		<title>{% block title %}{% endblock %} - Clients</title>
	{% endblock %}
</head>
<body>
	<div id="content">{% block content %}{% endblock %}</div>
	<h1> Clients </h1>
	
	<table class="table">
		<tr>
			<th> Identifiant </th>
			<th> Numéro de dossier </th>
			<th> Nom </th>
			<th> Prénom </th>
			<th> Code Postal </th>
			<th> Ville </th>
			<th> Téléphone </th>
		</tr>
	{% for customer in customers %}
		<tr>
			<td>{{customer.cust_id}}</td>
			<td>{{customer.cust_record_number}}</td>
			<td>{{customer.cust_name}}</td>
			<td>{{customer.cust_name}}</td>
			<td>{{customer.cust_postal_code}}</td>
			<td>{{customer.cust_city}}</td>
			<td>{{customer.cust_phone_number}}</td>
		</tr>
	{% endfor %}
	</table>
</body>
</html>