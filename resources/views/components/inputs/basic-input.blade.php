@props([
    'id' => '',
    'label' => '',
    'name' => '',
    'placeholder' => '',
    'type' => 'text',
    'value' => '',
])

<div class="form-group">
    <label for="{{ $id }}">{{ $label }}</label>
    <input type="{{ $type }}" class="form-control" id="{{ $id }}" placeholder="{{ $placeholder }}"
        name="{{ $name }}" value="{{ $value }}">
</div>
