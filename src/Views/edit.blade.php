@extends('layouts.metronic')
@section('title', __('options.edit'))
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                {!! Form::model($option, ['route' => ['options.update', $option->id], 'method' => 'put', 'class' => 'horizontal-form']) !!}
                @include('options.partials.form')
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection
