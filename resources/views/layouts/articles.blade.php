@extends('layouts.master')

@section('title')
    Articles | Blog
@endsection

@section('content')
    <h2>Articles</h2>
    <h3>=================@@foreach=====================</h3>
    @if ($articles)
        @foreach ($articles as $article)
            @include('articles.index')
        @endforeach
    @else
        @include('articles.no-articles')
    @endif

    <h3>=================@@forelse=====================</h3>

    @forelse($articles as $article)
        @include('articles.index')
    @empty
        @include('articles.no-articles')
    @endforelse
@endsection
