<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $timestamps = false;
	
	public function user()
	{
		return $this->belongsToMany('App\Models\Role', 'role_users', 'role_id', 'user_id');
	}
}
