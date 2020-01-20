<?php

namespace ConfrariaWeb\Option\Controllers;

use ConfrariaWeb\Option\Requests\StoreOptionRequest;
use ConfrariaWeb\Option\Requests\UpdateOptionRequest;
use App\Http\Controllers\Controller;

class OptionController extends Controller
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
        return view(config('cw_option.views') . 'options.index', $this->data);
    }

    public function index()
    {
        $this->data['options'] = resolve('OptionService')->all();
        return view(config('cw_option.views') . 'options.index', $this->data);
    }

    public function create()
    {
        $this->data['groups'] = resolve('OptionGroupService')->pluck();
        return view(config('cw_option.views') . 'options.create', $this->data);
    }

    public function store(StoreOptionRequest $request)
    {
        $option = resolve('OptionService')->create($request->all());
        return redirect()
            ->route('admin.options.edit', $option->id)
            ->with('status', 'Opção criada com sucesso!');
    }

    public function show($id)
    {
        $this->data['option'] = resolve('OptionService')->find($id);
        return view(config('cw_option.views') . 'options.show', $this->data);
    }

    public function edit($id)
    {
        $this->data['groups'] = resolve('OptionGroupService')->pluck();
        $this->data['option'] = resolve('OptionService')->find($id);
        return view(config('cw_option.views') . 'options.edit', $this->data);
    }

    public function update(UpdateOptionRequest $request, $id)
    {
        $option = resolve('OptionService')->update($request->all(), $id);
        return redirect()
            ->route('admin.options.edit', $option->id)
            ->with('status', 'Opção editada com sucesso!');
    }

    public function destroy($id)
    {
        $option = resolve('OptionService')->destroy($id);
        return redirect()
            ->route('admin.options.index')
            ->with('status', 'Opção deletado com sucesso!');
    }
}
