<div class="form-group">
    <label class="control-label">Grupo do option</label>
    {{ Form::select('group_id', $groups, isset($option)? $option->group_id : null, ['class' => 'form-control']) }}
</div>


<div class="form-group">
    <label class="control-label">{{ __('options.label') }} <span class="required"> * </span></label>
    {!! Form::text('label', isset($option)? $option->label : null, ['class' => 'form-control', 'placeholder' => __('options.label'), 'required']) !!}
</div>

<div class="form-group">
    <label class="control-label">{{ __('options.name') }} <span class="required"> * </span></label>
    {!! Form::text('name', isset($option)? $option->name : null, ['class' => 'form-control', 'placeholder' => __('options.name'), 'required']) !!}
</div>

<div class="form-group">
    <label class="control-label">Tipo do option *</label>
    {{ Form::select('type', $types, isset($option)? $option->type : null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    <label class="control-label">{{ __('options.placeholder') }} <span
            class="required"> * </span></label>
    {!! Form::text('placeholder', isset($option)? $option->placeholder : null, ['class' => 'form-control', 'placeholder' => __('options.placeholder'), 'required']) !!}
</div>

<div class="form-group">
    <label class="control-label">{{ __('options.value') }} <span class="required"> * </span></label>
    {!! Form::text('value', isset($option)? $option->value : null, ['class' => 'form-control', 'placeholder' => __('options.value')]) !!}
</div>

<div class="form-group">
    <label class="control-label">{{ __('options.required') }} <span class=""> *</span></label>
    {{ Form::select('required', [0 => __('No'), 1 => __('Yes')], isset($option)? $option->required : null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    <label class="control-label">Ordem do option</label>
    {{ Form::select('order', range(1, 100), isset($option)? $option->order : null, ['class' => 'form-control']) }}
</div>

