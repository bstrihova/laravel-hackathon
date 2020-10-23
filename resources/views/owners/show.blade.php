<h1>{{$owner->surname}} {{$owner->first_name}}</h1>
<p>Address: {{$owner->address}}</p>
<p>Telephone: {{$owner->phone_number}}</p>
<p>E-mail: {{$owner->email}}</p>

<div class="animals">
    <h2>Animals</h2>
    <ul>

    @foreach ($owner->animals as $animal)
        <li>{{$animal->name}} <img src={{asset($animal->photo)}}></li>
    @endforeach
    </ul>
</div>

