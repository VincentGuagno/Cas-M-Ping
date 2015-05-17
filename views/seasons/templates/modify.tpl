<!DOCTYPE html>
<html>
<head>
	{% block head %}
		{% block stylesheets %}
			<link rel="stylesheet" href="{{bootstrapPath}}">
		{% endblock %}
		<meta charset="utf-8">
		<title>{% block title %}{% endblock %} - Modification saison</title>
	{% endblock %}
</head>
<body>
	<div id="content">{% block content %}{% endblock %}</div>
	<h1>Modification d'une saison </h1>
	
	<form method="post" ACTION="/Cas-M-Ping/seasons/modify/confirm/{{season.seas_id}}">
		
		<label for="name">Nom de saison : </label>
		<input class="form-control" id="name" name="name" value="{{season.seas_name}}" placeholder="{{season.seas_name}}">
		
		<label for="beginDate">Date de debut : </label>
		<input class="form-control" id="beginDate" name="beginDate" value="{{season.seas_start_date}}" placeholder="{{season.seas_start_date}}">
		
		<label for="endDate">Date de fin : </label>
		<input class="form-control" id="endDate" name="endDate" value="{{season.seas_end_date}}" placeholder="{{season.seas_end_date}}">
		
		<label for="coefficient">Coefficient : </label>
		<input class="form-control" id="coefficient" name="coefficient" value="{{season.seas_coeff}}" placeholder="{{season.seas_coeff}}">
		
		<button type="submit" class="btn btn-default">Modifier</button>
	</form>
</body>
</html>