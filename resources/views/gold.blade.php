{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('type', 'Type:') !!}
			{!! Form::text('type') !!}
		</li>
		<li>
			{!! Form::label('inventory_type', 'Inventory_type:') !!}
			{!! Form::text('inventory_type') !!}
		</li>
		<li>
			{!! Form::label('weight', 'Weight:') !!}
			{!! Form::text('weight') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}