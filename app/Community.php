<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
	protected $table = 'communities';
    public function donaters()
    {
        return $this->hasMany('Donater');
    }

    public function communitymembers()
    {
        return $this->hasMany('CommunityMember');
    }

}
