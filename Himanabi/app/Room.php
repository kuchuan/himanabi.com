<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
  protected $table = 'room';

  protected $guarded = array('room_id');

  // public $timestamps = true;

  protected $fillable = [
  	'skills_id', 'follow_user_id',
  ];
}
