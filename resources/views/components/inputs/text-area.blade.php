@props([
    'id' => '',
    'name' => '',
    'label' => '',
    'rows' => '3',
    'type' => 'text',
    'value' => '',
])

<div class="form-group mb-3">
    <label for="{{ $id }}" class="form-label">{{ $label }}</label>
    <textarea class="form-control" id="{{ $id }}" name="{{ $name }}" rows="3" style="resize: none">{{ $slot }}</textarea>
</div>
