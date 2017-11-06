@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'clientLocations.store']) !!}

        @include('clientLocations.fields')

    {!! Form::close() !!}
</div>
@endsection
