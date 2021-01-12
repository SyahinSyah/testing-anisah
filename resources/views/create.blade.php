<x-app>
{{-- @if ($errors->any())
     <div class="aleart alert-danger">
    <ul>
        @foreach ($errors->all()  as $error)
        <li> {{ $error }} </li>   
        @endforeach
    </ul>
     </div>
@endif --}}

<form method="POST" action="/items">
    @csrf
    <div class="form-group">
            <label for="name">
                Name :
            </label>
            <input type="text" id="name" name="name" value="{{ old('name')}}" class="form-control @error('name') is-invalid @enderror">
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            <br>
            <label for="name">
                Total :
            </label>
            <input type="text" id="total" name="total" value="{{ old('total')}}" class="form-control @error('total') is-invalid @enderror">
            @error('total')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            <br>
            <button type="submit" class="btn btn-primary">
                Submit
            </button>
    </div>
</form>
</x-app>