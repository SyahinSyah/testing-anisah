<x-app>
<h3>Item Show</h3> 
<br>
<div class="form-group">
    <label for="name">
        name :
    </label>
    <input type="text" id="name" value="{{ $item->name }}" readonly class="form-control-plaintext">
    <label for="total">
        total :
    </label>
    <input type="text" id="total" value="{{ $item->total }}" readonly class="form-control-plaintext">    
</div>
<hr>
<a href="\items\{{$item->id}}\tracks\create" class="btn btn-success">Create New Track </a>
<a href="\items" class="btn btn-secondary">back to list</a>
<hr>
<table class="table">
    <tbody>
        <tr>
            <th>Date</th>
            <th>Type</th>
            <th>Quantity</th>
        </tr>
        @foreach ($item->track as $track)
            <tr>
                <td>{{ $track->created_at}}</td>
                <td> {{ $track->type }} </td>
                <td> {{ $track->quantity }} </td>
                <td> 
                    <form method="POST" action="/tracks/{{$track->id}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>


</table>




</x-app>