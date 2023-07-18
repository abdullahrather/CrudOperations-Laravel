<div class="form-check">
    <input type="{{ $type }}" class="form-check-input" name="{{ $name }}" id="{{ $id }}"
        value="{{ $value }}" {{ $ischecked ? 'checked' : '' }}>
    <label class="form-check-label" for="{{ $id }}">{{ $label }}</label>
</div>
