@extends('layouts.metronic')
@section('title', __('options.new'))
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                {!! Form::open(['route' => 'options.store', 'class' => 'horizontal-form']) !!}
                @include('options.partials.form')
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection
