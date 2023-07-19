<div class="form-group">
    <label for="grp_id">Group</label>
    <select name="grp_id" id="grp_id" class="form-control">
        <option value="">Select Group</option>
        @foreach ($options as $group)
            <option value="{{ $group->grp_id }}"
                {{ $table->grp_id == $group->grp_id || old('grp_id') == $group->grp_id ? 'selected' : '' }}>
                {{ $group->grp_name }}
            </option>
        @endforeach
    </select>
    <span class="text-danger">
        @error('grp_id')
            {{ $message }}
        @enderror
    </span>
</div>

{{-- <div class="form-group">
    <label for="grp_id">Group</label>
    <select name="grp_id" id="grp_id" class="form-control">
        <option value="">Select Group</option>
        @foreach ($groups as $group)
            <option value="{{ $group->grp_id }}"
                {{ $customer->grp_id == $group->grp_id || old('grp_id') == $group->grp_id ? 'selected' : '' }}>
                {{ $group->grp_name }}
            </option>
        @endforeach
    </select>
    <span class="text-danger">
        @error('grp_id')
            {{ $message }}
        @enderror
    </span>
</div> --}}
