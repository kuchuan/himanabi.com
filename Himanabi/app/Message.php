<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
  protected $table = 'message';

  protected $guarded = array('message_id');

  public $timestamps = true;

  protected $fillable = [
  	'room_id', 'created_at', 'users_toggle', 'talk',
  ];

}
