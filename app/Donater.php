<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donater extends Model
{
	public function communities()
    {
        return $this->belongsTo('Community');
    }

}
