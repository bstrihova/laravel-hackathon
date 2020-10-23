
<form action="{{ action('AnimalController@store') }}" method="post">
    
    @csrf
    {{ $owner->id }}
        <label for="name">Name:
            <input type="text" name="name">
        </label><br>

        <label for="surname">Breed:</label>
        <input type="text" name="breed"><br>
    
        <label for="address">species: </label>
        <input type="text" name="species"><br>
    
        <label for="email">Age: </label>
        <input type="text" name="age"><br>
    
        <label for="phone_number">Weight:</label>
        <input type="text" name="weight"><br>
    
        <button type="submit">Add new Animal</button>
    </form>