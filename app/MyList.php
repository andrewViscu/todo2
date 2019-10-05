<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyList extends Model
{
    protected $table = 'lists';
    protected $fillable = ['name_of_list'];

    public function items()
    {
        return $this->hasMany('App\Item');

    }
}
