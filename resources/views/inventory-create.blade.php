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
{!! Form::open(['route' => 'inventory.store', 'method' => 'POST']) !!}
@csrf
<ul>
    <li>
        {!! Form::label('quantities', 'Quantities:') !!}
        {!! Form::text('quantity') !!}
    </li>
    <li>
        {!! Form::label('gold_id', 'Gold_id:') !!}
        {!! Form::select('gold_id', $gold) !!}
    </li>
    <li>
        {!! Form::submit() !!}
    </li>
</ul>
{!! Form::close() !!}
