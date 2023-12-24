@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
{!! Form::open(array('route' => 'transaction.store', 'method' => 'POST')) !!}
@csrf
	<ul>
		<li>
			{!! Form::label('user_id', 'User:') !!}
			{!! Form::select('user_id',$users) !!}
		</li>
		<li>
			{!! Form::label('gold_id', 'Gold:') !!}
			{!! Form::select('gold_id',$gold) !!}
		</li>
		<li>
			{!! Form::label('quantity', 'Sell quantity:') !!}
			{!! Form::text('quantity') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}
