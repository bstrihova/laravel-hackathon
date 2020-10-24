@extends('layouts/main')

@section('content')

<div class="animal">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    
    <div class="animal-container">
        <div class="animal-card">
            <img src={{asset($animal->photo)}}>    
            <h1> {{ $animal->name }}</h1>
        </div>
        <div class="animal-details">
            <div class="animal-info">
                <p><strong>Age:</strong> <span>{{ $animal->age }}</span></p>
                <p><strong>Weight:</strong> <span>{{ $animal->weight }} Lbs</span> </p>
                <p><strong>Breed:</stron> <span>{{ $animal->breed }}</span></p>
            </div>
            <div class="animal-btns">
                <a href={{action('AnimalController@edit', $animal->id) }}><button class="btn btn-warning">Edit Animal</button></a>
                <a href={{action('AnimalController@delete', $animal->id) }}><button class="btn btn-danger">Delete Animal</button></a>
                <a href={{action('OwnerController@index') }}><button class="btn btn-secondary">Go back to owners list</button></a>
            </div>
        </div>
    </div>
    
    <div class="section-container">
        <div class="owner-details">
            <h2>Owner</h2>
            <p>Name:<span>{{ $animal->owner->first_name }}</span></p>
            <p>Surname: <span>{{ $animal->owner->surname }}</span></p>
            <p>Address: <span>{{ $animal->owner->address }}</span></p>
            <p>Phone number: <span>{{ $animal->owner->phone_number}}</span></p>
            <p>E-mail: <span>{{ $animal->owner->email }}</span></p>
        </div>

        <div class="medical-history">
            <h2>Medical History</h2>
        </div>
    </div>
</div>

@endsection

