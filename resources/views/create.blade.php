<x-app>
<form method="POST" action="/items">
    @csrf
    <div class="form-group">
            <label for="name">
                Name :
            </label>
            <input type="text" id="name" name="name" class="form-control">
            <br>

            <label for="name">
                Total :
            </label>
            <input type="text" id="total" name="total" class="form-control">
            <br>
            
            <button type="submit" class="btn btn-primary">
                Submit
            </button>
    </div>
</form>
</x-app>