@extends('layout')

@section('content')

    <h1>Add a New Horse</h1>

    <form method="POST" action="/horses">
    {{ csrf_field() }}
        <div>
            <input type="text" class="form-control" name="name" placeholder="Horse name">
        </div>

        <br>

        <div>
            <input type="text" class="form-control" name="color" placeholder="Horse color">
        <div>

        <br>

        <div>
            <input type="text" class="form-control" name="markings" placeholder="Horse markings">
        <div>

        <br>

        <div>
            <button type="submit"class="btn btn-info">Add Horse</button>
        </div>
    </form>

@endsection