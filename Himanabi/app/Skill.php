<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
		protected $table = 'skills';

		protected $guarded = array('id');

		public $timestamps = true;

		protected $fillable = [
			'id',
			'users_id',
			'toggle_user',
			'skills_category',
			'skills_name',
			'skills_experience',
			'skills_get',
			'skills_explanation',
			'skills_enthusiasm',
			'skills_area',
			'skills_picture',
			'interest01',
			'interest02',
			'interest03',
			'interest04',
			'interest05',
			'interest06',
			'interest07',
			'interest08',
			'interest09',
			'interest10',
			'interest11',
			'interest12',
			'interest13',
			'interest14',
			'interest15',
			'interest16',
			'interest17',
			'interest18',
			'interest19',
			'interest20',
		];


		public function user() {   //多のskillに対して一になるusersのテーブル名を使う
			return $this->belongsTo(User::class);
		}

		public function room_users() {
			return $this->belongstoMany(Room_user::class);
		}

}
