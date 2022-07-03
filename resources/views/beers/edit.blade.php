@extends('layouts.layouts')

@section('title', 'Beer Board')

@section('content')
<form method="POST" action="/beers/{{ $beer->id }}">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
        <input type="text" name="beer_name" value="{{ $beer->beer_name }}">
        <input type="text" name="beer_taste" value="{{ $beer->beer_taste }}">
        <input type="submit">
</form> 
@endsection
