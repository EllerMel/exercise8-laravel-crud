@extends('layout')

@section('content')
<div class="row">
  <div class="col"><h1>Horses</h1></div>
  <div class="col"></div>
  <div class="col"><a href="/horses/create" class="btn btn-secondary">Add Horse</a></div>
</div>

<br>

    <div class="row">
        <div class="col"><strong>Horse Name</strong></div>
        <div class="col"><strong>Color</strong></div>
        <div class="col"><strong>Markings</strong></div>
        <div class="col"><strong>Edit</strong></div>        
    </div>

@foreach($horses as $horse)
    <div class="row">
        <div class="col">{{ $horse->name }}</div>
        <div class="col">{{ $horse->color }}</div>
        <div class="col">{{ $horse->markings }}</div>
        <div class="col"><a href="/horses/{{ $horse->id }}/edit" class="btn btn-info btn-sm">Edit</a></div>
    </div>
@endforeach

@endsection