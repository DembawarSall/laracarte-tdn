@extends('layouts.default', ['title' => 'contact '])

@section('content')
    <div class="container">
    	<div class="row">
    		<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
    			<h2>Get In Touch</h2>
    			<p class="text-muted">If you having trouble with this service, please <a href="mailto:wardembasal@gmail.com">ask for help</a>.</p>

    			<form method="POST" action="#">
    				<div class="form-group">
    					<label class="control-label" for="name">Name</label>
    					<input type="text" name="name" class="form-control" id="name" required="required">
    				</div>

    				<div class="form-group">
    					<label class="control-label" for="email">Email</label>
    					<input type="email" name="email" class="form-control" id="email" required="required">
    				</div>

    				<div class="form-group">
    					<label class="control-label sr-only" for="message">Message</label>
    					<textarea type="text" name="message" class="form-control" id="message" required="required" rows="10" cols="10"></textarea>
    				</div>

    				<div class="form-group">
    					<button class="btn btn-primary btn-block">Submit query &raquo;</button>
    				</div>
    			</form>

    		</div>
    	</div>
    </div>
@stop