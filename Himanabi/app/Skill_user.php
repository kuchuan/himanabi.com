<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill_user extends Model
{
      protected $table = 'skill_user';

		  protected $guarded = array('id');

		  public $timestamps = false;

		  protected $fillable = [
		  	'user_id', 'skill_id',
  		];
}
