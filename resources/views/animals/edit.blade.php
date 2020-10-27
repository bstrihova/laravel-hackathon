@extends('layouts/main')

@section('content')

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<div class="new-animal-form">
    <h3>Edit animal: {{$animal->name}}</h3>
    <form action="{{ action('AnimalController@update', $animal->id) }}" method="POST">
         @csrf
         @method("PUT")
        <label for="name">Name:</label>
        <input type="text" name="name" value={{$animal->name}}><br> 

        <label for="surname">Breed:</label>
        <input type="text" name="breed" value={{$animal->breed}}><br>
    
        <label for="address">Species: </label>
        <input type="text" name="species" value={{$animal->species}}><br>
    
        <label for="email">Age: </label>
        <input type="text" name="age" value={{$animal->age}}><br>
    
        <label for="phone_number">Weight:</label>
        <input type="text" name="weight" value={{$animal->weight}}><br>
    
        <button type="submit" class="btn btn-primary">Edit Animal</button>
    </form>
    <a href={{action('AnimalController@show', $animal->id)}}><button class="btn btn-secondary">Go back to Animal</button></a>
</div>

@endsection
