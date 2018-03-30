@extends('layouts.base')

@section('title', 'Form')

@section('content')
{{ $input }}
{!! Form::open(['url' => '/form']) !!}
{!! Form::text('username'); !!}
{!! Form::submit('Click Me!'); !!}
{!! Form::close() !!}
@endsection