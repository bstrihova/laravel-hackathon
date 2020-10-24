@extends('layouts/main')

@section('content')

<form action="{{ action('OwnerController@store') }}" method="post">
    
@csrf
    <label for="first_name">First Name:
        <input type="text" name="first_name" value='{{$owner->first_name}}'>
    </label><br>
    <label for="surname">Surname:</label>
    <input type="text" name="surname" value='{{$owner->surname}}'><br>

    <label for="address">Adress: </label>
    <input type="text" name="address" value='{{$owner->address}}'><br>

    <label for="email">Email: </label>
    <input type="text" name="email" value='{{$owner->email}}'><br>

    <label for="phone_number">Phone Number:</label>
    <input type="text" name="phone_number" value='{{$owner->phone_number}}'><br>

    <button type="submit">Edit owner</button>
</form>

<a href={{action('OwnerController@show', $owner->id)}}>Go back to Animal</a>

@endsection
