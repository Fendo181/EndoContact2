@extends('layouts.default')


@section('title')
遠藤連絡2
@endsection

@section('img1')
<img src="{{ asset('images/logo1.png') }}" alt="logo1" width="600" height="400">
@endsection

@section('content')
<div class="row">
    <a href="/post" class="col-md-6 btn btn-primary btn-lg ">遠藤に連絡する。</a>
    <a href="" class="col-md-6 btn btn-default btn-lg ">遠藤に連絡しない。</a>
</div>
@endsection
