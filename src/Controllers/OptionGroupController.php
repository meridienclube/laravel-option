<?php

namespace ConfrariaWeb\Option\Controllers;

use ConfrariaWeb\Option\Requests\StoreOptionGroupRequest;
use ConfrariaWeb\option\Requests\UpdateOptionGroupRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OptionGroupController extends Controller
{

    protected $data;

    public function __construct()
    {
        $this->data = [];
        $this->data['types'] = config('cw_option.types');
    }

    public function trashed()
    {
        $this->data['options'] = resolve('OptionService')->trashed();
        return view(config('cw_option.views') . 'options_groups.index', $this->data);
    }

    public function index()
    {
        $this->data['groups'] = resolve('OptionGroupService')->all();
        return view(config('cw_option.views') . 'options_groups.index', $this->data);
    }

    public function create()
    {
        $this->data['groups'] = resolve('OptionGroupService')->pluck();
        return view(config('cw_option.views') . 'options_groups.create', $this->data);
    }

    public function store(StoreOptionGroupRequest $request)
    {
        $option = resolve('OptionGroupService')->create($request->all());
        return redirect()
            ->route('admin.options.groups.edit', $option->id)
            ->with('status', 'Opção criada com sucesso!');
    }

    public function show($id)
    {
        $this->data['option'] = resolve('OptionGroupService')->find($id);
        return view(config('cw_option.views') . 'options_groups.show', $this->data);
    }

    public function edit($id)
    {
        $this->data['group'] = resolve('OptionGroupService')->find($id);
        return view(config('cw_option.views') . 'options_groups.edit', $this->data);
    }

    public function update(UpdateOptionGroupRequest $request, $id)
    {
        $option = resolve('OptionGroupService')->update($request->all(), $id);
        return redirect()
            ->route('admin.options.groups.edit', $option->id)
            ->with('status', 'Opção editada com sucesso!');
    }

    public function destroy($id)
    {
        $option = resolve('OptionGroupService')->destroy($id);
        return redirect()
            ->route('admin.options.groups.index')
            ->with('status', 'Opção deletado com sucesso!');
    }
}
