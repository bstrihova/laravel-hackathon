@extends('layouts/main')

@section('content')


<div class="new-animal-form">
    <h3>New Animal</h3>
    <form action="{{ action('AnimalController@store', $owner_id) }}" method="post">
         @csrf
        <label for="name">Name:</label>
            <input type="text" name="name"><br>
        

        <label for="surname">Breed:</label>
        <input type="text" name="breed"><br>
    
        <label for="address">Species: </label>
        <input type="text" name="species"><br>
    
        <label for="email">Age: </label>
        <input type="text" name="age"><br>
    
        <label for="phone_number">Weight:</label>
        <input type="text" name="weight"><br>
    
        <button type="submit" class="btn btn-primary">Add new Animal</button>
    </form>
    <a href="{{action('OwnerController@show', $owner_id)}}"><button class="btn btn-secondary">Go back to Owner</button></a>
</div>
    
@endsection