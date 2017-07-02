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
        </div>
        <div class="form-group">
           <label for="url">Url</label>
           <input type="text" class="form-control" id="url" name="url" placeholder="URL">
       </div>
       <div class="form-group">
           <label for="description">Description</label>
           <textarea class="form-control" id="description" name="description" placeholder="description"></textarea>
       </div>
       <button type="submit" class="btn btn-default">Submit</button>
    </form>
    <!-- errorメッセージ  -->
    @if (count($errors) > 0)
        <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
        </div>
    @endif
</div>
@endsection
