Edit animal: {{$animal->name}}

<form action="{{ action('AnimalController@update', $animal->id) }}" method="post">
    
    @csrf
        <label for="name">Name:
            <input type="text" name="name" value={{$animal->name}}>
        </label><br>

        <label for="surname">Breed:</label>
        <input type="text" name="breed" value={{$animal->breed}}><br>
    
        <label for="address">Species: </label>
        <input type="text" name="species" value={{$animal->species}}><br>
    
        <label for="email">Age: </label>
        <input type="text" name="age" value={{$animal->age}}><br>
    
        <label for="phone_number">Weight:</label>
        <input type="text" name="weight" value={{$animal->weight}}><br>
    
        <button type="submit">Edit Animal</button>
    </form>

<a href={{action('AnimalController@show', $animal->id)}}>Go back to Animal</a>