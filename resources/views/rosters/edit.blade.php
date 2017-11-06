@extends('layouts.app')

@section('main-content')
<div class="container">

    @include('common.errors')

    {!! Form::model($roster, ['route' => ['rosters.update', $roster->id], 'method' => 'patch']) !!}

        @include('rosters.fields')

    {!! Form::close() !!}
</div>
@endsection
