<h1>List of owner</h1>

<form action="{{action('OwnerController@searchOwner')}}" method="post">
    @csrf
    <label> Owner's Surname: <br>
        <input type="text" name="surname" id="">
    </label>  
    <button type="submit">Search</button>
</form>


<ul>
@foreach($owners as $owner) 
    <a href={{action('OwnerController@show', $owner->id) }}><li>{{$owner->surname}} {{$owner->first_name}}</li></a>
    <ul>
        @foreach($owner->animals as $animal) 
        <li>{{$animal->name}}</li>
        @endforeach
    </ul>
@endforeach
</ul>