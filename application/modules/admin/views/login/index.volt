{% extends "layouts/layout.volt" %}

{% block title %}Admin{% endblock %}

{% block navigation %}
{% endblock %}

{% block content %}
    {{ content() }}
    <div id="login-block">
        <form method="post">
            {{ form.render('login') }}
            {{ form.render('password') }}
            {{ form.render('submit') }}
        </form>
    </div>
{% endblock %}