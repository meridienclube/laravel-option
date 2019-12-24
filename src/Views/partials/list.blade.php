<table class="table table-striped" id="options_datatable">
    <thead>
    <tr>
        <th>{{ __('options.group') }}</th>
        <th>{{ __('options.label') }}</th>
        <th>{{ __('options.name') }}</th>
        <th>{{ __('options.type') }}</th>
        <th>{{ __('options.placeholder') }}</th>
        <th>{{ __('options.value') }}</th>
        <th>{{ __('options.required') }}</th>
        <th>{{ __('options.order') }}</th>
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
                    @datatableActions(['obj' => $option, 'slug' => 'options'])
                    Botões de options
                    @enddatatableActions
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
