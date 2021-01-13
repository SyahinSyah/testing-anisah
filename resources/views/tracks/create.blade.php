<x-app>
   <h2> Create Track new track for item : {{ $item->name }} </h2> 
    <br>
    <form method="POST" action="/items/{{ $item->id }}/tracks">
        @csrf
        <div>Type : </div>
        <div class="form-check form-check-inline">
            <input type="radio" name="type" id="typeIn" value="in" 
            class="form-check-input @error('tyoe') is-invalid @enderror">
            <label for="typeIn" class="form-check-label">IN</label>
        </div>
        <div class="form-check form-check-inline">
            <input type="radio" name="type" id="typeOut" value="out"
             class="form-check-input @error('type') is-invalid @enderror">
            <label for="typeOut" class="form-check-label">Out</label>
        <br>
            @error('type')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        </div>
        
        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="text" name="quantity" id="quantity" value="{{ old('quantity')}}" class="form-control @error('quantity') is-invalid @enderror">
            @error('quntity')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>  
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-app>