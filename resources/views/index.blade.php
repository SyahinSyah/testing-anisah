items.index from view
<ul>
    @foreach ($items as $item)
    <li>
    {{ $item->name }} = {{ $item->total }}
    <a href="/items/{{$item->id}}">view</a>
    <a href="/items/{{$item->id}}/edit">edit</a>
    <br>
    <form method="POST" action="/items/{{$item->id}}">
        @csrf
        @method('DELETE')
        <input type="submit" value="delete">
    </form>
    @endforeach
    </li>

    <a href="/items/create">Create new Item</a>

</ul>