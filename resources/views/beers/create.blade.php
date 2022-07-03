@extends('layouts.layouts')

@section('title', 'Beer Board')

@section('content')
    <form method="POST" action="/beers">
        {{ csrf_field() }}
        <input type="text" name="beer_name">
        <input type="text" name="beer_taste">
        <input type="submit">
    </form>
@endsection

