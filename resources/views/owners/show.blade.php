@extends('layouts/main')

@section('content')

<div class="owner-container">
    <div class="owner">
        <div class="owner__info">
            <h1>{{$owner->surname}} {{$owner->first_name}}</h1>
            <p>Address: {{$owner->address}}</p>
            <p>Telephone: {{$owner->phone_number}}</p>
            <p>E-mail: {{$owner->email}}</p>
        </div>
        <div class="owner__btns">
            <a href={{action('OwnerController@edit', $owner->id) }}><button class="btn btn-warning">Update owner</button></a>
            <a href={{action('OwnerController@index') }}><button class="btn btn-secondary">Go back to owners list</button></a>
        </div> 
    </div>

    <div class="animals">
        <h2>Animals</h2>
        <div class="animals__details"> 
            <a href={{action('AnimalController@create', $owner->id) }}><button class="new-animal-btn">Create a new Animal</button></a>
            @foreach ($owner->animals as $animal)
                <div class="animal-item">
                    <a href=" {{action('AnimalController@show', $animal->id) }}"><img src={{asset($animal->photo)}}></a>
                    <p class="name">{{$animal->name}} </p>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection

