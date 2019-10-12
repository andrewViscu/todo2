<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['done'];
    protected $table = 'items';
    public function lists()
    {
        return $this->hasMany('App\MyList');

    }
}
