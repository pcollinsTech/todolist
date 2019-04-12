<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'items';

        public function items()
        {
            return $this->belongsTo('App/Task');
        }
}
