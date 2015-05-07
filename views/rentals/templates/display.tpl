<!DOCTYPE html>
<html>
<head>
	{% block head %}
		<link rel="stylesheet" href="dependencies/bootstrap/css/bootstrap.min.css" />
		<title>{% block title %}{% endblock %} - Clients</title>
	{% endblock %}
</head>
<body>
	<div id="content">{% block content %}{% endblock %}</div>
	<h1> Clients </h1>
	
	<table class="table">
		<tr>
			<th> Nom </th>
			<th> Client </th>
			<th> Date de début </th>
			<th> Date de fin </th>
			<th> Nombre de personnes </th>
			<th> Etat des lieux </th>
			<th> Etat du paiement </th>
			<th> Caution </th>
		</tr>
	{% for rental in rentals %}
		<tr>
			<td>{{rental.name}}</td>
			<td>{{rental.customer}}</td>
			<td>{{rental.beginDate}}</td>
			<td>{{rental.endDate}}</td>
			<td>{{rental.peopleNumber}}</td>
			<td>{{rental.inventory}}</td>
			<td>{{rental.paymentState}}</td>
			<td>{{rental.deposit}}</td>
		</tr>
	{% endfor %}
	</table>
</body>
</html>