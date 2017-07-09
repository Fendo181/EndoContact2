@extends('layouts.default')

@section('title')
Home
@endsection

<h1>Link List Pages</h1>
<h2>Add Link<a href="/submit">Click here</a></h2>
@foreach ($links as $link)
<div class="panel panel-default">
    <div class="panel-body">
        <h3 ><a href="{{ $link->url }}">{{ $link->title }}</a></h3>
        <a href="{{ action('LinkController@edit', $link->id) }}" class="btn btn-primary">Edit</a>
            {{ csrf_field() }}
            {{ method_field('delete') }}
        <form action="{{ action('LinkController@destroy', $link->id) }}" id="form_{{ $link->id }}" method="post">
        <a href="#" data-id="{{ $link->id }}" onclick="deletePost(this);" class="btn btn-danger">Delete</a>
        </form>
        <ul>
            <li>{{ $link->description }}</li>
        </ul>
    </div>
</div>
@endforeach

<script>
function deletePost(e) {
    'use strict';
    if (confirm('記事を本当に削除しますか?')) {
    document.getElementById('form_' + e.dataset.id).submit();
  }
}
</script>
