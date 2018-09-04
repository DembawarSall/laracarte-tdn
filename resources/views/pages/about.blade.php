@extends('layouts.default', ['title' => 'About '])

@section('content')
    <div class="container">
    	<h2>Qu'est ce que Laracarte?</h2>
    	<p>Laracarte est une clonne app de <a href="https://laramap.com" target="_blank">Laramap.com</a></p>

    	<div class="row">
    		<div class="col-md-6">
    			<p class="alert alert-warning">
    				<strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>This app has been built by <a href="https://twitter.com/etsmo">@etsmo</a> for learning purpose.</strong>
    			</p>
    		</div>
    	</div>

    	<p>Feel free to helpe to improve the <a href="https://github.com/DembawarSall/laracarte-tdn"> source code</a>.</p>

    	<hr>

    	<h2>What is laramap?</h2>
    	<p>Laramap is the website bu whish Laracarte was inspired :).</p>
    	<p>Mor info <a href="https://laramap.com/p/about">here</a>.</p>

    	<hr>

    	<h2>Which tools and services are used in Laracarte?</h2>
    	<p>Basically it's built on Laravel &amp; Bootstrap. But there's a bunch of services used for email and other sections.</p>
    	<ul>
    		<li>Laravel</li>
    		<li>Bootstrap</li>
    		<li>Amazon S3</li>
    		<li>Mandrill</li>
    		<li>Google Maps</li>
    		<li>Gravatar</li>
    		<li>Demba war Sall</li>
    		<li>Serigne Mbacké Diop</li>
    	</ul>

    </div>
@stop