@extends('layouts/main')

@section('content')

    <div class="new-user-form">
        <h3>New Owner</h3>
        <form action="{{ action('OwnerController@update', $owner->id) }}" method="post">
            @csrf
            <label for="first_name">First Name:</label>
                <input type="text" name="first_name" value='{{$owner->first_name}}'><br>
            
            <label for="surname">Surname:</label>
            <input type="text" name="surname" value='{{$owner->surname}}'><br>

            <label for="address">Adress: </label>
            <input type="text" name="address" value='{{$owner->address}}'><br>

            <label for="email">Email: </label>
            <input type="text" name="email" value='{{$owner->email}}'><br>

            <label for="phone_number">Phone Number:</label>
            <input type="text" name="phone_number" value='{{$owner->phone_number}}'><br>

            <button type="submit" class="btn btn-primary">Edit owner</button>
        </form>

        <a href="{{action('OwnerController@show', $owner->id)}}"><button class="btn btn-secondary">Go back to Owner</button></a>
    </div>

@endsection
