@extends(config('cw_option.layout'))
@section('title', __('option::options.options'))
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title float-left">
                        {{ __($title ?? 'option::options.list') }}
                    </h3>
                    @includeIf('option::partials.card_header_pills', ['nameRoute' => 'options'])
                </div>
                <div class="card-body">
                    @include('option::options.partials.list')
                </div>
            </div>
        </div>
    </div>

@endsection
