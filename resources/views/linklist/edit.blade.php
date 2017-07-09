@extends('layouts.default')

@section('title')
Edit
@endsection

@section('content')
<div class="row">
    <h1>Edit Submit a link</h1>
    <form method="post"  action="{{ url('/link', $link->id)}}" >
        {!! csrf_field() !!}
        {!! method_field('patch') !!}

        <div class="form-groupe">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{ old('title',$link->title) }}">
            @if ($errors->has('title'))
                <div class="alert alert-danger">{{ $errors->first('title') }}</div>
            @endif
        </div>
        <div class="form-group">
           <label for="url">Url</label>
           <input type="text" class="form-control" id="url" name="url" placeholder="URL" value="{{ old('title',$link->url) }}">
           @if ($errors->has('url'))
               <div class="alert alert-danger">{{ $errors->first('url') }}</div>
           @endif
       </div>
       <div class="form-group">
           <label for="description">Description</label>
           <textarea class="form-control" id="description" name="description" placeholder="description">{{ old('description',$link->description) }}</textarea>
           @if ($errors->has('description'))
               <div class="alert alert-danger">{{ $errors->first('description') }}</div>
           @endif
       </div>
       <button type="submit" class="btn btn-success">Update</button>
       <a href="{{ url('/') }}" class="btn btn-default" role="button">Back</a>
    </form>
@endsection
