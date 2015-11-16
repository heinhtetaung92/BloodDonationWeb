<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donater extends Model
{


	public function community()
    {
        return $this->belongsTo('App\Community');
    }

}
