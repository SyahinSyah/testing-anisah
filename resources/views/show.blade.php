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
</x-app>