@extends('layouts.default')

@section('title')
Home
@endsection

<h1>Link List Pages</h1>
<h2>Add Link<a href="/submit">Click here</a></h2>
@foreach ($links as $link)
    <a href="{{ $link->url }}"><h3>{{ $link->title }}</h3></a>
    <a href="{{ action('LinkController@edit', $link->id) }}">Edit</a>
    <ul>
        <li>{{ $link->description }}</li>
    </ul>
@endforeach
