<?php

use Illuminate\Support\Str;

if (!function_exists('option')) {

    /***
     * @param $obj
     * @param $option
     * @param null $default
     * @return \Illuminate\Support\Collection|mixed|null
     */
    function option($obj, $option, $default = null)
    {
        if (!is_object($obj) || !isset($option) || empty($option)) {
            return NULL;
        }
        $models = config('cw_option.models');
        $name = Str::snake($option);
        $option = resolve('OptionService')->where(['name' => $name])->first();
        $service = Str::ucfirst($option->type);
        if(isset($obj->optionsValues)) {
            $default = $obj->optionsValues->where(['name' => $name])->first()->content ?? $default;
        }else {
            $default = $obj->options[$name] ?? $default;
        }
        if(in_array($service, $models)){
            if (is_array($default)) {
                $default = resolve($service . 'Service')->whereIn('id', $default)->get();
            }else {
                $default = resolve($service . 'Service')->where(['id' => $default])->get();
            }
        }
        return (isJSON($default)) ? json_decode($default) : $default;
    }
}
