@extends('layouts.default')
@section('content')

@section('content')
<div class="row">
    <h1>Submit a link</h1>
    <form class="/submit" method="post">
        {!! csrf_field() !!}
        <div class="form-groupe">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Title">
            @if ($errors->has('title'))
                <div class="alert alert-danger">{{ $errors->first('title') }}</div>
            @endif
        </div>
        <div class="form-group">
           <label for="url">Url</label>
           <input type="text" class="form-control" id="url" name="url" placeholder="URL">
           @if ($errors->has('url'))
               <div class="alert alert-danger">{{ $errors->first('url') }}</div>
           @endif
       </div>
       <div class="form-group">
           <label for="description">Description</label>
           <textarea class="form-control" id="description" name="description" placeholder="description"></textarea>
           @if ($errors->has('description'))
               <div class="alert alert-danger">{{ $errors->first('description') }}</div>
           @endif
       </div>
       <button type="submit" class="btn btn-default">Submit</button>
    </form>
@endsection
