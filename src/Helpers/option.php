<?php
if (!function_exists('option')) {

    function option($obj, $option, $default = null)
    {
        $models = config('cw_option.models');

        if (is_object($obj)) {
            if ($obj->optionsValues) {
                $optionsValues = $obj->optionsValues->where('name', $option)->first();

                if ($optionsValues) {
                    if (in_array($optionsValues->type, $models)) {
                        $service = Str::before($optionsValues->type, '::multiple');
                        $whereInId = isset($optionsValues->pivot->content) ? json_decode($optionsValues->pivot->content) : [];
                        if (!is_array($whereInId)) {
                            $default = resolve($service . 'Service')->where(['id' => $whereInId])->get();
                        } else {
                            $default = resolve($service . 'Service')->whereIn('id', $whereInId)->get();
                        }
                    } else {
                        $default = (isset($optionsValues->pivot->content))
                            ? $optionsValues->pivot->content
                            : $default;
                    }
                }
            }
        }
        return (isJSON($default)) ? json_decode($default) : $default;
    }
}
