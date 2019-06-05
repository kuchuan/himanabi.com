<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
      protected $table = 'messages';

		  protected $guarded = array('id');

		  public $timestamps = true;

		  protected $fillable = [
		  	'room_id', 'users_toggle', 'talk',
 		 ];
}
