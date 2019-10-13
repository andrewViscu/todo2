<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['done', 'list_item'];
    public function lists()
    {
        return $this->hasMany('App\MyList');

    }
}
