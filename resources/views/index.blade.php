<x-app>
<h3> Home Page </h3>
<hr>
    <table class="table">
        <thead>
            <tr>
                    <th>Name</th>
                    <th>Total</th>
                    <th>Action</th>
            </tr>
        </thead>
        <tbody>
            
                @foreach ($items as $item)
                <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->total}}</td>
                    <td>
                        <a href="/items/{{$item->id}}" class="btn  btn-primary"> View </a>
                        <a href="/items/{{$item->id}}/edit" class="btn btn-info"> Edit </a> 
                        <form method="POST" action="/items/{{$item->id}}" class="d-inline">
                                @csrf
                                @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                    Delete
                                    </button>
                            </form>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
    <a href="/items/create" class="btn btn-success pull-right" >Create new Item</a>
</x-app>