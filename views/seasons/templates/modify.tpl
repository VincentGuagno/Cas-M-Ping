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
		
		<label for="name">Nom de saison : </label>
		<input class="form-control" id="name" placeholder="{{season.name}}">
		
		<label for="beginDate">Date de debut : </label>
		<input class="form-control" id="beginDate" placeholder="{{season.beginDate}}">
		
		<label for="endDate">Date de fin : </label>
		<input class="form-control" id="endDate" placeholder="{{season.endDate}}">
		
		<label for="coefficient">Coefficient : </label>
		<input class="form-control" id="coefficient" placeholder="{{season.coefficient}}">
		
		<button type="submit" class="btn btn-default">Modifier</button>
	</form>
</body>
</html>