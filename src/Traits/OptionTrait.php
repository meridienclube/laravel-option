<?php

namespace ConfrariaWeb\Option\Traits;

trait OptionTrait
{

    public function options()
    {
        return $this->belongsToMany('ConfrariaWeb\Option\Models\Option');
    }

    public function optionsValues()
    {
        return $this->morphToMany('ConfrariaWeb\Option\Models\Option', 'optiongable')
            ->withPivot('content')
            ->withTimestamps();
    }

}
