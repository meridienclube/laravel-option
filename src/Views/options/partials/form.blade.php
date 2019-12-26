<div class="form-group">
    <label class="control-label">
        {{ __('option::options.group') }}
    </label>
    {{ Form::select('group_id', $groups, isset($option)? $option->group_id : null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    <label class="control-label">
        {{ __('option::options.label') }}
        <span class="required"> * </span>
    </label>
    {!! Form::text('label', isset($option)? $option->label : null, ['class' => 'form-control', 'placeholder' => __('option::options.label'), 'required']) !!}
</div>

<div class="form-group">
    <label class="control-label">
        {{ __('option::options.name') }}
        <span class="required"> * </span>
    </label>
    {!! Form::text('name', isset($option)? $option->name : null, ['class' => 'form-control', 'placeholder' => __('option::options.name'), 'required']) !!}
</div>

<div class="form-group">
    <label class="control-label">
        {{ __('option::options.type') }}
        <span class="required"> * </span>
    </label>
    {{ Form::select('type', $types, isset($option)? $option->type : null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    <label class="control-label">
        {{ __('option::options.placeholder') }}
        <span class="required"> * </span>
    </label>
    {!! Form::text('placeholder', isset($option)? $option->placeholder : null, ['class' => 'form-control', 'placeholder' => __('option::options.placeholder'), 'required']) !!}
</div>

<div class="form-group">
    <label class="control-label">
        {{ __('option::options.value') }}
        <span class="required"> * </span>
    </label>
    {!! Form::text('value', isset($option)? $option->value : null, ['class' => 'form-control', 'placeholder' => __('option::options.value')]) !!}
</div>

<div class="form-group">
    <label class="control-label">
        {{ __('option::options.required') }}
        <span class=""> *</span>
    </label>
    {{ Form::select('required', [0 => __('No'), 1 => __('Yes')], isset($option)? $option->required : null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    <label class="control-label">
        {{ __('option::options.order') }}
        <span class=""> *</span>
    </label>
    {{ Form::select('order', range(1, 100), isset($option)? $option->order : null, ['class' => 'form-control']) }}
</div>

@includeIf('vendor::partials.buttons_form', ['nameRoute' => 'options'])
