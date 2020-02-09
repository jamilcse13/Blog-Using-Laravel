@extends('layout.app')

@section('content')
	<h1>Contact Us</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat.</p>

	<form method="POST" action="{{ route('contact-form-submit') }}">
		@csrf

	  <div class="form-group">
		<label for="name">Name:</label>
		<input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
	  </div>
	  <div class="form-group">
	    <label for="email">Email address</label>
	    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
	    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
	  </div>
	  <div class="form-group">
	  	<label for="subject">Subject</label>
	    <input type="text" class="form-control" name="subject" id="subject" placeholder="Your Subject">
	  </div>
	  <div class="form-group">
	  	<label for="message">Message</label>
	    <textarea class="form-control" name="message" id="message" placeholder="Write your message" row= "3"></textarea>
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
@endsection