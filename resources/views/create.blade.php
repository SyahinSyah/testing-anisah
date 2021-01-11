<form method="POST" action="/items">
    @csrf
    <label for="name">
        name
    </label>
    <input type="text" id="name" name="name">
    <br>

    <label for="name">
        total
    </label>
    <input type="text" id="total" name="total">
    <br>

    <input type="submit">

</form>