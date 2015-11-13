<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommunityMember extends Model
{
    public function community()
    {
        return $this->belongsTo('Communitiy');
    }
}
