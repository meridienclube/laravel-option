<?php

namespace ConfrariaWeb\Option\Models;

use Illuminate\Database\Eloquent\Model;

class OptionGroup extends Model
{

    protected $fillable = [
        'name'
    ];

    public function options()
    {
        return $this->hasMany('ConfrariaWeb\Option\Models\Option', 'group_id');
    }
}
