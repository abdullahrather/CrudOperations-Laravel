<div class="{{$class}}">
    <label for="{{$for}}">{{$label}}</label>
    <select name="{{$name}}" id="{{$id}}" class="form-control">
        <option value="">{{$option}}</option>
        @foreach {{$foreacharray}}
            <option value="{{$value}}"
                {{$attribute}}>
                {{$option2}}</option>
        @endforeach
    </select>
    <span class="text-danger">
        @error($name)
            {{ $message }}
        @enderror
    </span>
</div>
