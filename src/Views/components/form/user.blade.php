{{ Form::select2(
    $name,
    $list?? [],
    $value?? [],
    $attributes?? ['class' => 'control-label'],
    ['server_side' => ['route' => $route?? 'api.users.select2']]
) }}