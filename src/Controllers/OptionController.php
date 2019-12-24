<?php

namespace ConfrariaWeb\Option\Controllers;

use Illuminate\Http\Request;

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
        return view(config('cw_option.views') . 'index', $this->data);
    }

    public function index()
    {
        $this->data['options'] = resolve('OptionService')->all();
        return view(config('cw_option.views') . 'index', $this->data);
    }

    public function create()
    {
        $this->data['groups'] = resolve('OptionGroupService')->pluck();
        return view(config('cw_option.views') . 'create', $this->data);
    }

    public function store(Request $request)
    {
        $option = resolve('OptionService')->create($request->all());
        return redirect()
            ->route('options.edit', $option->id)
            ->with('status', 'Opção criada com sucesso!');
    }

    public function show($id)
    {
        $this->data['option'] = resolve('OptionService')->find($id);
        return view(config('cw_option.views') . 'show', $this->data);
    }

    public function edit($id)
    {
        $this->data['groups'] = resolve('OptionGroupService')->pluck();
        $this->data['option'] = resolve('OptionService')->find($id);
        return view(config('cw_option.views') . 'edit', $this->data);
    }

    public function update(Request $request, $id)
    {
        $option = resolve('OptionService')->update($request->all(), $id);
        return redirect()
            ->route('options.edit', $option->id)
            ->with('status', 'Opção editada com sucesso!');
    }

    public function destroy($id)
    {
        $option = resolve('OptionService')->destroy($id);
        return redirect()
            ->route('options.index')
            ->with('status', 'Opção deletado com sucesso!');
    }
}
