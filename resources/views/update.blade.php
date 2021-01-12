<x-app>
<h3>Update Item Page</h3>
<br>
<form method="POST" action="/items/{{ $item->id}}">
    @csrf
    @method('patch')
    <div class="form-group">
        <label for="name">
            name
        </label>
        <input type="text" id="name" name="name" value="{{ $item->name }}" class="form-control">
        <br>

        <label for="name">
            total
        </label>
        <input type="text" id="total" name="total" value="{{$item->total}}" class="form-control">
        <br>
       <button type="submit" class="btn btn-primary"> 
            Submit
       </button>
       <a href="/items" class="btn btn-secondary" >Cancel</a>
    </div>
</form>
</x-app>