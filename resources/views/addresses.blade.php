{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('country', 'Country:') !!}
			{!! Form::text('country') !!}
		</li>
		<li>
			{!! Form::label('City', 'City:') !!}
			{!! Form::text('City') !!}
		</li>
		<li>
			{!! Form::label('landmark', 'Landmark:') !!}
			{!! Form::text('landmark') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}