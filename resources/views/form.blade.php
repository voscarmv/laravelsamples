@extends('layouts.base')

@section('title', 'Form')

@section('content')
<big>Post something on this page for the whole world wide web to see:</big>
{!! Form::open(['url' => '/form']) !!}
{!! Form::text('username', '', ['maxlength'=>256]); !!}
{!! Form::submit('Post'); !!}
{!! Form::close() !!}

<ul>
@foreach ($input as $in)
<li><b>{{ $in->created_at }}</b> {{ $in->name }}</li>
@endforeach
</ul>
@endsection