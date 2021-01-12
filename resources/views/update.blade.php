<x-app>
<h3>Update Item Page</h3>
<br>
<form method="POST" action="/items/{{ $item->id}}">
    @csrf
    @method('patch')
    <div class="form-group">
        <label for="name">
            Name :
        </label>
        <input type="text" id="name" name="name" value="{{ old('name',$item->name) }}" 
        class="form-control @error('name') is-invalid @enderror">
        @error('name')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
        <br>

        <label for="name">
            Total :
        </label>
        <input type="text" id="total" name="total" value="{{ old('total',$item->total)}}"
        class="form-control @error('total') is-invalid @enderror">
        @error('total')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
        <br>
       <button type="submit" class="btn btn-primary"> 
            Submit
       </button>
       <a href="/items" class="btn btn-secondary" >Cancel</a>
    </div>
</form>
</x-app>