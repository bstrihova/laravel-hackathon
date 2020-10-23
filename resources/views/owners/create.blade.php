
<form action="{{ action('OwnerController@store') }}" method="post">
    
@csrf
    <label for="first_name">First Name:
        <input type="text" name="first_name">
    </label><br>
    <label for="surname">Surname:</label>
    <input type="text" name="surname"><br>

    <label for="address">Adress: </label>
    <input type="text" name="address"><br>

    <label for="email">Email: </label>
    <input type="text" name="email"><br>

    <label for="phone_number">Phone Number:</label>
    <input type="text" name="phone_number"><br>

    <button type="submit">Add new owner</button>
</form>