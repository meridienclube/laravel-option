@extends(config('cw_option.layout'))
@section('title', __('option::groups.edit', ['name' => $group->name]))
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title float-left">
                        {{ __('option::groups.edit', ['name' => $group->name]) }}
                    </h3>
                    @includeIf('option::partials.card_header_pills', ['nameRoute' => 'options'])
                </div>
                <div class="card-body">
                    {!! Form::model($group, ['route' => ['admin.options.groups.update', $group->id], 'method' => 'put', 'class' => 'horizontal-form']) !!}
                        @include('option::groups.partials.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection

