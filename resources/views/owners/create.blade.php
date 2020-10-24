@extends('layouts/main')

@section('content')

    <div class="new-user-form">
        <h3>New Owner</h3>
        <form action="{{ action('OwnerController@store') }}" method="post">
        @csrf
            <label for="first_name">First Name:</label>
                <input type="text" name="first_name"><br>
            
            <label for="surname">Surname:</label>
            <input type="text" name="surname"><br>

            <label for="address">Adress: </label>
            <input type="text" name="address"><br>

            <label for="email">Email: </label>
            <input type="text" name="email"><br>

            <label for="phone_number">Phone Number:</label>
            <input type="text" name="phone_number"><br>

            <button type="submit" class="btn btn-primary">Add new owner</button>
        </form>
        <a href="{{action('OwnerController@index')}}"><button class="btn btn-secondary">Go back to Owners list</button></a>
    </div>
@endsection