@extends('layouts.default', ['title' => 'contact '])

@section('content')
    <div class="container">
    	<div class="row">
    		<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
    			<h2>Entrer en contact</h2>
    			<p class="text-muted">Si vous rencontrez des problèmes avec ce service, veuillez <a href="mailto:{{ config('laracarte.admin_email') }}">demander de l'aide </a>.</p>

    			<form method="POST" action="{{ route('contact_path') }}">
    				{{ csrf_field() }}

    				<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    					<label class="control-label" for="name">Nom</label>
    					<input type="text" name="name" class="form-control" id="name" required="required" value="{{ old('name') }}">
    					{!! $errors->first('name', '<span class="help-block">:message</span>') !!}
    				</div>

    				<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
    					<label class="control-label" for="email">Email</label>
    					<input type="email" name="email" class="form-control" id="email" required="required" value="{{ old('email') }}">
    					{!! $errors->first('email', '<span class="help-block">:message</span>') !!}
    				</div>

    				<div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
    					<label class="control-label sr-only" for="message">Message</label>
    					<textarea type="text" name="message" class="form-control" id="message" required="required" rows="10" cols="10">{{ old('message') }}</textarea>
    					{!! $errors->first('message', '<span class="help-block">:message</span>') !!}
    				</div>

    				<div class="form-group">
    					<button class="btn btn-primary btn-block" type="submit">Envoyer &raquo;</button>
    				</div>
    			</form>

    		</div>
    	</div>
    </div>
@stop