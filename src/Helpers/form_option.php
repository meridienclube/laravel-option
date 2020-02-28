<?php
use Illuminate\Support\Str;

if (!function_exists('form_option')) {
    function form_option($option, $obj, $default = null, $attributes = ['class' => 'form-control'])
    {
        try {
            $option_type = is_string($option) ? $option : $option->type;
            $option_name = is_string($option) ? $option : $option->name;
            $multiple = is_string($option) ? false : $option->multiple;
            $form = 'Form::' . $option_type;
            $name = $attributes['name'] ?? $option_name;
            $name = 'options[' . $name . ']';
            $name = (!$multiple) ? $name : $name . '[]';
            //$optionsValues = $obj->optionsValues ?? $obj->options;
            //$value = $optionsValues[$option_name] ?? $default;
            $value = option($obj, $option->name, NULL);

            if($multiple){
                $attributes['multiple'] = $multiple;
            }

            if(in_array(Str::ucfirst($option_type), config('cw_option.models'))) {
                $value = !is_array($value) ? [$value] : $value;
                $service = Str::ucfirst($option_type) . 'Service';
                $list = isset($value) ? resolve($service)
                    ->whereIn('id', $value)->pluck() : [];
                return $form($name, $list, $value, $attributes);
            }

            if ('select' == $option_type) {
                $list = $option->value ?? [];
                $value = !is_array($value) ? [$value] : $value;
                return $form($name, $list, $value, $attributes);
            }

            return $form($name, $value, $attributes);
        } catch (Exception $e) {
            //echo $form . ' - ' . $e->getMessage();
            \Illuminate\Support\Facades\Log::error($e->getMessage());
        }
    }
}