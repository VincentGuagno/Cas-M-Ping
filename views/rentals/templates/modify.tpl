{# views/rentals/templates/displayId.tpl #}
	{%extends "layout.tpl" %}

{% block header %}
Modification d'une location
{% endblock %}

{% block title %}
Modification d'une location
{% endblock %}

{% block content %}
	
	
	<form method="post" ACTION="/Cas-M-Ping/rentals/modify/confirm/{{rental.rent_id}}"/>
		
		<label for="name">Nom de la location : </label>
		<input class="form-control" id="name" name="name" value="{{rental.rent_name}}" placeholder="{{rental.rent_name}}"><br /><br />
		
		<div class='col-sm-6'>
            <div class="form-group">
                <div class='input-group date' id='beginDate'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
		
		<div class='col-sm-6'>
            <div class="form-group">
                <div class='input-group date' id='endDate'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
		
		<label for="peopleNumber">Nombre de personnes : </label>
		<input class="form-control" id="peopleNumber" name="peopleNumber" value="{{rental.rent_nb_person}}" placeholder="{{rental.rent_nb_person}}"><br /><br />
		
		<label for="paymentState">Etat du paiement : </label>
		<input class="form-control" id="paymentState" name="paymentState" value="{{rental.rent_caution_state}}" placeholder="{{rental.rent_caution_state}}"><br /><br />
		
		<label for="deposit">Tarif : </label>
		<input class="form-control" id="deposit" name="deposit" value="{{rental.rent_price}}" placeholder="{{rental.rent_price}}"><br /><br />
		
		<button type="submit" name="confirmModifyRental" class="btn btn-default">Valider</button>
{% endblock %}