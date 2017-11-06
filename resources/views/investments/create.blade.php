@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'investments.store']) !!}

        @include('investments.fields')

    {!! Form::close() !!}
</div>
@endsection
