<div class="{{$class}}">
    <label for="{{$for}}">{{$label}}</label>
    <input type="{{$type}}" name="{{$name}}" id="{{$id}}" class="form-control"
        value="{{$value}}">
    <span class="text-danger">
        @error($name)
            {{ $message }}
        @enderror
    </span>
</div>
