<?php

namespace App;

use Illuminate\Notifications\Notifiable;
// use Illuminate\Contracts\Auth\MustVerifyEmail;//Dean ,del
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;


use Illuminate\Contracts\Auth\MustVerifyEmail as MustVerifyEmailContract; //Dean Add
use Illuminate\Auth\MustVerifyEmail; //Dean Add
use App\Notifications\CustomVerifyEmail; //dean
use App\Notifications\CustomResetPassword; //dean Adds

// class User extends Authenticatable //Dean Del
class User extends Authenticatable implements MustVerifyEmailContract//Dean Add
{
    // use Notifiable;// Dean del
    use MustVerifyEmail, Notifiable; //Dean Add

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'birthday', 'language', 'area', 'picture',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password','remember_token',
    ];

    //下記付け加え
    public function sendEmailVerificationNotification()
    {
        $this->notify(new CustomVerifyEmail());
    }
    //書き付け加え
    public function sendPasswordResetNotification($token) {
        $this->notify(new CustomResetPassword($token));
    }



    public function skills() {  //sを忘れないように
        return $this->hasMany(Skill::class);
        //userに対して多になるskillのテーブル名を使う
        // return $this->hasMany("App\Skill");
        //userに対して多になるskillのテーブル名を使う

    }

    // public function skills() {  //sを忘れないように
    //     return $this->belongsToMany(Skill::class);
    //     //userに対して多になるskillのテーブル名を使う
    //     // return $this->hasMany("App\Skill");
    //     //userに対して多になるskillのテーブル名を使う


    public function likes(){

        return $this->belongsToMany('App\Skill', 'room_user');
    }


}
