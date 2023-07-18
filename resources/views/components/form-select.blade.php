<div class="{{ $class }}">
    <label for="{{ $for }}">{{ $label }}</label>
    <select name="{{ $name }}" id="{{ $id }}" class="form-control">
        <option value="">{{ $option }}</option>
        @foreach ($options as $value)
            <option value="{{ $value }}" {{ $selectedvalue == $value || old($name) == $value ? 'selected' : '' }}>
                {{ $value }}</option>
        @endforeach
    </select>
    <span class="text-danger">
        @error($name)
            {{ $message }}
        @enderror
    </span>
</div>
