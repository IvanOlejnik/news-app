<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{	
	protected $fillable = ['user_id', 'title','slug','content'];

	public function user()
	{
		return $this->belongsTo('App\Models\User');
	}
	
	public function setTitleAttribute($value) 
	{
		$this->attributes['title'] = $value;
		$this->attributes['slug'] = str_slug($value);
	}
}
