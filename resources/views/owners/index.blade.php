@extends('layouts/main')

@section('content')

<div class="owner-list">
    <h2>List of owners</h2>

    <div class="owner-list__content">
    
        <div class="btns">
            <a href="{{action('HomepageController@index')}}"><button class="btn btn-secondary">Back to homepage</button></a>
            <a href="{{action('OwnerController@create')}}"><button class="btn btn-success">Create a new owner</button></a>
        </div>
    
        <div class="form">
            <form>
                <input type="text" name="surname" id="" placeholder="Owner's Surname">    
                <input type="text" name="name" id="" placeholder="Animal's Name">
                <button type="submit" class="btn btn-outline-secondary">Search</button>
            </form>
        </div>

        <table class="owner-table table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Surname</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Animals</th>
                </tr>
            </thead>
            <tbody>
                <?php $n = 0 ?>     
                @foreach($owners as $owner) 
                <tr>
                    <th scope="row"> {{ $n = $n + 1}} </th>
                    <th><a href={{action('OwnerController@show', $owner->id) }}>{{$owner->surname}} </a></th>
                    <th>{{$owner->first_name}}</th>
                    <th> 
                        @foreach($owner->animals as $animal) 
                        <li><a href="{{action('AnimalController@show', $animal->id)}}">{{$animal->name}}</a></li>
                        @endforeach
                    </th>
                <tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection