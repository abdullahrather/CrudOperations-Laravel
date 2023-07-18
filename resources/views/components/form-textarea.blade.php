<div class="{{ $class }}">
    <label for="{{ $for }}">{{ $label }}</label>
    <textarea class="form-control" name="{{ $name }}" id="{{ $id }}" rows="{{ $rows }}">{{ $selectedvalue ?: old($name) }}</textarea>
</div>
