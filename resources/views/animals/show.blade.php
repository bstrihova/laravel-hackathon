@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<h1>Animal: {{ $animal->name }}</h1>

<p>Age: {{ $animal->age }}</p>
<p>Weight: {{ $animal->weight }} Lbs</p>
<p>Breed: {{ $animal->breed }}</p>
<img src={{asset($animal->photo)}}>

<a href={{action('AnimalController@edit', $animal->id) }}>Edit Animal</a>
<a href={{action('AnimalController@delete', $animal->id) }}>Delete Animal</a>

<h2>Owner</h2>
<p>Name: {{ $animal->owner->first_name }}</p>
<p>Surname: {{ $animal->owner->surname }}</p>
<p>Address: {{ $animal->owner->address }}</p>
<p>Phone number: {{ $animal->owner->phone_number }}</p>
<p>email: {{ $animal->owner->email }}</p>




