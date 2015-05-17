{# views/sectors/templates/display.tpl #}
	{%extends "layout.twig" %}

{% block title %}
	Modification de secteur
{% endblock %}
	
{% block header %}
	Modification de secteur
{% endblock %}

{% block content %}
		
		<label for="sec_name">Nom de saison : </label>
		<input class="form-control" id="sec_name" name="sec_name" placeholder="{{sector.sec_name}}>
		
		<button type="submit" class="btn btn-default">Envoyer</button>
	</form>
{% endblock %}