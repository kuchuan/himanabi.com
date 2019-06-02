<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Likeit extends Model
{
  protected $table = 'likeit';

  protected $guarded = array('likeit_id');

  // public $timestamps = true;

  protected $fillable = [
  	'users_id',	'skills_id', 'updated_at', 'created_at',
  ];
}
