{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('gold_id', 'Gold_id:') !!}
			{!! Form::text('gold_id') !!}
		</li>
		<li>
			{!! Form::label('transaction_id', 'Transaction_id:') !!}
			{!! Form::text('transaction_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}