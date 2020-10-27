@extends('layouts/main')

@section('content')

<h1>Delete animal: {{$animal->name}}</h1>
<form action={{action("AnimalController@destroy", $animal->id)}} method="POST">
    @csrf
    @method("DELETE")
    Are you sure you want to delete animal: {{$animal->name}}?

    <button type="submit">Delete</button>

</form>

@endsection