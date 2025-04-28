@extends('layout.app')

@section( 'content')

    @include('Component.hero')
    @include('Component.howWeDo')
    @include('Component.pricing')
    @include('Component.team')
    @include('Component.newsLatter')

@endsection
