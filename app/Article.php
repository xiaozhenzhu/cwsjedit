<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'EditNews';
	protected $primaryKey = 'rowguid';
	
	function scopeSavedateGreaterThan($query, $savedate) {
		return $query->select('en_headline')->where('savedate', '>', $savedate);
	}
}
