
@extends('layouts.layouts')

@section('title', 'Beer Board')

@section('content')
    @if (session('message'))
        {{ session('message') }}
    @endif

    {{ $beer->beer_name }}
    {{ $beer->beer_taste }}
@endsection 

