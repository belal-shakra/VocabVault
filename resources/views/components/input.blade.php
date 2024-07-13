<div class="mb-3">
    <div class="form-floating flex-fill mb-0">
        <input type="{{ $name }}" class="form-control border border-1 border-secondary rounded"
        id="{{ $name }}" placeholder="" name="{{ $name }}" value="{{ old($name) }}">
    
        <label class="form-label" for="{{ $name }}">{{ $label }}</label>
    </div>
    @error($name)
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>