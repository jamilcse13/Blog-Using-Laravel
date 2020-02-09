@extends('layout.app')

@section('content')

<a class="btn btn-success btn-xs" name="export" href="{{ request()->url() . '?' . http_build_query(request()->all() + ['export' => 1]) }}" download>Exports</a>

	@foreach($messages as $message)
		<ul class="list-group p-2">
			<li class="list-group-item">{{ $message->name }}</li>			
			<li class="list-group-item">{{ $message->email }}</li>			
			<li class="list-group-item">{{ $message->subject }}</li>			
			<li class="list-group-item">{{ $message->message }}</li>			
		</ul>
	@endforeach
</div>
@endsection