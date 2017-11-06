@extends('layouts.app')

@section('main-content')
@section('message_level')
Permisos
@endsection
@section('message_level_here')
Editar
@endsection
<div class="container">

    @include('common.errors')

    {!! Form::model($permission, ['route' => ['permissions.update', $permission->id], 'method' => 'patch']) !!}

        @include('permissions.fields')

    {!! Form::close() !!}
</div>
@endsection
