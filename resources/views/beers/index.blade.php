@extends('layouts.layouts')

@section('title', 'Beer Board')

@section('content')

<h1>Beer</h1>

@foreach($beers as $beer)
    <a href="/beers/{{ $beer->id }}">{{ $beer->beer_name }}</a>
    <a href="/beers/{{ $beer->id }}/edit">Edit</a>
    
    <form action="/beers/{{ $beer->id }}" method="POST" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button type="submit">Delete</button>
    </form>
@endforeach

<a href="/beers/create">New Beer</a>
@endsection