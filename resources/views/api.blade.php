@extends('layout.app')

@section('content')
	<h1>API Testing Page</h1>
	<h3>Fill the box</h3>

	<form method="POST" action="{{ route('api-form-submit') }}">
		@csrf

	  <div class="form-group">
		<label for="country">Country</label>
		<input type="text" class="form-control" name="country" id="country" placeholder="Enter Country Name">
	  </div>
	  <div class="form-group">
	    <label for="continent">Continent</label>
	    <input type="text" class="form-control" name="continent" id="continent" placeholder="Enter Continent Name">
	  </div>
	  <div class="form-group">
	  	<label for="ranking">Population Ranking</label>
	    <input type="text" class="form-control" name="ranking" id="ranking" placeholder="Enter Ranking">
	  </div>
	  <div class="form-group">
	  	<label for="language">Language</label>
	    <input type="text" class="form-control" name="language" id="language" placeholder="Enter Language">
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
@endsection