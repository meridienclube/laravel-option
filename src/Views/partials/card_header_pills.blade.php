<div class="btn-group float-right btn-group-sm" role="group" aria-label="">
    <a class=" btn btn-sm btn-primary" href="{{ route('admin.options.create') }}">
        {{ trans('option::options.create') }}
    </a>
    <a class=" btn btn-sm btn-secondary" href="{{ route('admin.options.index') }}">
        {{ trans('option::options.options') }}
    </a>

    <a class=" btn btn-sm btn-primary" href="{{ route('admin.options.groups.create') }}">
        {{ trans('option::groups.create') }}
    </a>
    <a class=" btn btn-sm btn-secondary" href="{{ route('admin.options.groups.index') }}">
        {{ trans('option::groups.groups') }}
    </a>
</div>
