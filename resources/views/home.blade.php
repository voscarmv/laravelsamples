@extends('layouts.base')

@section('title', 'What ideology is this?')

@section('content')
<h1>ｗｅｌｃｏｍｅ</h1>
<p>These are some experiments I made using Laravel. The source is on <a href="https://github.com/vomv1988/laravelsamples">github</a>.</p>
<ul>
<li><a href="/unixfortune">Free UNIX fortunes for everyone.</a> Every time the page loads it displays the output of the unix 'fortune' command. March 24, 2018.</li>
<li><a href="/brownmadlibs">Madlibs with the Brown corpus.</a>  Takes a random sentence from the <a href="https://en.wikipedia.org/wiki/Brown_Corpus">Brown corpus</a> and replaces each of it's words with another one of the same grammatical category. <a href="https://github.com/vomv1988/brown"> Source here.</a> March 24, 2018.</li>
</ul>
@endsection