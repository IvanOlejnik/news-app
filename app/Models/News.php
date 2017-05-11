<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Parsedown;

class News extends Model
{	
	protected $fillable = ['user_id', 'title','slug','content'];

	public function user()
	{
		return $this->belongsTo('App\Models\User');
	}
 /*	
	  public function getPublishedShop()
	{
		$shop = $this->latest('id')->published()->get();
		return $shop;
	}
	
	public function scopePublished($query)
	{
		$query->where( 'created_at', '<=', Carbon::now())
		->where( 'public', '=', 1);
	}
	*/
	public function setTitleAttribute($value) 
	{
		$this->attributes['title'] = $value;
		$this->attributes['slug'] = str_slug($value);
	}
		
	public function setContentAttribute($value){
		$this->attributes['content'] = clean($value);
	}

	public function getMarkdownContentAttribute() {
		return (new Parsedown)->text($this->attributes['content']);
	}
}
