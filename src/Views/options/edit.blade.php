@extends(config('cw_option.layout'))
@section('title', __('option::options.new'))
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title float-left">
                        {{ __($title ?? 'option::options.create') }}
                    </h3>
                    @includeIf('option::partials.card_header_pills', ['nameRoute' => 'options'])
                </div>
                <div class="card-body">
                    {!! Form::model($option, ['route' => ['admin.options.update', $option->id], 'method' => 'put', 'class' => 'horizontal-form']) !!}
                    @include('option::options.partials.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection
