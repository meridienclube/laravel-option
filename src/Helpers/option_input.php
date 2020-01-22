<?php
if (!function_exists('option_input')) {

    /**
     * @param $obj
     * @param $option
     * @param bool $inline
     * @param array $config
     * @param null $view
     *
     * @return string|null
     */


    function option_input($obj, $option, $inline = false, $config = [], $view = null)
    {
        $inputName = (isset($config['name']) && !empty($config)) ? $config['name'] . '[' . $option->name . ']' : 'sync[optionsValues][' . $option->name . ']';
        $optionConfig = $option->config;
        $models = config('cw_option.models');

        $inlineGroup = $inline ? 'row' : '';
        $inlineLabel = $inline ? 'col-xl-3 col-lg-3 col-form-label' : 'form-label';
        $inlineInput = $inline ? '' : '';

        $view = '<div class="form-group ' . $inlineGroup . '">';
        $view .= '<label class="' . $inlineLabel . '">' . $option->label . '</label>';
        $view .= '<div class="' . $inlineInput . '">';

        if (in_array($option->type, $models)) {
            try {
                $list = [];
                $isMultiple = Str::contains($option->type, 'multiple') ? true : false;
                $inputName = $isMultiple ? $inputName . '[]' : $inputName;
                $service = Str::before($option->type, '::multiple');

                $serviceObject = resolve($service . 'Service');
                if (!empty($optionConfig['filters']['where'])) {
                    $user = $serviceObject->where($optionConfig['filters']['where']);
                    $list = $user->pluck('name', 'id')->prepend('Selecione uma opção...', '');
                }
                if (empty($optionConfig['filters']['where'])) {
                    $list = $serviceObject->pluck()->prepend('Selecione uma opção...', NULL);
                }
            } catch (Exception $e) {
                dd(new \App\Services\UserService());
            }
                $view .= Form::select($inputName, $list, option(isset($obj) ? $obj : null, $option->name, NULL), ['multiple' => $isMultiple, 'class' => 'form-control kt-select2']);

        } else if ($option->type == 'checkbox') {
            $view .= '<span class="kt-switch">';
            $view .= '<label>';
            $view .= Form::checkbox($inputName, 1, option(isset($obj) ? $obj : null, $option->name, NULL));
            $view .= '<span></span>';
            $view .= '</label>';
            $view .= '</span>';
        } else if ($option->type == 'select') {
            $view .= Form::select($inputName, isset($option->value) ? $option->value->toArray() : [], option(isset($obj) ? $obj : null, $option->name, NULL), ['class' => 'form-control']);
        } else if ($option->type == 'star') {
            $view .= option_star($option->name, json_decode($option->value), option(isset($obj) ? $obj : null, $option->name, NULL));
        } else if ($option->type == 'textarea') {
            $view .= Form::textarea($inputName, option(isset($obj) ? $obj : null, $option->name, NULL), ['class' => 'form-control', 'placeholder' => $option->label]);
        } else {
            $view .= Form::text($inputName, option(isset($obj) ? $obj : null, $option->name, NULL), ['class' => 'form-control', 'placeholder' => $option->label]);
        }

        $view .= '</div>';
        $view .= '</div>';

        return $view;
    }

}

if (!function_exists('option_star')) {
    /**
     * @param string $name nome do option
     * @param array $starValues Quantidade de estrelas e o valor delas
     * @param int $value O valor do atributo
     * @param bool $showValueAside Se for verdadeiro, exibe o valor do atributo
     *                             ao lado das estrelas
     *
     * @return string
     */
    function option_star($name = 'star', $starValues = [1, 2, 3, 4, 5], $value = 0, $showValueAside = false)
    {
        $star = '<div class="option_input_star ">';

        foreach ($starValues as $starValue) {

            $checked = ($starValue >= $value && $starValue <= $value) ? 'checked' : '';

            $star .= '<label>
                <input type="radio"
                        class="cm_star"
                        name="' . $name . '"
                        value="' . $starValue . '"
                        ' . $checked . '/>
                <i class="fa"></i>
            </label>';
        }

        $star .= '</div>';

        if ($showValueAside) {
            $star .= '<div id="option_star_voto"> </div>';
        }

        return $star;
    }
}
