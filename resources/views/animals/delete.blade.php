<h1>Delete animal: {{$animal->name}}</h1>
<form action="{{action("AnimalController@remove", $animal->id)}}" method="get">
    @csrf
    Are you sure you want to delete animal: {{$animal->name}}?

    <button type="submit">Delete</button>

</form>