<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    //
  protected $table = 'skills';

  protected $guarded = array('skils_id');

  public $timestamps = true;

  protected $fillable = [
	    'skills_id',
			'skills_users',
			'toggle_user',
			'skills_category',
			'skills_name',
			'skills_experience',
			'skills_get',
			'skills_explanation',
			'skills_enthusiasm',
			'skills_area',
			'skills_picture',
			'Interest01',
			'Interest02',
			'Interest03',
			'Interest04',
			'Interest05',
			'Interest06',
			'Interest07',
			'Interest08',
			'Interest09',
			'Interest10',
			'Interest11',
			'Interest12',
			'Interest13',
			'Interest14',
			'Interest15',
			'Interest16',
			'Interest17',
			'Interest18',
  ];

}