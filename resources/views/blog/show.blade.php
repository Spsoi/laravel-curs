@extends('layouts.base')

@section('page.title')
    {{$post->title}}
@endsection

@section('content')
    <h1 class="mb-5"> {{$post->title}} </h1>
    <p> {{$post->content}}</p>
@endsection