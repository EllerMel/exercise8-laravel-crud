@extends('layout')

@section('content')
    <h1 class="title">Edit Horse</h1>

    <form method="POST" action="/horses/{{ $horse->id }}">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}

        <div class="form-group">
            <label class="label" for="name">Name</label>

            <div class="form">
                <input type="text" class="form-control" name="name" placeholder="Name" value="{{ $horse->name }}">
            </div>
        </div>

        <div class="form-group">
            <label class="label" for="color">Color</label>

            <div class="form">
                <input type="text" class="form-control" name="color" placeholder="Color" value="{{ $horse->color }}">
            </div>
        </div>

        <div class="form-group">
            <label class="label" for="markings">Markings</label>

            <div class="form">
                <input type="text" class="form-control" name="markings" placeholder="Markings" value="{{ $horse->markings }}">
            </div>
        </div>

        <br>

        <div class="field">
            <div class="control">
                <button type="submit" class="btn btn-info">Update Horse</button>
            </div>
        </div>
    
    </form>

    <br>

    <form method="POST" action="/horses/{{ $horse->id }}">
        @method('DELETE')
        @csrf       

        <div class="field">
            <div class="control">
                <button type="submit" class="btn btn-secondary">Delete horse</button>
            </div>
        </div>
    </form>

@endsection