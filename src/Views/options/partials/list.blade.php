<table class="table table-striped" id="options_datatable">
    <thead>
    <tr>
        <th>{{ __('option::options.group') }}</th>
        <th>{{ __('option::options.label') }}</th>
        <th>{{ __('option::options.name') }}</th>
        <th>{{ __('option::options.type') }}</th>
        <th>{{ __('option::options.placeholder') }}</th>
        <th>{{ __('option::options.value') }}</th>
        <th>{{ __('option::options.required') }}</th>
        <th>{{ __('option::options.order') }}</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @foreach($options as $option)
        <tr>
            <td>{{ $option->group->name }}</td>
            <td>{{ $option->label }}</td>
            <td>{{ $option->name }}</td>
            <td>{{ $option->type }}</td>
            <td>{{ $option->placeholder }}</td>
            <td>{{ $option->value }}</td>
            <td>{{ ($option->required)? __('yes') : __('no') }}</td>
            <td>{{ $option->order }}</td>
            <td>
                @if (Route::current()->getName() != 'options.trashed')
                    @include('vendor::partials.buttons_datatable', ['obj' => $option, 'nameRoute' => 'admin.options'])
                @else
                    Deletado em @datetime($option->deleted_at)
                @endif
            </td>
        </tr>
    @endforeach
    </tbody>
</table>


@push('scripts')
    <script>
        $(document).ready(function () {
            $('#options_datatable').DataTable();
        });
    </script>
@endpush
