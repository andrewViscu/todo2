<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyList extends Model
{
    protected $table = 'lists';

    public function items()
    {
        return $this->hasMany('App\Item');
    }
}
