Update Item 
<br>
<form method="POST" action="/items/{{ $item->id}}">
    @csrf
    @method('patch')
    <label for="name">
        name
    </label>
    <input type="text" id="name" name="name" value="{{ $item->name }}">
    <br>

    <label for="name">
        total
    </label>
    <input type="text" id="total" name="total" value="{{$item->total}}">
    <br>
    <input type="submit">
</form>