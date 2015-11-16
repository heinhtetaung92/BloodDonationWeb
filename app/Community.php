<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Community extends Model
{

	public function __construct(){

	}

	protected $table = 'communities';

    public function donaters()
    {
        return $this->hasMany('App\Donater');
    }

    public function communitymembers()
    {
        return $this->hasMany('App\CommunityMember');
    }

}
