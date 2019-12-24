<?php

namespace ConfrariaWeb\Option\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Option extends Model
{

    use SoftDeletes;

    protected $fillable = [
        'group_id',
        'label',
        'name',
        'type',
        'placeholder',
        'value',
        'required',
        'order'
    ];
    
    protected $casts = [
        'value' => 'collection'
    ];

    public function group()
    {
        return $this->belongsTo('App\OptionGroup', 'group_id');
    }

}
