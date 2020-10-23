<h1>{{$owner->surname}} {{$owner->first_name}}</h1>
<p>Address: {{$owner->address}}</p>
<p>Telephone: {{$owner->phone_number}}</p>
<p>E-mail: {{$owner->email}}</p>

<p>
    <a href={{action('AnimalController@create', $owner->id) }}>Create a new Animal</a>
</p>

<p>
    <a href={{action('OwnerController@edit', $owner->id) }}>Update owner</a>
</p>

<div class="animals">
    <h2>Animals</h2>
    <ul>

    @foreach ($owner->animals as $animal)
        <li>{{$animal->name}} <img src={{asset($animal->photo)}}></li>
    @endforeach
    </ul>
</div>

