<?php
if (!function_exists('form_option')) {
    function form_option($option, $obj, $default = null, $attributes = [])
    {
        $option_text = strtolower(is_string($option) ? $option : $option->type);
        $form = 'Form::' . str_replace('::multiple', 'Multiple', $option_text);
        $name = $attributes['name'] ?? $option_text;
        $value = $default;
        $attributes = $attributes ?? [];
        try {
            if ('select' == $option_text) {
                return $form($name, isset($option->value) ? $option->value->toArray() : [], $value, $attributes);
            }
            return $form($name, $value, $attributes);
        } catch (Exception $e) {
            \Illuminate\Support\Facades\Log::error($e->getMessage());
        }
    }
}