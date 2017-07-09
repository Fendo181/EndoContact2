@extends('layouts.default')

@section('title')
Home
@endsection

<h1>Link List Pages</h1>
<h2>Add Link<a href="/submit">Click here</a></h2>
@foreach ($links as $link)
    <a href="{{ $link->url }}"><h3>{{ $link->title }}</h3></a>
    <a href="{{ action('LinkController@edit', $link->id) }}">Edit</a>
    <form action="{{ action('LinkController@destroy', $link->id) }}" id="form_{{ $link->id }}" method="post">
    {{ csrf_field() }}
    {{ method_field('delete') }}
    <a href="#" data-id="{{ $link->id }}" onclick="deletePost(this);">Delete</a>
    </form>
    <ul>
        <li>{{ $link->description }}</li>
    </ul>
@endforeach

<script>
function deletePost(e) {
    'use strict';
    if (confirm('記事を本当に削除しますか?')) {
    document.getElementById('form_' + e.dataset.id).submit();
  }
}
</script>
